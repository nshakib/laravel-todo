<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-08-17 23:37:41
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-08-20 20:36:11
 */
?>
 @extends('layout')

 @section('main-content')
        <div>
            <div class="float-left">
                <h4 class="pb-3">Create Tasks</h4>
            </div>

            <div class="float-right">
                <a href="{{ route('index') }}" class="btn btn-info">
                   <i class="fa fa-arrow-left"></i> All Task</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card card-body bg-light p-4">
            <form action="{{ route('task.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter title" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" class="form-control" placeholder="Enter description" id="description" rows="5" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        @foreach ($statuses as $status)
                            <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('index') }}" class="btn btn-secondary">
                   <i class="fa fa-arrow-left"></i> Cancel</a>
                <button type="submit" class="btn btn-success">
                   <i class="fa fa-check" aria-hidden="true"></i> Save</button>
            </form>
        </div>
 @endsection
