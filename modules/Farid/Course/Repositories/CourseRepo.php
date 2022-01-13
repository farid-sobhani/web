<?php


namespace Farid\Course\Repositories;


use Farid\Course\Models\Course;

class CourseRepo
{

    public function create($valuse)
    {
        return Course::create([
            "title" => $valuse->title,
            "slug" => $valuse->slug,
            "priority" => $valuse->priority,
            "price" => $valuse->price,
            "percent" => $valuse->percent,
            "teacher_id" => $valuse->teacher_id,
            "type" => $valuse->type,
            "status" => $valuse->status,
            "category_id" => $valuse->category_id,
            "banner_id" => $valuse->banner_id,
        ]);
    }

    public function getCourses()
    {
        return Course::with('media','teacher')->get();
    }
}
