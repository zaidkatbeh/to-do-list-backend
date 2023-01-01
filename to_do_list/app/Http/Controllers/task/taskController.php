<?php

namespace App\Http\Controllers\task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\task;
use App\Models\Tasklist;
class taskController extends Controller
{
    public function store(Request $Request)
    {
        if(!isset($Request['listID'])||empty($Request['listID']))
        return response()->json([
            'result'=>'404'
        ]);
        $listIDs=Tasklist::select('listID')->get()->first();
        foreach($listIDs as $listID)
        if($listID==$Request['listID'])
        {
            $task=new task;
            $task->taskName=$Request['taskName'];
            $task->listID=$Request['listID'];
            $result=$task->save();
            return response()->json([
                'result'=>$result
            ]);
        }
        return response()->json([
            'result'=>'303',
        ]);
    }
    public function index($id)
    {
        $result=Tasklist::where('listID',$id)->select('taskName')->get();
        return response()->json([
            'tasks'=>$result->toArray()
        ]);
    }
}
