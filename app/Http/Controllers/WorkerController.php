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

}
