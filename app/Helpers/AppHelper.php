<?php


namespace App\Helpers;


use App\Events\ActivityWasTriggered;
use App\Models\SiteMeta;
use App\User;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Role;

class AppHelper
{
    public static function checkDirectory($directory)
    {
        try {
            if (!file_exists(public_path('uploads/' . $directory))) {
                mkdir(public_path('uploads/' . $directory));
                chmod(public_path('uploads/' . $directory), 0777);
            }
        } catch (\Throwable $exception) {
            die($exception->getMessage());
        }
    }

    public static function getWebsiteSettings()
    {
        $webSettings = null;
        /* checking for the existance of the objects in the cache*/
        if (Cache::has('website_settings')) {
            /* obtaining a cache instance */
            $webSettings = Cache::get('website_settings');
        } else {
            $webSettings = SiteMeta::where('meta_key', 'settings')->first();
            /* The forever method is be used to store an item in the cache permanently.
            Since these items will not expire, they must be manually removed from the
             cache using the forget method: */
            Cache::forever('website_settings', $webSettings);
        }

        return $webSettings;
    }

    public static function isFrontendEnabled()
    {
        $webSettings = AppHelper::getWebsiteSettings();
        $info = null;
        $site_info = [];
        if ($webSettings) {
            $info = json_decode($webSettings->meta_value);
            $site_info['frontend_website'] = $info->frontend_website;
        }
        if (isset($site_info['frontend_website']) && $site_info['frontend_website'] == '1') {
            return true;
        }
        return false;
    }

    public static function logActivity($title = '', $description = '', $eloquent = null)
    {
        //ActivityWasTriggered::dispatch($title, $description, $eloquent);
    }

    public static function NotifyAdmins($class, $arg)
    {
        $admins = User::role('super-admin')->get(); // Returns only users with the role 'writer'

        if ($admins) {
            foreach ($admins as $admin) {
                $admin->notify(new $class($arg));
            }
        }
    }
}
