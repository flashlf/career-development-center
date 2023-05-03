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
        $data3 = Company::where('id', 2)->get();
        return view('application/jobs',
            [
                'data' => $data,
                'dataFacade' => $data2,
                'dataCustom' => $data3
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
        $edu = "";
        foreach($request->input('jobEducation') as $item)
            $edu .= $item.";";
        // var_dump($request->input('jobEducation')); die;
        $job->education_level = $edu;

        $job->created_date = now();
        // $job ....
        $job->save();

        var_dump($request); die();
        // return redirect('/lowongan')->with('msg','Tambah berhasil');
    }

    public function edit(Request $request) {
        $job = PostJob::find(3);
        $job->desc = "Test Update data";
        $job->benefit = $request->jobBenefit;
        $job->save();

        var_dump($job);
    }

    public function destroy(Company $model) {
        var_dump($model->id);
    }
}
