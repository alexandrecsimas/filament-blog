<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    // Allow mass assignment for the 'name' attribute
    protected $fillable = ['name', 'content', 'active'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
