<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\SocialMedia\Facebook;

class FacebookServiceProvider extends ServiceProvider
{
    protected $defer=false;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
          $this->app->bind('fb',function (){
                    return new Facebook(config(('services.facebook')));
          });

    }
}
