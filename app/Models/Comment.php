<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Comment extends Model
{
    use HasFactory, NodeTrait;

    protected $fillable = ['author_id', 'user_id', 'post_id', 'comment', 'parent_id'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
