<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

	protected $table = "game_user_rating";

    protected $primaryKey = "rate_id";

    protected $fillable = ['user_id', 'game_id', 'rating'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function game()
    {
        return $this->belongsTo('Game', 'game_id');
    }

    public function getRating()
    {
        return GAME::join('ratings', 'ratings.game_id', '=', 'game_id')
            ->where('game.game_id', $this->attributes['game_id'])
            ->select(DB::raw('SUM(game_user_rating.rating) / ((COUNT(game_user_rating.* * 5) / 100) as rating'))
            ->pluck('rating');
    }

}
