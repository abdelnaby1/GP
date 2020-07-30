<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    //
    protected $successStatus = 200;

    protected $userAccessToken = 'User Access Token';
    protected $ownerAccessToken = 'Owner Access Token';
    protected $AdminAccessToken = 'Admin Access Token';


    public function login(Request $request)
    { 
        if(Auth::attempt(['email' => request('email'),
         'password' => request('password')]))
        { 
            $user = Auth::user(); 
            $role = $user->role;
            $tokenResult = $user->createToken($role.' Access Token');
        	$token = $tokenResult->token;
        	if ($request->remember_me)
        	{
            	$token->expires_at = Carbon::now()->addWeeks(1);
        	}
        	$token->save();
        	return response()->json([
            	'access_token' => $tokenResult->accessToken,
            	'token_type' => 'Bearer',
            	'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
        ]);
            $success['token'] =  $user->createToken('Personal Access Token')->accessToken; 
            return response()->json(['success' => $success], $this->successStatus); 
        } 
        else
        { 
            return response()->json(['error'=>'Unauthorised user'], 401); 
        } 
    }
     public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email|unique:users',
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
		if ($validator->fails()) 
		{ 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
		$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        // $success['token'] =  $user->createToken('MyApp')->accessToken; 
        $success['name'] =  $user->name;
		return response()->json(['success'=>'you are a user of our app now'], $this->successStatus); 
    }

}
