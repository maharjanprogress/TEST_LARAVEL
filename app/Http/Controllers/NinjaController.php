<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\Ninja;

use Illuminate\Http\Request;
use Laravel\Pail\ValueObjects\Origin\Console;
use Psy\Readline\Hoa\Console as HoaConsole;
use SebastianBergmann\Environment\Console as EnvironmentConsole;

class NinjaController extends Controller
{
    public function index()
    {
        $tasks = Ninja::with('dojo')->orderBy('created_at', 'asc')->paginate(10); //with() will eager load the related dojo data
        return view('progress.index', ['tasks' => $tasks]);
    }
    public function show(int $id)
    {
        $ninja = Ninja::findOrFail($id);
        $progress = [
            ['id' => 1, 'task' => 'Task 1', 'status' => 'Completed'],
            ['id' => 2, 'task' => 'Task 2', 'status' => 'In Progress'],
            ['id' => 3, 'task' => 'Task 3', 'status' => 'Pending'],
            ['id'=> 4,'task'=> 'Task 4','status'=> 'Completed'],
            ['id'=> 5,'task'=> 'Task 5','status'=> 'In Progress'],
            ['id'=> 6,'task'=> 'Task 6','status'=> 'Pending'],
            ['id'=> 7,'task'=> 'Task 7','status'=> 'Completed'],
            ['id'=> 8,'task'=> 'Task 8','status'=> 'In Progress'],
            ['id'=> 9,'task'=> 'Task 9','status'=> 'Pending'],
            ['id'=> 10,'task'=> 'Task 10','status'=> 'Completed']
        ];

        return view('progress.show',["id"=>$ninja->id, "task" => $ninja->bio ?? 'No bio available']);
    }

    public function store(Request $request)
    {
        printf('Store method called');
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'skill'=> 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:10',
            'dojo_id' => 'required|exists:dojos,id',
        ]);
        $ninja =Ninja::create($validated);
        return redirect()->route('progress.show', ['id' => $ninja->id]);
    }
    public function create()
    {
        $dojo = Dojo::all();
        return view('progress.create',['dojos' => $dojo]);
    }

}
