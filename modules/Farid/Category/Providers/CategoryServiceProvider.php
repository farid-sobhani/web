<?php
namespace Farid\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
     $this->loadRoutesFrom(__DIR__.'/../Routes/categories_routes.php');
     $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
    }

}
