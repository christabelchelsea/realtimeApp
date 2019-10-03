<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    // custom parameter http://127.0.0.1:8000/api/question/{{id}}
    public function getRouteKeyName()
    {
        // request berdasarkan nama field di tabel
        return 'slug';
    }

    // sama seperti protected $fillable =['title','slug','body']
    protected $guarded = [];

    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
