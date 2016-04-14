<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    protected $table = 'candidate';
    protected $fillable = ['fname', 'lname', 'dob', 'email', 'home', 'cell', 'address', 'facebookID', 'TwitterID', 'notes', 'anniversary'];
    Protected $dates = ['dob', 'anniversary', 'created_at', 'updated_at', 'deleted_at'];

    public function setDobAttribute($dob){
        $dateOFbirth = Carbon::createFromFormat('Y-m-d', $dob);
        $this->attributes['dob'] = $dateOFbirth;
    }

    public function setAnniversaryAttribute($anniversary){
        $anniversary = Carbon::createFromFormat('Y-m-d', $anniversary);
        $this->attributes['anniversary'] = $anniversary;
    }
}
