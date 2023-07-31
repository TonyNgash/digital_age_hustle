<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'email',
        'fname',
        'surname',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    // public function postedjobs(){
    //     return $this->belongsToMany(PostedJob::class,'candidates_postedjobs','candidate_id','postedjob_id');
    // }
    // // public function postedJobses(){
    // //     return $this->belongsToMany(PostedJob::class,'job_applications');
    // // }
    // public function technicalskills(){
    //     return $this->belongsToMany(Skill::class,'candidates_technicalskills','candidate_id','technicalskill_id');
    // }
    // public function softskills(){
    //     return $this->belongsToMany(SoftSkill::class,'candidates_softskills','candidate_id','softskill_id');
    // }
    // public function languages(){
    //     return $this->belongsToMany(Language::class,'candidates_languages','candidate_id','language_id');
    // }
}
