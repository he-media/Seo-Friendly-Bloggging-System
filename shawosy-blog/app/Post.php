<?php

namespace App;

use App\User;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = ('posts');
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if(is_null($post->user_id)) {
                $post->user_id = auth()->user()->id;
            }
        });

        static::deleting(function ($post) {
            
        });
    }

    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
