<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        "surname",
        "name",
        "address",
        "birthday",
        "age",
        "salary",
        "status",
    ];

    protected $dates = [
        "birthday",
    ];
}
