<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\NetSurveyUser;
use App\Model\NetSurveyList;

class NetSurvey extends Model
{
    protected $table = 'net_survey';
    public static $optionsType=[1=>'单项选择','2'=>'多项选择',3=>'单行文本',4=>'多行文本'];
    public function list()
    {
        return $this->hasOne(NetSurveyList::class);
    }
    public function user()
    {
        return $this->hasOne(NetSurveyUser::class);
    }
}
