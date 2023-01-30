<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-sliders', ['only' => ['index']]);
        $this->middleware('permission:create-slider', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-slider', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-slider', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        if (count($sliders) > 10) {
            Alert::warning('warning', 'Don\'t add more than 10 sliders for better site performance!');
        }
        return view('backend.site.home.sliders.index', compact(
            'sliders'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.site.home.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(Slider::$rules, Slider::$messages);

        $form_request = $request->only('title', 'txt');
        $form_request['is_active'] = boolval($request->is_active);
        // getting the image from the request object
        $image = $request->file('image');
        // renaming the image using timestamp
        $new_image_name = time() . '.' . $image->getClientOriginalExtension();

        // check for the presence of the sliders directory and if not present create the directory
        AppHelper::checkDirectory('sliders');
        // defining where to store the image
        $location = public_path('uploads/sliders/' . $new_image_name);

        Image::make($image->getRealPath())->fit(1600, 800)->save($location, 80);
        $form_request['image'] = $new_image_name;

        try {
            DB::beginTransaction();
            auth()->user()->sliders()->create($form_request);
            DB::commit();
            alert()->success('success', 'slider created successfully');
            return redirect()->route('backend.sliders.index');

        } catch (\Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.sliders.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.site.home.sliders.edit', compact(
            'slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if (is_null($request->file('image'))) {
            $request->validate(Arr::except(Slider::$rules, 'image'), Slider::$messages);
        } else {
            $request->validate(Slider::$rules, Slider::$messages);
        }


        $form_request = $request->only('title', 'txt');
        $form_request['is_active'] = boolval($request->is_active);

        // check if there is an image in the request object
        if ($request->hasFile('image')) {
            // getting the image from the request object
            $image = $request->file('image');
            // renaming the image using timestamp
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            // check for the presence of the sliders directory and if not present create the directory
            AppHelper::checkDirectory('sliders');
            // defining where to store the image
            $location = public_path('uploads/sliders/' . $new_image_name);

            Image::make($image->getRealPath())->fit(1600, 800)->save($location, 80);

            // Deleting the old image from the file system
            Storage::delete('sliders/' . $slider->image);

            $form_request['image'] = $new_image_name;
        }

        try {
            DB::beginTransaction();
            $slider->update($form_request);
            DB::commit();
            alert()->success('success', 'Slider updated successfully');
            return redirect()->route('backend.sliders.index');

        } catch (\Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.sliders.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        // deleting the image of the slider

        return back();

        try {
            DB::beginTransaction();
            Storage::delete('sliders/' . $slider->image);
            $slider->delete();
            DB::commit();
            return back();
        } catch (\Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
