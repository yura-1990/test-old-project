@extends('layout.authentication')
@section('title', 'Error 404')


@section('content')
<div class="card">
    <div class="text-center mb-2">
        <a class="header-brand" href="{{route('hrms.index')}}"><i class="fe fe-command brand-logo"></i></a>
    </div>
    <div class="card-body">
        <div class="display-3 text-muted mb-5"><i class="si si-exclamation"></i> 404</div>
        <h1 class="h3 mb-3">Oops.. You just found an error page..</h1>
        <p class="h6 text-muted font-weight-normal mb-3">We are sorry but our service is currently not available&hellip;</p>
        <a class="btn btn-primary" href="javascript:history.back()"><i class="fe fe-arrow-left mr-2"></i>Go back</a>
    </div>
</div>
@stop
