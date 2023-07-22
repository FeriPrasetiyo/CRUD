<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    protected $fillable = ["company_name", "company_email", "company_address", "company_phone", "created_at", "updated_at"];
    use HasFactory;
}
