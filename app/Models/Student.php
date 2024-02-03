<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $guard = ['idStudents'];
    protected $fillable = ['FirstName', 'LastName', 'Gender', 'Religion', 'PhoneNumber', 'Gmail', 'Birth', 'Address', 'City', 'Country', 'MotherName', 'FatherName', 'ImageProfile'];
}
