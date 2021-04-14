<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'Services';

    protected $guarded = [];

    protected $fillable = ['cat_id'];
    
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
