<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'skill', 'bio'];
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    public function branch() {
        return $this->belongsTo(Branch::class);
    }
}
