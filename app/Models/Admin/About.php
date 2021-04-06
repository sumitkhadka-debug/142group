<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    protected $fillable = ['title','description','status'];

    protected $hidden = ['created_at','uodated_at'];

    use HasFactory;
}
