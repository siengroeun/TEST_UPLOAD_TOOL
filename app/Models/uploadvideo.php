<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadvideo extends Model
{
    use HasFactory;

    protected $fillable=[
    	'id','id_user','url_path','token_facebook','created_at','updated_at'
    ];

    protected $table='upload_video';
}
