<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\SeminarOrganised;
use Auth;

class SeminarOrganisedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $seminar = DB::table("seminar_organiseds")
                ->where("userId","=",Auth::user()->id)
                ->latest()
                ->get();

        return view("staff.seminarOrganised.viewSeminars")->with("seminar", $seminar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("staff.seminarOrganised.addSeminar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'department' => ['required', 'string'],  
            'place' => ['required', 'string'],    
            'date' => ['required', 'date'],
            'level' => ['required', 'string'],
            'title' => ['required', 'string'],     
            'speaker' => ['required', 'string'],   
            'collabAgency' => ['required', 'string'],    
            'beneficiaries' => ['required', 'string'],    
            'topic' => ['required', 'string'],    
        ]);   
        SeminarOrganised::create([
            'department' => $data['department'], 
            'title' => $data['title'], 
            'collabAgency' => $data['collabAgency'], 
            'placeAndDesignation' => $data['place'], 
            'date' => $data['date'],
            'level' => $data['level'], 
            'topic' => $data['topic'], 
            'title' => $data['title'], 
            'speaker' => $data['speaker'], 
            'beneficiaries' => $data['beneficiaries'], 
            'userId' => Auth::user()->id
        ]); 
        return Redirect::route('seminarOrganised.index')->with('message', 'Seminar Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seminar  = SeminarOrganised::find($id);
        return view("staff.seminarOrganised.editSeminar")->with("seminar", $seminar);
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $request->validate([
            'department' => ['required', 'string'],  
            'place' => ['required', 'string'],    
            'date' => ['required', 'date'],
            'level' => ['required', 'string'],
            'title' => ['required', 'string'],    
            'speaker' => ['required', 'string'],   
            'collabAgency' => ['required', 'string'],    
            'beneficiaries' => ['required', 'string'],    
            'topic' => ['required', 'string'],    
        ]);
        DB::table("seminar_organiseds")
                ->where("id","=",$id)
                ->update([
                    'department' => $data['department'], 
                    'title' => $data['title'], 
                    'collabAgency' => $data['collabAgency'], 
                    'placeAndDesignation' => $data['place'], 
                    'date' => $data['date'],
                    'level' => $data['level'], 
                    'topic' => $data['topic'], 
                    'title' => $data['title'], 
                    'speaker' => $data['speaker'], 
                    'beneficiaries' => $data['beneficiaries'],]);

        return Redirect::route('seminarOrganised.index')->with('message', 'Seminars Updated Succesfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $achive = SeminarOrganised::find($id);
        $achive->delete();
        return Redirect::route('seminarOrganised.index')->with('message', 'Seminar Deleted Succesfully');
    }
}
