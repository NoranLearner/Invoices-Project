<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sections;

class invoices extends Model
{
    use HasFactory;

    protected $guarded = [];

    // For Relationship
    public function section()
    {
        return $this->belongsTo(sections::class);
    }
}
