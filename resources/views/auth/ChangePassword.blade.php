@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-handing">Change Password</div>

            <div class="panel-body">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ url('ChangePassword') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="col-md-4 control-label">Current Password</label>

                    <div class="col-md-6">
                        <input id="current-password" type="text" class="form-control"  name="current-password" required>

                        @if($errors->has('current-password'))
                             <span class="help-block">
                                <strong>{{ $errors->first('current-password') }}</strong>
                             </span>

                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="col-md-4 control-label">New Password</label>

                    <div class="col-md-6">
                        <input id="new-password" type="text" class="form-control"  name="new-password" required>

                        @if($errors->has('new-password'))
                             <span class="help-block">
                                <strong>{{ $errors->first('new-password') }}</strong>
                             </span>

                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>
                    <div class="col-md-6">
                        <input id="new-password-confirm" type="text" class="form-control"  name="new-password-confirm" required>
                    </div>
                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
