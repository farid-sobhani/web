<?php


namespace Farid\RolePermission\Repositories;


use Farid\User\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionRepo
{
    public function roles()
    {
        return Role::all();
    }

    public function createRole($values)
    {
        return Role::create(['name' => $values->name]);

    }

    public function deleteRole($id)
    {
        return Role::query()->find($id)->delete();

    }

    public function giveRoleToUser($values)
    {
        $user = User::query()->find($values->user_id);
        return $user->assignRole($values->role_name);
    }
    public function deleteUserRole($values)
    {
        $user = User::query()->find($values->user_id);
        return $user->removeRole($values->role_name);
    }
    //permission functions

    public function permissions()
    {
        return Permission::all();
    }
    public function createPermission($values)
    {
        return Permission::create(['name' => $values->name]);

    }

    public function deletePermission($id)
    {
        return Permission::query()->find($id)->delete();

    }
    public function givePermissionToUser($values)
    {
        $user = User::query()->find($values->user_id);
        return $user->givePermissionTo($values->permission_name);
    }
    public function deleteUserPermission($values)
    {
        $user = User::query()->find($values->user_id);
        return $user->revokePermissionTo($values->permission_name);
    }

}

