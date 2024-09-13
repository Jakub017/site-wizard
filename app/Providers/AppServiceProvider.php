<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = Setting::first();

        $tinyMceKey = $settings->tinymce_api_key ?? '';
        $googleAnalyticsKey = $settings->google_analytics ?? '';
        $adminLogo = $settings->admin_logo ?? '';
        $siteLogo = $settings->site_logo ?? '';
        $websiteName = $settings->website_name ?? '';

        View::share([
            'tinyMceKey' => $tinyMceKey,
            'googleAnalyticsKey' => $googleAnalyticsKey,
            'siteLogo' => $siteLogo,
            'adminLogo' => $adminLogo,
            'websiteName' => $websiteName,
        ]);
    }
}
