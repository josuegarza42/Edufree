<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];
    // usar el nombre en vez del id en el URL
    public function getRouteKeyName()
    {
        return "slug";
    }

    // muchos a muchos
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
