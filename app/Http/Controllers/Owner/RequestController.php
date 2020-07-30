<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\request_to_be_owner as OwnerRequest;

use Illuminate\Support\Facades\Input;

class RequestController extends Controller
{

    public function upload()
    {
    // dd($request->all());
      if(!$request->hasFile('documents')) {
        return response()->json(['upload_file_not_found'], 400);
      }
      $file = $request->file('documents');
      if(!$file->isValid()) {
        return response()->json(['invalid_file_upload'], 400);
      }
      $fileName = auth()->user()->email.'.'.$file->extension();
      // dd($fileName);
      $path = public_path() . '/documents/';
      $file->move($path, $file->getClientOriginalName() );
      // return response()->json(compact('path'));

      return $fileName;
    }
    

    public function makeRequest(Request $request)
    {
        if(!$request->hasFile('documents')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('documents');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }
        $fileName = auth()->user()->email.'.'.$file->extension();
        $path = public_path() . '/documents/';
        $file->move($path, $fileName);


        $documents = $fileName;      
        $ownerID = auth()->user()->id;
        OwnerRequest::create([
            'documents'=> $documents,
            'owner_id' => $ownerID,
        ]);
        return response()->json(['success'=>'request is being proccesed'], 200);
        // OwnerRequest::create[]
    }
}
