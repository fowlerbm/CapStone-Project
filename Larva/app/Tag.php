<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $primaryKey = "tag_id";

    protected $table = "tags";

    protected $fillable = [
        'name'
    ];

	public function games()
    {
        return $this->belongsToMany('App\Game');
    }

}
