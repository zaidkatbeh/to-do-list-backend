<?php

namespace App\Http\Controllers\tastList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasklist;
use DB;
class listController extends Controller
{
   public function store(Request $Request)
   {
        $list=new Tasklist;
        $list->listName=$Request['name'];
        $result=$list->save();
        return response()->json([
            'result'=>$result
        ]);
   }
   public function update(Request $Request,)
   {
    $list=Tasklist::where('listID',$Request['id'])
    ->update([
        'listName'=>$Request['name']
    ]);
    return response()->json([
        'result'=>$list
       ]);
   }
   public function destroy(Request $Request)
   {
    $result=Tasklist::where('listID',$Request['id'])
    ->delete();
    return response()->json([
        'result'=>$result
    ]);
   }
   public function index()
   {
    $result=Tasklist::select('listID','listName')->get();
    return response()->json([
        'lists'=>$result
    ]);
   }
}
