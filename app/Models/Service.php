<?php

namespace App\Models;

use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
        "service_category_id"
    ];

    public function category()
    {
        return $this->belongsto(ServiceCategory::class,'service_category_id');
    }
}
