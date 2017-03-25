@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a project</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('stories') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">As a</label>

                            <div class="col-md-6">
                                <input id="type_of_user" type="text" class="form-control" name="type_of_user" value="{{ old('type_of_user') }}" required autofocus>

                                @if ($errors->has('type_of_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="goal" class="col-md-4 control-label">I want</label>

                            <div class="col-md-6">
                                <input id="goal" type="text" class="form-control" name="goal" value="{{ old('goal') }}" required>

                                @if ($errors->has('goal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="reason" class="col-md-4 control-label">so that</label>

                            <div class="col-md-6">
                                <input id="reason" type="text" class="form-control" name="reason" value="{{ old('reason') }}" required>

                                @if ($errors->has('reason'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
