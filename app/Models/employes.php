<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employes extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ["fullname", "company", "departement", "email", "phone", "created_at", "updated_at"];
    use HasFactory;
}
