@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a project</div>
                <div class="panel-body">
                    @foreach ($projects as $project)
                        <span style="background-color: #{{ $project->color }}">
                            <h2 style="background-color: #{{ $project->color }}">{{ $project->name }} ({{ $project->code }})</h2>
                            <p style="background-color: #{{ $project->color }}">{{ $project->description }}</p>
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
