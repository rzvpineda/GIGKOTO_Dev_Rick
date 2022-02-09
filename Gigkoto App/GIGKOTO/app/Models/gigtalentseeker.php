<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gigtalentseeker extends Model
{
    // use HasFactory;
    protected $table = 'gigtalentseeker';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    
    public function jobposting(){
        return $this->hasMany(jobposting::class, 'ID', 'CompanyID');
    }
}