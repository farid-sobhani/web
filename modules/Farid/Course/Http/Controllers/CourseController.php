<?php


namespace Farid\Course\Http\Controllers;


use App\Http\Controllers\Controller;
use Farid\Course\Http\Requests\CourseRequest;
use Farid\Course\Repositories\CourseRepo;
use Farid\Media\Services\MediaUploadService;

class CourseController extends Controller
{
    public $repo;

    public function __construct(CourseRepo $categoryRepo)
    {
        $this->repo = $categoryRepo;
    }

    public function courses()
    {
      $courses=  $this->repo->getCourses();
        return response()->json(['courses' => $courses], 200);
    }

    public function create(CourseRequest $courseRequest)
    {
        $courseRequest->request->add(['banner_id'=>MediaUploadService::upload($courseRequest->file('image'))->id]);
        $course = $this->repo->create($courseRequest);
        return response()->json(['message' => 'course created successfully',
            'course' => $course], 200);
    }
}
