@extends('layout.authentication')
@section('title', 'Register')


@section('content')
<div class="card">
    <div class="text-center mb-5">
        <a class="header-brand" href="{{route('hrms.index')}}"><i class="fe fe-command brand-logo"></i></a>
    </div>
    <div class="card-body">
        <div class="card-title">Create new account</div>
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" />
            <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span>
            </label>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">Create new account</button>
        </div>
    </div>
    <div class="text-center text-muted">
        Already have account? <a href="{{route('authentication.login')}}">Sign in</a>
    </div>
</div>
@stop
