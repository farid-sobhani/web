<?php

namespace Farid\Course\Http\Requests;

use Farid\Course\Models\Course;
use Farid\Course\Rules\ValidTeacher;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => 'required|min:3|max:190',
            "slug" => 'required|min:3|max:190|unique:courses,slug',
            "priority" => 'nullable|numeric',
            "price" => 'required|numeric|min:0|max:10000000',
            "percent" => 'required|numeric|min:0|max:100',
//            "teacher_id" => ['required','exists:users,id',new ValidTeacher()],
            "type" => ['required',Rule::in(Course::$types)],
            "status" => ['required',Rule::in(Course::$statuses)],
            "category_id" => 'required|exists:categories,id',
//            "image" => 'required|image|mimes:jpg,png,jpeg,JPG',
        ];
    }

    public function attributes()
    {
        return[
            "price"=>'قیمت',
            "slug"=>'غنوان انگلیسی',
            "priority"=>'ردیف دوره ',
            "percent"=>'درصد مدرس ',
            "teacher_id"=>'مدرس ',
            "category_id"=>'دسته بندی ',
            "status"=>'وضعیت ',
            "type"=>'نوع ',
            "body"=>'توضیحات ',
            "image"=>'بنر دوره ',
        ];
    }

    public function messages()
    {
        return[
//          'price.min'=>trans('Courses::validation.price_min')
        ];
    }
}
