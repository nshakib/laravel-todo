<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-08-17 23:57:34
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-08-20 11:45:06
 */
?>
 @extends('layout')

 @section('main-content')
        <div>
            <div class="float-left">
                <h4 class="pb-3">My Tasks</h4>
            </div>

            <div class="float-right">
                <a href="{{ route('task.create') }}" class="btn btn-info">Create Task</a>
            </div>
            <div class="clearfix"></div>
        </div>
        @foreach ($tasks as $task)
            <div class="card">
                <div class="card-header">

                    @if ($task->status === "Todo")
                    {{ $task->title }}
                    @else
                    <del>{{ $task->title }}</del>
                    @endif

                    <span class="badge badge-warning">{{\Carbon\Carbon::parse($task['created_at'])->diffForHumans() }} {{-- use for time --}}                    </span>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <div class="float-left">
                            @if ($task->status === "Todo")
                            {{ $task->description }}
                            @else
                            <del>{{ $task->description }}</del>
                            @endif

                            <br>

                            @if ($task->status === "Todo")
                            <span class="badge badge-info text-dark">Todo</span>
                            @else
                            <span class="badge badge-success text-white">Done</span>
                            @endif

                            <small>Last Update - {{\Carbon\Carbon::parse( $task['updated_at'])->diffForHumans() }}</small>

                        </div>

                        <div class="float-right">
                            <a href="{{ route('task.edit',$task->id) }}" class="btn btn-success">Edit Task</a>
                            <a href="{{ route('task.edit',$task->id) }}" class="btn btn-danger">Delete Task</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div></div>
            </div>
        @endforeach
 @endsection
