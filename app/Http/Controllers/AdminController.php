<?php

namespace App\Http\Controllers;

use Attribute;
use App\Models\About;
use App\Models\Resume;
use App\Models\Project;
use App\Models\About_detil;
use App\Models\Service;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AdminController
{
    
    public function about_api(){
        $data_about = About::all();

        // dd($data[0]->toArray()['about']);
        if($data_about){
            $a_data = [
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success',
                'OUT_DATA' => $data_about
            ];

            return $a_data;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed',
                'OUT_DATA' => $data_about
            ), 300);
        }
    }

    public function about_detil_api(){
        $data_about_detil = About_detil::all();

        if($data_about_detil){
            $ad_data = [
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success',
                'OUT_DATA' => $data_about_detil
            ];

            return $ad_data;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed',
                'OUT_DATA' => $data_about_detil
            ), 300);
        }
    }

    public function index(Request $request){
        $data_about = $this->about_api($request);
        $data_about = $data_about['OUT_DATA']->toArray()[0];

        $data_about_detil = $this->about_detil_api($request);
        $data_about_detil = $data_about_detil['OUT_DATA']->toArray();

        // dd($data_about_detil);
        return view('admin.index', ['a_data' => $data_about, 'ad_data' => $data_about_detil]);
    }

    public function about(Request $request){
        $data_about = $this->about_api($request);
        $data_about = $data_about['OUT_DATA']->toArray()[0];

        $data_about_detil = $this->about_detil_api($request);
        $data_about_detil = $data_about_detil['OUT_DATA']->toArray();
        return view('admin.content.about.about', ['a_data' => $data_about, 'ad_data' => $data_about_detil]);
    }

    public function aboutSubmit(Request $request, $id){
        $data= About::find($id);
        $data->about = $request ->about;
        $data->Proffesion = $request ->proffession;

        // dd($data->Proffesion);
        try {
            $result = $data->save();
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $result = 0;
            }
        }

        if($result == 1){
            return response()->json(array(
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success'
            ), 200);;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed'
            ), 200);
        }
    }

    public function detiltSubmit( Request $request){
        $data= new About_detil();
        $data->title = $request ->name;
        $data->desc = $request ->desc;

        try {
            $result = $data->save();
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $result = 0;
            }
        }

        if($result == 1){
            return response()->json(array(
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success'
            ), 200);;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed'
            ), 200);
        }
    }

    public function detilDelete(Request $request){
        $id = $request ->id;
        $data= About_detil::find($id);

        // dd($data->Proffesion);
        try {
            $result = $data->delete();
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $result = 0;
            }
        }

        if($result == 1){
            return response()->json(array(
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success'
            ), 200);;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed'
            ), 200);
        }
    }

    public function projectApi(){
        $project_api = Project::all();

        if($project_api){
            $p_data = [
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success',
                'OUT_DATA' => $project_api
            ];

            return $p_data;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed',
                'OUT_DATA' => $project_api
            ), 300);
        }
    }

    public function project(Request $request){
        $dataRequest = $this->projectApi($request);
        $dataRequest = $dataRequest['OUT_DATA']->toArray();
        return view('admin.content.project', ['r_data' => $dataRequest]);
    }

    public function resumeApi(){
        $resume_api = Resume::all();

        if($resume_api){
            $r_data = [
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success',
                'OUT_DATA' => $resume_api
            ];

            return $r_data;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed',
                'OUT_DATA' => $resume_api
            ), 300);
        }
    }
    
    public function resume(Request $request){
        $dataResume = $this->resumeApi($request);
        $dataResume = $dataResume['OUT_DATA']->toArray();
        return view('admin.content.resume', ['res_data' => $dataResume]);
    }

    public function serviceApi(){
        $service_api = Service::all();

        if($service_api){
            $s_data = [
                'OUT_STAT' => 'T',
                'OUT_MESS' => 'Success',
                'OUT_DATA' => $service_api
            ];

            return $s_data;
        } else {
            return response()->json(array(
                'OUT_STAT' => 'F',
                'OUT_MESS' => 'Failed',
                'OUT_DATA' => $service_api
            ), 300);
        }
    }
    
    public function service( Request $request){
        $dataService = $this->serviceApi($request);
        $dataService = $dataService['OUT_DATA']->toArray();
        return view('admin.content.service', ['service_data' => $dataService]);
    }
}
