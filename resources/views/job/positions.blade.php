@extends('layout.master')
@section('title', 'Positions')


@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <label>Search</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <label>TYPE</label>
                                <div class="multiselect_div">
                                    <select id="multiselect3-all" name="multiselect3[]" class="multiselect multiselect-custom" multiple="multiple">
                                        <option value="multiselect-all">Select All</option>
                                        <option value="All Types">All Types</option>
                                        <option value="Full-time">Full-time</option>
                                        <option value="Part-time">Part-time</option>
                                        <option value="Internship">Internship</option>
                                        <option value="Freelance">Freelance</option>
                                        <option value="Remote">Remote</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <label>Category</label>
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option selected="">Designer</option>
                                        <option value="1">Project Manager</option>
                                        <option value="2">Senior Developer</option>
                                        <option value="3">Front-end Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <label>Salary</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Min. Salary">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <label>&nbsp;</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Max. Salary">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <label>&nbsp;</label>
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-block" title="">Filter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter table_custom text-nowrap spacing5 mb-0">
                        <tbody>
                            <tr>
                                <td class="w60">
                                    <span class="avatar avatar-orange" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">GI</span>
                                </td>
                                <td>
                                    <div class="font-15">Google Inc.</div>
                                    <span class="text-muted">Full-stack developer</span>
                                </td>
                                <td><span class="tag tag-success">Full-time</span></td>
                                <td>Applicants: <strong>0</strong></td>
                                <td><span>44 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td><span class="tag tag-warning">Pending approval</span></td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <span class="avatar avatar-blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">FB</span>
                                </td>
                                <td>
                                    <div class="font-15">Facebook Inc.</div>
                                    <span class="text-muted">Designer</span>
                                </td>
                                <td><span class="tag tag-success">Full-time</span></td>
                                <td>Applicants: <strong>45</strong></td>
                                <td><span>123 6th St. Melbourne, FL 32904</span></td>
                                <td><span class="tag tag-warning">12 days to expire</span></td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <span class="avatar avatar-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">TF</span>
                                </td>
                                <td>
                                    <div class="font-15">Themeforest Inc.</div>
                                    <span class="text-muted">Web Application Developer</span>
                                </td>
                                <td><span class="tag tag-success">Freelance</span></td>
                                <td>Applicants: <strong>50</strong></td>
                                <td><span>44 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td><span class="tag tag-warning">12 days to expire</span></td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <span class="avatar avatar-cyan" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">LD</span>
                                </td>
                                <td>
                                    <div class="font-15">Linkdin Inc.</div>
                                    <span class="text-muted">Marketing</span>
                                </td>
                                <td><span class="tag tag-success">Freelance</span></td>
                                <td>Applicants: <strong>17</strong></td>
                                <td><span>514 S. Magnolia St. Orlando, FL 32806</span></td>
                                <td><span class="tag tag-warning">24 days to expire</span></td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <span class="avatar avatar-azure" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">MS</span>
                                </td>
                                <td>
                                    <div class="font-15">Microsoft Inc.</div>
                                    <span class="text-muted">Sr. SQL Server Developer</span>
                                </td>
                                <td><span class="tag tag-success">Part-time</span></td>
                                <td>Applicants: <strong>33</strong></td>
                                <td><span>70 Bowman St. South Windsor</span></td>
                                <td><span class="tag tag-warning">29 days to expire</span></td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <span class="avatar avatar-blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">GI</span>
                                </td>
                                <td>
                                    <div class="font-15">Facebook Inc.</div>
                                    <span class="text-muted">Designer</span>
                                </td>
                                <td><span class="tag tag-success">Full-time</span></td>
                                <td>Applicants: <strong>45</strong></td>
                                <td><span>123 6th St. Melbourne, FL 32904</span></td>
                                <td><span class="tag tag-warning">12 days to expire</span></td>
                            </tr>
                            <tr>
                                <td class="w60">
                                    <span class="avatar avatar-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">GI</span>
                                </td>
                                <td>
                                    <div class="font-15">Themeforest Inc.</div>
                                    <span class="text-muted">Web Application Developer</span>
                                </td>
                                <td><span class="tag tag-success">Freelance</span></td>
                                <td>Applicants: <strong>50</strong></td>
                                <td><span>44 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td><span class="tag tag-warning">12 days to expire</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination mt-2">
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                </ul>
            </div>
        </div>
    </div>            
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-multiselect/bootstrap-multiselect.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script>
$('#multiselect3-all').multiselect({
    includeSelectAllOption: true,
});
</script>
@stop
