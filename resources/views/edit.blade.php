<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-08-17 23:37:41
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-08-20 11:37:31
 */
?>
 @extends('layout')

 @section('main-content')
        <div>
            <div class="float-left">
                <h4 class="pb-3">Edit Tasks <span class="badge bg-info text-white">{{ $task->title }}</span></h4>
            </div>

            <div class="float-right">
                <a href="{{ route('index') }}" class="btn btn-info">All Task</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card card-body bg-light p-4">
            <form action="{{ route('task.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" value="{{ $task->title }}" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" class="form-control" {{ $task->description }} id="description" rows="5" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        @foreach ($statuses as $status)
                            <option value="{{ $status['value'] }}" {{ $task->status === $status['value'] ? 'selected' : "" }}>{{ $status['label'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
 @endsection
