<?php


namespace Farid\RolePermission\Http\Controllers;


use App\Http\Controllers\Controller;
use Farid\RolePermission\Http\Requests\GivePermissionToUser;
use Farid\RolePermission\Http\Requests\GiveRoleToUserRequest;
use Farid\RolePermission\Http\Requests\RoleRequest;
use Farid\RolePermission\Repositories\RolePermissionRepo;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RolePermissionsController extends Controller
{
    public $repo;

    public function __construct(RolePermissionRepo $rolePermissionRepo)
    {
        $this->repo = $rolePermissionRepo;
    }

    public function index()
    {
        $roles = $this->repo->roles();
        $permissions = $this->repo->permissions();
        return response()->json(['roles' => $roles, 'permission' => $permissions], 200);
    }

    public function createRole(RoleRequest $roleRequest)
    {
        $role = $this->repo->createRole($roleRequest);
        return response()->json(['message' => 'role created successfully', 'role' => $role], 200);
    }
    public function deleteRole(Request $request)
    {
        $this->repo->deleteRole($request->role_id);
        return response()->json(['message'=>'Role Deleted Successfully',],200);

    }

    public function giveRoleToUser(GiveRoleToUserRequest $giveRoleToUserRequest)
    {
        $user=$this->repo->giveRoleToUser($giveRoleToUserRequest);
        return response()->json(['message'=>'role has given to user successfully',
            'user'=>$user],200);
    }

    public function deleteUserRole(GiveRoleToUserRequest  $giveRoleToUserRequest)
    {
        $user=$this->repo->deleteUserRole($giveRoleToUserRequest);
        return response()->json(['message'=>'User Role Deleted Successfully','user'=>$user],200);

    }


    public function createPermission(Request $request)
    {
        $permission = Permission::create(['name' => $request->name]);
    }
    public function deletePermission(Request $request)
    {
        $this->repo->deletePermission($request->permission_id);
        return response()->json(['message'=>'Permission Deleted Successfully',],200);

    }

    public function givePermissionToUser(GivePermissionToUser $givePermissionToUser)
    {
        $user=$this->repo->givePermissionToUser($givePermissionToUser);
        return response()->json(['message'=>'Permission has given to user successfully',
            'user'=>$user],200);
    }
    public function deleteUserPermission(GivePermissionToUser  $givePermissionToUser)
    {
        $user=$this->repo->deleteUserPermission($givePermissionToUser);
        return response()->json(['message'=>'User Permission Deleted Successfully','user'=>$user],200);

    }
}
