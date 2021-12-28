<?php


namespace Farid\User\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request;

class UserController extends Controller
{

    public function far(\Illuminate\Http\Request $request)
    {
       return response()->json(['pass'=> $request->password],200);
    }
}
