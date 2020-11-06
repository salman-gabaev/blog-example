<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the tags for the articles.
     */
    public function tags()
    {
        return $this->hasMany(ArticleTags::class);
    }

    /**
     * Get the comments for the articles.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
