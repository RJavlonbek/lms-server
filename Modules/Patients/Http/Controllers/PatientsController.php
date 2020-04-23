<?php

namespace Modules\Patients\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Patients\Entities\Patient;
use DB;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function list()
    {
        $patients = Patient::select(
            'id',
            'photo',
            'patient_id',
            'user_id',
            'firstname',
            'lastname',
            'middlename',
            'gender',
            'dob',
            DB::raw("CONCAT('passport_series', 'passport_number') as passport"),
            'address',
            'phone',
            'created_at'
        )->get();
        
        return $patients;
        //return response()->json($patients->user);
        //return view('patients::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('patients::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function view($id)
    {
        //return $id;
        $patient = Patient::select(
            'id',
            'photo',
            'patient_id',
            'user_id',
            'firstname',
            'lastname',
            'middlename',
            'gender',
            'dob',
            DB::raw("CONCAT('passport_series', 'passport_number') as passport"),
            'address',
            'phone',
            'created_at'
        )->find($id);
        
        $patient->user;
        $patient->patient_career_infos;

        return response()->json($patient);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('patients::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
