@include('layout/profile_header')

<!--======================================
        START HERO AREA
        ======================================-->
        <section class="hero-area bg-white shadow-sm overflow-hidden pt-60px">
                <span class="stroke-shape stroke-shape-1"></span>
                <span class="stroke-shape stroke-shape-2"></span>
                <span class="stroke-shape stroke-shape-3"></span>
                <span class="stroke-shape stroke-shape-4"></span>
                <span class="stroke-shape stroke-shape-5"></span>
                <span class="stroke-shape stroke-shape-6"></span>
                <div class="container">
                        <div class="row">
                                <div class="col-lg-8">
                                        <div class="hero-content">
                                                <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 bg-transparent">
                                                        <div class="media-img media--img">
                                                                <img src="{{asset('storage/app/'.Session('user_profile'))}}" alt="avatar">
                                                        </div>
                                                        <div class="media-body">
                                                                <h5>{{Session('user_name')}}</h5>
                                                                <small class="meta d-block lh-20 pb-2">
                                                                        <!-- <span>{{Session('email')}}</span> -->
                                                                </small>
                                                                <!-- <div class="stats fs-14 fw-medium d-flex align-items-center lh-18">
                                                                        <span class="text-black pr-2" title="Reputation">224,110</span>
                                                                        <span class="pr-2 d-inline-flex align-items-center" title="Gold"><span class="ball ml-1 gold"></span>16</span>
                                                                        <span class="pr-2 d-inline-flex align-items-center" title="Silver"><span class="ball ml-1 silver"></span>93</span>
                                                                        <span class="pr-2 d-inline-flex align-items-center" title="Bronze"><span class="ball ml-1"></span>136</span>
                                                                </div> -->
                                                        </div>
                                                </div><!-- end media -->
                                        </div><!-- end hero-content -->
                                </div><!-- end col-lg-8 -->
                                <div class="col-lg-4">
                                        <div class="hero-btn-box text-right py-3">
                                                <a href="{{url('editprofile')}}" class="btn theme-btn theme-btn-outline theme-btn-outline-gray"><i class="la la-gear mr-1"></i> Edit Profile</a>
                                        </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-12">
                                        <ul class="nav nav-tabs generic-tabs generic--tabs generic--tabs-2 mt-4" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                        <a class="nav-link active" id="user-profile-tab" data-toggle="tab" href="{{url('addscript')}}">Script list</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" id="user-activity-tab" data-toggle="tab" href="#user-activity" role="tab" aria-controls="user-activity" aria-selected="false">Add new</a>
                                                </li>
                                        </ul>
                                </div><!-- end col-lg-4 -->
                        </div><!-- end row -->
                </div><!-- end container -->
        </section>
<!--======================================
        END HERO AREA
        ======================================-->


<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="filters pb-40px d-flex flex-wrap align-items-center justify-content-between">
            <h3 class="fs-22 fw-medium mr-0">Edit Script</h3>
        </div><!-- end filters -->
        <form action="{{URL::to('update-script')}}" class="row" method="post">
            @csrf
            <div class="col-lg-12">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Title</label>
                            <input type="hidden" name="id" value="{{$post->id}}">
                            <input type="text" name="title" value="{{$post->title}}" class="form-control form--control fs-14" placeholder="Your Post Title">
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Script</label>
                            <textarea name="script" class="form-control form--control" rows="4"placeholder="Write Script">{{$post->script}}</textarea>
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Description</label>
                            <textarea name="description" class="form-control form--control" rows="4" placeholder="Write Description">{{$post->description}}</textarea>
                        </div><!-- end form-group -->
                        <div class="form-group mb-0">
                            <button class="btn theme-btn" type="submit">Update Your Post</button>
                        </div><!-- end form-group -->
                    </div><!-- end card-body -->
                </div>
            </div><!-- end col-lg-8 -->
        </form>
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
================================= -->
 @include('layout/footer')