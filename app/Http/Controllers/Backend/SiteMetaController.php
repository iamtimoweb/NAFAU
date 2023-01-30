<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SiteMetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-settings', ['only' => ['settings']]
        );
    }

    public function settings(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'site_name' => 'required|min:5|max:30',
                'email' => 'required|email|min:5|max:30',
                'contact_no' => ['required', 'min:10', 'max:10', 'regex:/^[0-9]{10,10}$/'],
                'location' => 'required|min:5|max:50',
                'twitter' => 'max:100',
                'facebook' => 'max:100',
                'linkedin' => 'max:100',
                'frontend_website' => 'nullable'
            ]);
            $data['site_name'] = $request->get('site_name');
            $data['email'] = $request->get('email');
            $data['contact_no'] = $request->get('contact_no');
            $data['location'] = $request->get('location');
            $data['twitter'] = $request->get('twitter');
            $data['facebook'] = $request->get('facebook');
            $data['linkedin'] = $request->get('linkedin');
            $data['frontend_website'] = $request->has('frontend_website') ? 1 : 0;

            try {
                DB::beginTransaction();
                SiteMeta::updateOrCreate(
                    ['meta_key' => 'settings'],
                    ['meta_value' => json_encode($data)]
                );
                DB::commit();
                // manually removing the items from the cache object
                Cache::forget('website_settings');
                alert()->success('success', 'updated successfully');
                return redirect()->route('backend.site.get_settings');
            } catch (\Throwable $exception) {
                DB::rollBack();
                alert()->error('error', $exception->getMessage());
                return redirect()->route('backend.site.get_settings');
            }
        }
        //for get request
        $settings = SiteMeta::where('meta_key', 'settings')->first();
        $info = null;
        if ($settings) {
            $info = json_decode($settings->meta_value);
        }
        return view('backend.settings', compact('info'));
    }
}
