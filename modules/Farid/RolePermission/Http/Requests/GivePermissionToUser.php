<?php

namespace Farid\RolePermission\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GivePermissionToUser extends FormRequest
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
            'user_id'=>'exists:users,id|required',
            'permission_name'=>'exists:permissions,name|required',
        ];
    }
}
