<?php


namespace App\View\Composers;


use App\Helpers\AppHelper;
use Illuminate\View\View;
class FrontendComposer
{
    protected $siteInfo = [];
    protected $info;

    public function __construct()
    {
        $settings = AppHelper::getWebsiteSettings();
        if ($settings) {
            $this->info = json_decode($settings->meta_value);
            $this->siteInfo['site_name'] = $this->info->site_name;
            $this->siteInfo['email'] = $this->info->email;
            $this->siteInfo['contact_no'] = $this->info->contact_no;
            $this->siteInfo['location'] = $this->info->location;
            $this->siteInfo['twitter'] = $this->info->twitter;
            $this->siteInfo['facebook'] = $this->info->facebook;
            $this->siteInfo['linkedin'] = $this->info->linkedin;
            $this->siteInfo['frontend_website'] = $this->info->frontend_website;
        }
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public
    function compose(View $view)
    {
        $view->with('siteInfo', $this->siteInfo);
    }
}
