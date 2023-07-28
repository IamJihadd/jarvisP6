<?php

namespace App\Http\Controllers;

use App\Models\task as ModelsTask;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
    public function index(){
        // mengambil semua data task di model
        $tasks = ModelsTask::getALL();

        // mengirim data task ke view
        return view('tasks/index', [
            'tasks' => $tasks,
        ]);
    }

    public function show($id){
        $id = ::getByid();

        return ('id/index', [
            'id' => $id,
        ]);
        // masukkan logicnya
    }
}
