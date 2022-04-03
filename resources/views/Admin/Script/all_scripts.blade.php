@extends('Admin.layout')
@section('content')
<!-- ================================
         START USER DETAILS AREA
================================= -->
<section class="user-details-area pt-60px pb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ Session::get('message') }}</strong>
                    </div>
                @endif
                <div class="notification-content-wrap">
                    @if(!empty($scripts))
                    @foreach($scripts as $script)
                        <div class="media media-card media--card shadow-none rounded-0 align-items-center bg-transparent">
                            <div class="media-img media-img-sm flex-shrink-0">
                                <img src="{{asset('disilab/images/img3.jpg')}}" alt="avatar">
                            </div>
                            <div class="media-body p-0 border-left-0">
                                <h5 class="fs-14 fw-regular">{{$script->title}}</h5>
                                <small class="meta d-block lh-24">
                                    <span>{{$script->description}}</span>
                                </small>
                            </div>
                            @if($script->status == "approved")
                                <a href="{{url('admin/decline-script-status',$script->id)}}"><button class="btn border border-gray fs-17 ml-2 bg-danger text-white" type="button" data-toggle="tooltip" data-placement="top" title="Decline"><i class="la la-thumbs-down"></i></button></a>
                            @else
                                <a href="{{url('admin/approve-script-status',$script->id)}}"><button class="btn border border-gray fs-17 ml-2 bg-success text-white" type="button" data-toggle="tooltip" data-placement="top" title="Approved"><i class="la la-thumbs-up"></i></button>
                            @endif
                            <a href="{{url('admin/edit-script',$script->id)}}"><button class="btn border border-gray fs-17 ml-2 bg-info text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-edit"></i></button></a>

                            <a href="{{url('admin/delete-script',$script->id)}}"><button class="btn border border-gray fs-17 ml-2 bg-danger text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="la la-trash"></i></button></a>
                        </div><!-- end media -->
                    @endforeach
                    @endif

                   
                </div><!-- end notification-content-wrap -->
                
                <!-- <div class="pager pt-30px mb-50px">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination generic-pagination pr-1">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="fs-13 pt-3">Showing 1-15 results of 210 questions</p>
                </div> -->
            </div><!-- end col-lg-9 -->


        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-details-area -->
<!-- ================================
         END USER DETAILS AREA
================================= -->

@endsection