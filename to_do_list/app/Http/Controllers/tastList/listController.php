<?php

namespace App\Http\Controllers\tastList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class listController extends Controller
{
    public function store(Request $Request)
    {
        $listName=$Request['listName'];
         $result=DB::table('tasklists')->insert(['listName'=>$listName]);
        return $result;
    }
}
