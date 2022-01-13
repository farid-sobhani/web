<?php

namespace Farid\Media\Providers;

use Carbon\Laravel\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{

    public function register()
    {
//        $this->loadRoutesFrom(__DIR__.'/../Routes/media_routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

//        $this->loadTranslationsFrom(__DIR__.'/../Lang/','Media');
    }

    public function boot()
    {

}


}
