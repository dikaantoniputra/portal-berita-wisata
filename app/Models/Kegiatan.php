<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function company()
    {
        return $this->belongsTo(CategoryKegiatan::class, 'category_kegiatan_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(CommentKegiatan::class);
    }


}


