<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Owner; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class AuthController extends Controller
{
    protected $successStatus = 200;

    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email|unique:owners',
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
		if ($validator->fails()) 
		{ 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $data = $request->all(); 
        // dd($data);
        $data['password'] = bcrypt($data['password']); 
        $owner = Owner::create($data);
        // $request = $owner->request()->create(['documents' => 'test']);
        
        // $success['token'] =  $user->createToken('MyApp')->accessToken; 
        $success['name'] =  $owner->name;
		return response()->json(['success'=>'you are registered to be owner'], $this->successStatus); 
    }

    public function login(Request $request)
    { 
        if(Auth::attempt(['email' => request('email'),
         'password' => request('password')]))
        { 
            $owner = Auth::user(); 
            $token = $owner->api_token;
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
            return response()->json(['error'=>'Unauthorised Owner'], 401); 
        } 
    }

}


// public function uploadimage(Request $request)
//     {
//       //dd($request->all());
//       if ($request->hasFile('image'))
//       {
//             $file      = $request->file('image');
//             $filename  = $file->getClientOriginalName();
//             $extension = $file->getClientOriginalExtension();
//             $picture   = date('His').'-'.$filename;
//             $file->move(public_path('img'), $picture);
//             return response()->json(["message" => "Image Uploaded Succesfully"]);
//       } 
//       else
//       {
//             return response()->json(["message" => "Select image first."]);
//       }
