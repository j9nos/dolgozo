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

}
