<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {

	protected $primaryKey = "game_id";
    protected $table = "game";

    protected $fillable = [
        'title',
        'description',
        'image_location',
        'file_Location',
    ];

}
