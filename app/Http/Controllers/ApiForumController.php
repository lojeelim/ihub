<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
class ApiForumController extends Controller
{
    //
    public function show_forum(){
        $forum = Forum::all();
        return response()->json($forum);
    }

    public function create_forum($id){
       $forum = Forum::find($id);
        return response()->json($forum);
    }
}
