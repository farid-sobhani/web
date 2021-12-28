<?php

namespace Farid\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Farid\Category\Http\Requests\CategoryRequest;
use Farid\Category\Http\Requests\CategoryUpdateRequest;
use Farid\Category\Repositories\CategoryRepo;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CategoryController extends Controller
{
    public $repo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->repo = $categoryRepo;
    }

    public function index()
    {
        $user=auth()->user();
        $x = $user->assignRole('pp');
// $role=Role::findById(1);
// $permission=Permission::findById(1);
//$x= $role->givePermissionTo($permission);
//        $permission = Permission::create(['name' => 'edit articles']);
//        $categories = $this->repo->all();
        return response()->json(['categories' => $x], '200');
    }

    public function store(CategoryRequest $request)
    {
        $this->repo->store($request);
        return response()->json(['message  ' => 'category created successfully'], 200);
    }

    public function update(CategoryUpdateRequest $request)
    {

        $this->repo->update($request);
        return response()->json(['message  ' => 'category updated successfully'], 200);
    }

    public function destroy(Request $request)
    {
        return $this->repo->delete($request->id);
    }


}
