<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'category_id'];

    public function comments() {
        return $this->hasMany('App\Comment');
    }

	public function user() {
		return $this->belongsTo('App\User');
	}

    public function categories() {
        return $this->belongsTo('App\Category');
    }
}
