<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Game extends Model {

    use Rateable;

	protected $primaryKey = "game_id";
    protected $table = "game";

    protected $fillable = [
        'title',
        'description',
        'image_location',
        'file_Location',
        'tags',
    ];

    public function tags()
    {
        return $this->tags;
    }

    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }

    public function author()
    {
        return $this->author;
    }
}
