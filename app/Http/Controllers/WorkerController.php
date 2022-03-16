<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    

    public function showWorkers()
    {
        $workers = Worker::all();
        return view("workers", ["workers"=>$workers]);
    }

    public function showSpecificWorker(Request $request)
    {
        $worker = Worker::find($request->input('id'));
        return view("worker", ["worker"=>$worker]);
    }

    public function kickSpecificWorker(Worker $worker)
    {
        $worker->delete();
        return back();
    }

    public function openModifyMenu(Worker $worker)
    {
        return view("modify", ["worker"=>$worker]);
    }

    public function editSpecificWorker(Request $request, Worker $worker)
    {
        $worker->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'birthdate'=>$request->birthdate,
            'salary'=>$request->salary
        ]);
        return back();
    }
}
