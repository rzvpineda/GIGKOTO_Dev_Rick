<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\applicants;
use App\Models\gigtalent;
use App\Models\gigtalentseeker;

class jobposting extends Model
{
    // use HasFactory;
    protected $table = 'jobposting';
    protected $primaryKey = 'ID';
    public $timestamps = true;

    public function applicants(){
        return $this->hasMany(applicants::class, 'ID', 'JobCode');
    }
    public function gigtalent(){
        return $this->belongsTo(gigtalent::class, 'HiredGT', 'ID');
    }

    //this is the basis
    public function gigtalentseeker(){
        return $this->belongsTo(gigtalentseeker::class, 'CompanyID', 'ID');
    }
}
