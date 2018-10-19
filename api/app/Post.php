<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'blog_content','category', 'author_name', 'words_key'];
    //
}
