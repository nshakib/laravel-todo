<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-08-17 23:53:12
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-08-20 11:38:28
 */


namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
//use Carbon\Carbon;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks= Task::orderby('id', 'desc')->get();
        return view('index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $statuses = [
          [
              'label' =>'Todo',
              'value' =>'Todo',
          ],
          [
            'label' =>'Done',
            'value' =>'Done',
          ]
        ];
        return view('create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
           'title' => 'required'
        ]);

        $task = new Task();
        $task->title =$request->title;
        $task->description =$request->description;
        $task->status =$request->status;
        $task->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $statuses = [
            [
                'label' =>'Todo',
                'value' =>'Todo',
            ],
            [
              'label' =>'Done',
              'value' =>'Done',
            ]
          ];
          return view('edit', compact('statuses', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        //validate
        $request->validate([
            'title' => 'required'
         ]);

         $task->title =$request->title;
         $task->description =$request->description;
         $task->status =$request->status;
         $task->save();
         return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
