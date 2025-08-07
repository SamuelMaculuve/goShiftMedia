<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use InteractsWithMedia;

    use HasFactory;

    protected $fillable = ['title','description','thumbnail','category_id','user_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

    public function user() {
        return $this->belongsToMany(User::class, 'enrollments');
    }

}
