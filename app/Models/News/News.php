<?php

namespace App\Models\News;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable=[
        'category_id',
        'user_id',
        'title',
        'slug',
        'image',
        'summary',
        'description',
        'page_visit',
    ];


    public function getSummaryAttribute($value)
    {
        return substr($value,0,100);

    }

    public function category()
    {
       return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }
}

