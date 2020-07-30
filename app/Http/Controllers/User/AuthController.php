<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class AuthController extends Controller
{
    protected $successStatus = 200;

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
		$data = $request->all(); 
        $data['password'] = bcrypt($data['password']); 
        $user = User::create($data); 
        // $success['token'] =  $user->createToken('MyApp')->accessToken; 
        $success['name'] =  $user->name;
		return response()->json(['success'=>'you are a user of our app now'], $this->successStatus); 
    }

    public function login(Request $request)
    { 
        if(Auth::attempt(['email' => request('email'),
         'password' => request('password')]))
        { 
            $user = Auth::user(); 
            $token = $user->api_token;
            // $tokenResult = $user->createToken($role.' Access Token');
        	// $token = $tokenResult->token;
        	// if ($request->remember_me)
        	// {
            // 	$token->expires_at = Carbon::now()->addWeeks(1);
        	// }
        	// $token->save();
        	return response()->json(['access_token' => $token]);
            // $success['token'] =  $user->createToken('Personal Access Token')->accessToken; 
            // return response()->json(['success' => $success], $this->successStatus); 
        } 
        else
        { 
            return response()->json(['error'=>'Unauthorised User'], 401); 
        } 
    }

}
