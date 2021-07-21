<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Papers;
use Auth;

class AdminPapersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index($staffId)
    {
        $papers = DB::table("papers")
                ->where("userId","=",$staffId)
                ->latest()
                ->get();

        return view("admin.staffActivity.papersPresented.viewPapers")->with("papers", $papers)->with("staffId", $staffId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($staffId)
    {
        return view("admin.staffActivity.papersPresented.addPapers")->with("staffId", $staffId);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $staffId)
    {
        $data = $request->all();
        $request->validate([
            'name' => ['required', 'string'],
            'theme' => ['required', 'string'],
            'venue' => ['required', 'string'],
            'title' => ['required', 'string'],  
            'prize' => ['required', 'string'],  
            'nature' => ['required', 'string'],    
        ]);   
        Papers::create([
            'name' => $data['name'], 
            'theme' => $data['theme'], 
            'venue' => $data['venue'], 
            'title' => $data['title'],
            'prizes' => $data['prize'], 
            'nature' => $data['nature'], 
            'userId' => $staffId
        ]); 
        return Redirect::route('papers.index', $staffId)->with('message', 'Papers Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($staffId, $id)
    {
        $paper  = Papers::find($id);
        return view("admin.staffActivity.papersPresented.editPapers")->with("paper", $paper)->with("staffId", $staffId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$staffId, $id)
    {
        $data = $request->all();
 
        $request->validate([
            'name' => ['required', 'string'],
            'theme' => ['required', 'string'],
            'venue' => ['required', 'string'],
            'title' => ['required', 'string'],  
            'prize' => ['required', 'string'],  
            'nature' => ['required', 'string'],    
        ]);  
        DB::table("papers")
                ->where("id","=",$id)
                ->update([
            'name' => $data['name'], 
            'theme' => $data['theme'], 
            'venue' => $data['venue'], 
            'title' => $data['title'], 
            'prizes' => $data['prize'], 
            'nature' => $data['nature']]);

        return Redirect::route('papers.index',$staffId)->with('message', 'Paper Updated Succesfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($staffId, $id)
    {
        $meeting  = Papers::find($id);
        $meeting->delete();
        return Redirect::route('papers.index',$staffId)->with('message', 'Paper Deleted Succesfully');
    }
}
