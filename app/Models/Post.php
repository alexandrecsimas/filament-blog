<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image', 'active'];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
