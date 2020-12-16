<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Forum;


class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(empty(auth()->user()->evaluation->keywords)){return view('forums.forum-welcome');}
        $keyword = auth()->user()->evaluation->keywords;
    
        $data = array(
          'forum'  => Forum::orderBy('views','desc')
            ->orderBy('created_at','desc')
            ->where('user_id' , auth()->user()->id)
            ->orWhere('content', 'like' , "%$keyword%")
            ->orWhere('title' , 'like' , "%$keyword%")
            ->orWhere('category' , 'like' , "%$keyword%")->paginate(10),
        );
       
        return view('forums.forum-index')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  $forum  = Forum::orderBy('created_at','desc')->paginate(2)->where('user_id', auth()->user()->id);
        // $forum = Forum::all()->where('user_id', auth()->user()->id);
        $data = array(
            'forum' =>Forum::orderBy('created_at','desc')->where('user_id', auth()->user()->id)->paginate(10),
            'total-comment' =>Forum::count()
          );

        return view('forums.forum-created')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'title' => 'required|max:30',
            'cover_image' => 'image|nullable|max:1999',
            'content' => 'required'
        ]);

        // for cover image
        if($request->hasFile('cover_image')){
            $file_with_ext = $request->cover_image->getClientOriginalName();
            $filename = pathinfo($file_with_ext, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $file = $filename.'_'.time().'.'.$ext;
            $request->cover_image->storeAs('public/forum_cover_images/',$file);
        }else{$file = "noimage.jpeg";}
        
        $forum = new Forum;
        $forum->user_id = auth()->user()->id;
        $forum->title = $request->input('title');
        $forum->cover_image = $file;
        $forum->content = $request->input('content');
        $forum->category = auth()->user()->evaluation->categories;
        $forum->save();       
        return redirect()->back()->with('success','Topic posted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'forum' => Forum::find($id)
        );
        if(empty($data['forum']->id)){
            return redirect('forum');
        }
        return view('forums.forum-topic')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //modal
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'title' => 'required|max:30',
            'cover_image' => 'image|nullable|max:1999',
            'content' => 'required|'
        ]);
            
        $forum = Forum::find($id);
        $forum->title = $request->input('title');
        $forum->content = $request->input('content');

        if($request->hasFile('cover_image') && $forum->cover_image !== 'noimage.jpeg'){
            Storage::delete('public/forum_cover_images/'.$forum->cover_image);
        }
        
        if($request->hasFile('cover_image')){
            $file_with_ext = $request->cover_image->getClientOriginalName();
            $filename = pathinfo($file_with_ext, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $file = $filename.'_'.time().'.'.$ext;
            $request->cover_image->storeAs('public/forum_cover_images/',$file);
            $forum->cover_image = $file;
        }

        $forum->save();       
        return redirect()->back()->with('success','Forum Created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $forum = Forum::find($id);
    
        if(auth()->user()->id !== $forum->user_id){
            return redirect()->back()->with('err','Unauthorized page!');
        }
        if($forum->cover_image !== 'noimage.jpeg'){
            Storage::delete('public/forum_cover_images/'.$forum->cover_image);
        }

        $forum->delete();
        return redirect('forum/create');


    }

    public function search(Request $request)
    {
       
        $this->validate($request ,[
        'search' => 'required',
        ]);
            if(empty(auth()->user()->evaluation->categories)){
                return view('forums.forum-welcome');
            }

        $search = $request->input('search');
        $forum = Forum::orderBy('views','desc')
        ->orderBy('created_at','desc')
        ->where('content', 'like' , "%$search%")
        ->orWhere('title' , 'like' , "%$search%")
        ->orWhere('category' , 'like' , "%$search%")->paginate(8);

        return view('forums.forum-search')->with('forum', $forum);
    }
}
