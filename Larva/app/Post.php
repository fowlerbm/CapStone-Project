<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $primaryKey = "post_id";
    protected $table = "posts";

    protected $fillable = [
        'content',
        'flagged',
    ];

    public function Thread()
    {
        return $this->belongsTo('App\Thread' , 'thread_id');
    }

    public function User()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }


}
