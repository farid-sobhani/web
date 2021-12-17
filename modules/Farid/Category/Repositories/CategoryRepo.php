<?php


namespace Farid\Category\Repositories;


use Farid\Category\Models\Category;

class CategoryRepo
{
   
    public function all()
    {
        return Category::all();
    }

    public function store($values)
    {
        return Category::create([
            'name' => $values->name,
            'slug' => $values->slug,
            'parent_id' => $values->parent_id,

        ]);
    }

    public function findById($categoryId)
    {
        if (!$category = Category::query()->find($categoryId)) {
            return response()->json(['message  ' => 'category id is wrong '], 500);
        }
        return $category;
    }

    public function update($values)
    {
        return Category::query()->where('id', $values->id)->update([
            'name' => $values->name,
            'slug' => $values->slug,
            'parent_id' => $values->parent_id,
        ]);

    }

    public function delete($id)
    {

        if (!Category::query()->where('id', $id)->delete()) {
            return response()->json(['message  ' => 'categoryId is wrong'], 500);
        };
        return response()->json(['message  ' => 'category deleted successfully'], 200);
    }
}
