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
                <div class="row mb-5">
                        <h3 class="fs-17 fw-medium">Filter</h3>
                        <div class="filter-option-box w-20 ml-3">
                            <form method="post" id="script_order_by" onsubmit="return submitForm()">
                            <select id="script_order_by_select" class="select-container scriptOrderBy" name="scriptOrderBy">
                                    <option value="1" selected="selected">Newest </option>
                                    <option value="2">Oldest</option>
                                    <option value="3">A to Z</option>
                                    <option value="4">Z to A </option>
                                </select>
                            </form>
                    </div><!-- end filters -->
                </div>
                
                <div class="notification-content-wrap" id="all-scripts">
                    @if(!empty($scripts))
                    @foreach($scripts as $key => $script)
                    <div class="media media-card media--card shadow-none rounded-0 align-items-center bg-transparent">
                        <div class="media-img media-img-sm flex-shrink-0">
                            <strong>{{$key+1}}</strong>
                        </div>
                        <div class="media-body p-0 border-left-0">
                            <h5 class="fs-14 fw-regular">{{$script->title}}</h5>
                            <small class="meta d-block lh-24">
                                <span>{{$script->description}}</span>
                            </small>
                        </div>
                        @if($script->status == "approved")
                        <a href="{{url('admin/decline-script-status',$script->id)}}"><button
                                class="btn border border-gray fs-17 ml-2 bg-danger text-white" type="button"
                                data-toggle="tooltip" data-placement="top" title="Decline"><i
                                    class="la la-thumbs-down"></i></button></a>
                        @else
                        <a href="{{url('admin/approve-script-status',$script->id)}}"><button
                                class="btn border border-gray fs-17 ml-2 bg-success text-white" type="button"
                                data-toggle="tooltip" data-placement="top" title="Approved"><i
                                    class="la la-thumbs-up"></i></button>
                            @endif
                            <a href="{{url('admin/edit-script',$script->id)}}"><button
                                    class="btn border border-gray fs-17 ml-2 bg-info text-white" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                        class="la la-edit"></i></button></a>

                            <a href="{{url('admin/delete-script',$script->id)}}"
                                onclick="return confirm('Do YOu want to Delete Script?')"><button
                                    class="btn border border-gray fs-17 ml-2 bg-danger text-white" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="la la-trash"></i></button></a>
                    </div><!-- end media -->
                    @endforeach
                    @endif


                </div><!-- end notification-content-wrap -->
            </div><!-- end col-lg-9 -->


        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-details-area -->
<!-- ================================
         END USER DETAILS AREA
================================= -->

@endsection