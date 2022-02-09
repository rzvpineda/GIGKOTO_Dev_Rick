<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\applicants;
use App\Models\jobposting;

class gigtalent extends Model
{
    // use HasFactory;
    protected $table = 'gigtalent';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function applicant(){
        return $this->hasMany(Applicants::class, 'ID', 'Applicant');
    }
    public function jobposting(){
        return $this->hasMany(jobposting::class, 'ID', 'HiredGT');
    }
}
