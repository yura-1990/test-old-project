@extends('layout.master')
@section('parentPageTitle', 'HRMS')
@section('title', 'Activities')


@section('content')
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row clearfix">                    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Timeline Activity</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                <div class="item-action dropdown ml-2">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="summernote">
                                Hello there,
                                <br/>
                                <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                                <p>Please try <b>paste some texts</b> here</p>
                            </div>
                            <div class="timeline_item ">
                                <img class="tl_avatar" src="../assets/images/xs/avatar1.jpg" alt="" />
                                <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA <small class="float-right text-right">20-April-2019 - Today</small></span>
                                <h6 class="font600">Hello, 'Im a single div responsive timeline without media Queries!</h6>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                    <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 12 Love</a>
                                    <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                    <div class="collapse p-4 section-gray mt-2" id="collapseExample">
                                        <form class="well">
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                        <ul class="recent_comments list-unstyled mt-4 mb-0">
                                            <li>
                                                <div class="avatar_img">
                                                    <img class="rounded img-fluid" src="../assets/images/xs/avatar4.jpg" alt="">
                                                </div>
                                                <div class="comment_body">
                                                    <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                    <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                            <div class="timeline_item ">
                                <img class="tl_avatar" src="../assets/images/xs/avatar4.jpg" alt="" />
                                <span><a href="javascript:void(0);" title="">Dessie Parks</a> Oakland, CA <small class="float-right text-right">19-April-2019 - Yesterday</small></span>
                                <h6 class="font600">Oeehhh, that's awesome.. Me too!</h6>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                    <div class="timeline_img mb-20">
                                        <img class="width100" src="../assets/images/gallery/1.jpg" alt="Awesome Image">
                                        <img class="width100" src="../assets/images/gallery/2.jpg" alt="Awesome Image">
                                    </div>
                                    <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 23 Love</a>
                                    <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="fa fa-comments"></i> 2 Comment</a>
                                    <div class="collapse p-4 section-gray mt-2" id="collapseExample1">
                                        <form class="well">
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                        <ul class="recent_comments list-unstyled mt-4 mb-0">
                                            <li>
                                                <div class="avatar_img">
                                                    <img class="rounded img-fluid" src="../assets/images/xs/avatar4.jpg" alt="">
                                                </div>
                                                <div class="comment_body">
                                                    <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                    <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                    <div class="timeline_img mb-20">
                                                        <img class="width150" src="../assets/images/gallery/7.jpg" alt="Awesome Image">
                                                        <img class="width150" src="../assets/images/gallery/8.jpg" alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="avatar_img">
                                                    <img class="rounded img-fluid" src="../assets/images/xs/avatar3.jpg" alt="">
                                                </div>
                                                <div class="comment_body">
                                                    <h6>Dessie Parks <small class="float-right font-14">1min ago</small></h6>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="timeline_item ">
                                <img class="tl_avatar" src="../assets/images/xs/avatar7.jpg" alt="" />
                                <span><a href="javascript:void(0);" title="" >Rochelle Barton</a> San Francisco, CA <small class="float-right text-right">12-April-2019</small></span>
                                <h6 class="font600">An Engineer Explains Why You Should Always Order the Larger Pizza</h6>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                    <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 7 Love</a>
                                    <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="fa fa-comments"></i> 1 Comment</a>
                                    <div class="collapse p-4 section-gray mt-2" id="collapseExample2">
                                        <form class="well">
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/summernote.bundle.js') }}"></script>

<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/page/summernote.js') }}"></script>
@stop
