<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
class usersController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    public function update(Request $request, User $User)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'active'=>'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Error validation', $validator->errors());       
        }
   
        $user = $request->all();
        
        $user->update($validator);
    
        $success['name'] =  $user->name;
        $success['first_name'] =  $user->first_name;
        $success['last_name'] =  $user->last_name;
        $success['phone'] =  $user->phone;
        $success['active'] =  $user->first_name;
   
        return $this->sendResponse($success, 'User updated successfully.');
    }
   
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
