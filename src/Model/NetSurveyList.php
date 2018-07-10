<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\NetSurvey;
class NetSurveyList extends Model
{
    protected $table = 'net_survey_list';
    public function menu()
    {
        return $this->belongsTo(NetSurvey::class,'survey_id');
    }
}
