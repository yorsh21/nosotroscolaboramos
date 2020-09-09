<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'summary',
        'description',
        'score',
        'website',
        'social',
        'status',
        'category_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'user_id' => 'integer',
    ];


    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
