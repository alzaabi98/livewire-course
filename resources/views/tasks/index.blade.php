@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 p-4">
            <h3 class="text-center">Add New Task</h3>
            <form action="{{ route('task.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                </div>
            </form>
        </div>

        <div class="col-md-8 p-4">
            <h3 class="text-center">My Task ({{$totalTasks}})</h3>
            <table class="table bg-white ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td scope="row">{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->status == true ? 'Completed' : 'Pending' }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection