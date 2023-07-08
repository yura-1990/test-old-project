@extends('layout.master')
@section('title', 'Todo')


@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive todo_list">
                            <table class="table table-hover table-striped table-vcenter mb-0">
                                <thead>
                                    <tr>
                                        <th><a href="javascript:void(0);" class="btn btn-info btn-sm">Add New</a></th>
                                        <th class="w150 text-right">Due</th>
                                        <th class="w100">Priority</th>
                                        <th class="w80"><i class="icon-user"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </td>
                                        <td class="text-right">Feb 12-2019</td>
                                        <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                        <td>
                                            <span class="avatar avatar-pink"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </td>
                                        <td class="text-right">Feb 18-2019</td>
                                        <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                                        </td>
                                        <td class="text-right">March 02-2019</td>
                                        <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </td>
                                        <td class="text-right">Feb 12-2019</td>
                                        <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                        <td>
                                            <span class="avatar avatar-pink"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                                        </td>
                                        <td class="text-right">Feb 18-2019</td>
                                        <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                                        </td>
                                        <td class="text-right">March 02-2019</td>
                                        <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                                        <td>
                                            <span class="avatar avatar-blue"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                            </label>
                                        </td>
                                        <td class="text-right">March 20-2019</td>
                                        <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                            </label>
                                        </td>
                                        <td class="text-right">March 20-2019</td>
                                        <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('popup')

@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/js/core.js') }}"></script>
@stop
