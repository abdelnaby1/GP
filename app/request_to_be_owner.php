<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request_to_be_owner extends Model
{

    protected $fillable = [
        'documents','owner_id'
   ];


    protected $table  = 'request_to_be_owner';
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
}
