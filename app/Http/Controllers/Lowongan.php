<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\PostJob;

class Lowongan extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function show(Request $request) {

        $data = Company::all();
        $data2 = DB::select("SELECT * FROM companies");
        return view('application/jobs',
            [
                'data' => $data,
                'dataFacade' => $data2,
            ]);
    }

    public function store(Request $request) {
        $job = new PostJob;
        $job->company_id = 2;
        $job->title = $request->jobTitle;
        $job->desc = $request->jobDesc;
        $job->benefit = $request->jobBenefit;
        $job->max_salary = $request->jobMax;
        $job->min_salary = $request->jobMin;
        $job->skill = $request->jobSkill;
        $job->education_level = "All";
        $job->created_date = now();
        // $job ....
        $job->save();
        var_dump($request); die();
        // return redirect('/lowongan')->with('msg','Tambah berhasil');
    }
}
