<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'approval';

    // The attributes that are mass assignable
    protected $fillable = [
        'detail',
        'privacy',
        'post',
    ];
}
