<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jobposting;
use App\Models\gigtalent;

class applicants extends Model
{
    protected $table = 'applicants';
    protected $primaryKey = 'ID';
    public $timestamps = true;

    public function jobposting(){
        return $this->belongsTo(jobposting::class, 'JobCode', 'ID');
    }

    public function gigtalent(){
        return $this->belongsTo(gigtalent::class, 'Applicant', 'ID');
    }

}
