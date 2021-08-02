<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\HasTags;

class Article extends Model
{
    use HasTags;

    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
