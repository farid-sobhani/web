<?php


namespace Farid\Course\Rules;


use Farid\User\Repositories\UserRepo;
use Illuminate\Contracts\Validation\Rule;

class ValidTeacher implements Rule
{

    public function passes($attribute, $value)
    {
        $user = resolve(UserRepo::class)->findById($value);
        return $user->hasPermissionTo('teach');
    }

    public function message()
    {
       return "معلم انتخاب شده مدرس نمی باشد";
    }
}
