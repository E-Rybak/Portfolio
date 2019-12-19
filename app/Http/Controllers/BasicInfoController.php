<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BasicInfo;

class BasicInfoController extends Controller
{
    public function getBasicInfo()
    {
    	$BI = BasicInfo::first();
    	return $BI;
    }
}
