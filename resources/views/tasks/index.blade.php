@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 p-4">
            @livewire('app-add-task')
        </div>

        <div class="col-md-8 p-4">

            @livewire('app-tasks')


        </div>
    </div>
</div>
@endsection