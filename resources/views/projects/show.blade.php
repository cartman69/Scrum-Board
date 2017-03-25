@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modify a project</div>
                <div class="panel-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-4 control-label">Name</div>

                            <div class="col-md-6">
                                {{ $project->name }}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <div for="code" class="col-md-4 control-label">Code</div>

                            <div class="col-md-6">
                                {{ $project->code }}

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <div class="col-md-4 control-label">Description</div>

                            <div class="col-md-6">
                                {{ $project->description }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
