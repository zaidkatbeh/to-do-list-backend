<?php

namespace App\Http\Controllers\tastList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class listController extends Controller
{
    public function store(Request $Request)
    {
        $listName=$Request[0];
        $result=DB::table('tasklists')->insert(['listName'=>$listName]);
        if($result)
        return response()->json([
            'result'=>$result
        ]);
    }
    public function index()
    {
        $result=DB::table('tasklists')->get();

        return response()->json([
            'result'=>$result
        ]);
    }
    public function show(Request $Request,$id)
    {
        $result=DB::table('tasklists')->where('listID',$id);
        return response()->json([
            'result'=>$result,
        ]);
    }
}
