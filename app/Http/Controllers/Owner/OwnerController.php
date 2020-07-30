<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Owner;
use Illuminate\Support\Facades\Auth; 
use Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Place;
use App\Http\Resources\Place as PlaceResource;
use App\Http\Resources\PlaceCollection;
use App\Sports\Football;


class OwnerController extends Controller
{

	public function getPlaces()
	{
		return new PlaceCollection(auth('api')->user()->places);
	}
	public function getPlace($id)
	{


		$place = Place::findOrFail($id);

		if(!$this->authorize('view', $place))
		{
			 return response()->json('Unautherized', 401);

		}
        return new PlaceResource($place);
	}


	public function uploadPlace(Request $request)
	{
		$type = $request->type;
		if($type == 'football'){
			Football::create([])

		}
	}
}
