<?php

namespace Farid\RolePermission\Providers;
use Carbon\Laravel\ServiceProvider;

class RolePermissionServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/../Routes/role_permission_routes.php');
       $this->loadMigrationsFrom(__DIR__.'/../Database/Migration');
    }

}
