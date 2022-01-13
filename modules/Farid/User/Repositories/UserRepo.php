<?php


namespace Farid\User\Repositories;


use Farid\User\Models\User;

class UserRepo
{
    public function getSpecificRoles($role)
    {
        return User::role($role)->select('name','id')->get();
    }
      public function getSpecificPermissions($permission)
    {
        return User::permission($permission)->select('name','id')->get();
    }

    public function findById($id)
    {
        return User::query()->find($id);
    }

}
