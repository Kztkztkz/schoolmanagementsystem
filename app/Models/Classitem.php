<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classitem extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany(Student::class, 'classitem_student');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_classitem');
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
