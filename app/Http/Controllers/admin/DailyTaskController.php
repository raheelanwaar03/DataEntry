<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\DailyTask;
use Illuminate\Http\Request;

class DailyTaskController extends Controller
{
    public function index()
    {
        return view('admin.Task.dailyTask');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required'
        ]);

        $image = $validated['image'];
        $imageName = rand(11111,999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $dailyWork = new DailyTask();
        $dailyWork->image = $imageName;
        $dailyWork->save();
        return redirect()->back()->with('success','Task added successfully');

    }

    public function allTask()
    {
        $dailyWork = DailyTask::get();
        return view('admin.Task.all',compact('dailyWork'));
    }

    public function editTask($id)
    {
        $dailyWork = DailyTask::find($id);
        return view('admin.Task.edit',compact('dailyWork'));
    }

    public function updateTask(Request $request,$id)
    {
        $dailyWork = DailyTask::find($id);

        if ($request->image)
        {
            $image = $request->image;
            $imageName = rand(11111,999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $dailyWork->image = $imageName;
            $dailyWork->save();
            return redirect()->route('Admin.All.Daily.Tasks')->with('success','Task Details Updated successfully!');
        }
    }


}
