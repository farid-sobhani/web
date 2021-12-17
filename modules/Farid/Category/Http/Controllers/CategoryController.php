<?php

namespace Farid\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Farid\Category\Http\Requests\CategoryRequest;
use Farid\Category\Http\Requests\CategoryUpdateRequest;
use Farid\Category\Repositories\CategoryRepo;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $repo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->repo = $categoryRepo;
    }

    public function index()
    {
        $categories = $this->repo->all();
        return response()->json(['categories' => $categories], '200');
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
