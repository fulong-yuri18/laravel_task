<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function getBuilding($room = null){
			if(isset($room)){
				return "部屋番号は{$room}です";
			}else{
				return "建物です";
			}
		}
}
