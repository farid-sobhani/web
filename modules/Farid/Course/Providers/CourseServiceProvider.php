<?php

namespace Farid\Course\Providers;

use Database\Seeders\DatabaseSeeder;
use Farid\Course\Database\seeds\RolePermissionTableSeeder;
use Illuminate\Support\ServiceProvider;

class CourseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/courses_routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        DatabaseSeeder::$seeders[]=RolePermissionTableSeeder::class;
        $this->loadTranslationsFrom(__DIR__.'/../Lang/','Courses');
    }

    public function boot()
    {

    }
}
