<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    protected $guarded = []; 

    use HasFactory;

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
