<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\NetSurvey;
class NetSurveyUser extends Model
{
    protected $table = 'net_survey_user';
    public function menu()
    {
        return $this->belongsTo(NetSurvey::class);
    }
}
