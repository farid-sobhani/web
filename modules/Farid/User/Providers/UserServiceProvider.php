<?php


namespace Farid\User\Providers;


use Farid\User\Models\User;
use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Scalar\MagicConst\Dir;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {   // for change a file out of our module -- in fact the file is in the main project
        config()->set('auth.providers.users.model',User::class);
    }
    public function boot()
    {
            $this->loadRoutesFrom(__DIR__ .'/../Routes/user_routes.php');
            $this->loadMigrationsFrom(__DIR__.'/../Database/Migration');
            $this->loadFactoriesFrom(__DIR__ .'/../Database/Factories');
            $this->loadViewsFrom(__DIR__ .'/../Resources/Views','User');
    }

}
