<?php

namespace App\Http\Controllers;

use App\Models\AcademicSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademicSessionController extends Controller
{

    public function index()
    {
        //fetch all academic sessions
        $academic_sessions = AcademicSession::all();
        return view('academic_sessions.index', compact('academic_sessions'));
    }


    public function create()
    {
        //display form for new academic session
        return view('academic_sessions.create');

    }


    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string',
           'start' => 'required|date',
           'finish' => 'required|date',
           'tuition_fee' => 'required|numeric',
        ]);

        DB::table('academic_sessions')->where('current', 1)->update(['current'=>0]);

        $academic_session = new AcademicSession();
        $academic_session->name = $request->name;
        $academic_session->start = $request->start;
        $academic_session->finish = $request->finish;
        $academic_session->tuition_fee = $request->tuition_fee;
        $academic_session->save();

        return redirect()->route('all-sessions');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
