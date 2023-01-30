<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-testimonials', ['only' => ['index']]);
        $this->middleware('permission:create-testimonial', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-testimonial', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-testimonial', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $testimonials = Testimonial::latest()->get();
        return view('backend.site.home.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.site.home.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Testimonial::$rules, Testimonial::$messages);
        $form_request = $request->except('image');
        $image = $request->file('image');
        $new_image_name = time() . '.' . $image->getClientOriginalExtension();
        AppHelper::checkDirectory('testimonials');
        $location = public_path('uploads/testimonials/' . $new_image_name);
        Image::make($image->getRealPath())->fit(100)->save($location, 100);
        $form_request['image'] = $new_image_name;

        try {

            DB::beginTransaction();
            auth()->user()->testimonials()->create($form_request);
            DB::commit();
            alert()->success('success', 'created successfully');
            return redirect()->route('backend.testimonials.index');

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.testimonials.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backend.site.home.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        if (is_null($request->file('image'))) {
            $request->validate(Arr::except(Testimonial::$rules, 'image'), Testimonial::$messages);
        } else {
            $request->validate(Testimonial::$rules, Testimonial::$messages);
        }

        $form_request = $request->except('image');

        // check if there is an image in the request object
        if ($request->hasFile('image')) {
            // getting the image from the request object
            $image = $request->file('image');
            // renaming the image using timestamp
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            // check for the presence of the testimonials directory and if not present create the directory
            AppHelper::checkDirectory('testimonials');
            // defining where to store the image
            $location = public_path('uploads/testimonials/' . $new_image_name);

            Image::make($image->getRealPath())->fit(100)->save($location, 100);

            // Deleting the old image from the file system
            Storage::delete('testimonials/' . $testimonial->image);

            $form_request['image'] = $new_image_name;
        }

        try {
            DB::beginTransaction();
            $testimonial->update($form_request);
            DB::commit();
            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.testimonials.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.testimonials.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        try {
            DB::beginTransaction();
            Storage::delete('testimonials/' . $testimonial->image);
            $testimonial->delete();
            DB::commit();
            return back();

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
