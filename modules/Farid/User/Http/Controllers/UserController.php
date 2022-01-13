<?php


namespace Farid\User\Http\Controllers;


use App\Http\Controllers\Controller;
use Farid\User\Repositories\UserRepo;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public $repo;

    public function __construct(UserRepo $userRepo)
    {
        $this->repo = $userRepo;
    }


    public function far(Request $request)
    {
        return response()->json(['pass' => $request->password], 200);
    }

    public function getSpecificRoles(Request $request)
    {
        $users = $this->repo->getSpecificRoles($request->role_name);
        return response()->json(['users' => $users], 200);
    }

    public function getSpecificPermissions(Request $request)
    {
        $users = $this->repo->getSpecificPermissions($request->permission_name);
        return response()->json(['users' => $users], 200);
    }
}
