<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'national_id',
        'address',
        'phone',
        'email',
        'category_id',
        'location',
        'date',
        'description',
        'photo',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
