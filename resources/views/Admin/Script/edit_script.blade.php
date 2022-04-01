@extends('Admin.layout')
@section('content')
<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="filters pb-40px d-flex flex-wrap align-items-center justify-content-between">
            <h3 class="fs-22 fw-medium mr-0">Edit Script</h3>
        </div><!-- end filters -->
        <form action="#" class="row">
            <div class="col-lg-12">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Title</label>
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

         @endsection