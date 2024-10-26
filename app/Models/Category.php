<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'title',
        'description',
        'categories_id',
        'created_at',
        'updated_at'
    ];

    public function post():HasMany
    {
        return $this->hasMany(Post::class);
    }
}
