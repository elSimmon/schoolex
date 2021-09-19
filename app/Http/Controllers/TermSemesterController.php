<?php

namespace App\Http\Controllers;

use App\Models\AcademicSession;
use App\Models\TermSemester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TermSemesterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        $academic_sessions = AcademicSession::all();
        $semesters = TermSemester::all();
        return view('semesters.index', compact('semesters', 'academic_sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'academic_session_id' => 'required',
            'name' => 'required|string',
            'start' => 'required|date',
            'finish' => 'required|date',
        ]);

        DB::table('term_semesters')->where('current', 1)->update(['current'=>0]);

        $semester = new TermSemester();
        $semester->academic_session_id = $request->academic_session_id;
        $semester->name = $request->name;
        $semester->start = $request->start;
        $semester->finish = $request->finish;
        $semester->current = 1;
        $semester->save();

        toast('Great! Semester added!!', 'success');
        return redirect()->route('all-semesters');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TermSemester  $termSemester
     * @return \Illuminate\Http\Response
     */
    public function show(TermSemester $termSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TermSemester  $termSemester
     * @return \Illuminate\Http\Response
     */
    public function edit(TermSemester $termSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TermSemester  $termSemester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TermSemester $termSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TermSemester  $termSemester
     * @return \Illuminate\Http\Response
     */
    public function destroy(TermSemester $termSemester)
    {
        //
    }
}
