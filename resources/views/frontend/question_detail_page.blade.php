@if(session()->has('user_id'))
   @include('layout/profile_header')
@else 
    @include('layout/header')
@endif

    <div class="ad-banner mb-4 mx-auto" style="width: 93%; height: 200px">
    	<span class="ad-text">1350x500</span>
    </div>

     <section class="question-area pt-40px pb-40px">
     	<div class="container">
     		<div class="row">
     			<div class="col-lg-9">
     				<div class="question-main-bar mb-50px">
     					<div class="question-highlight">
     						<div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
     							<div class="media-body">
     								@if ($message = Session::get('success'))
     								<div class="alert alert-success alert-block">
     									<button type="button" class="close" data-dismiss="alert">×</button>    
     									<strong>{{ $message }}</strong>
     								</div>
     								@endif   
     								<h5 class="fs-20"><a href="question-details.html">{{$posts[0]->title}}</a></h5>
                           <!--  <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                <div class="pr-3">
                                    <span>Asked</span>
                                    <span class="text-black">1 hour ago</span>
                                </div>
                                <div class="pr-3">
                                    <span class="pr-1">Active</span>
                                    <a href="#" class="text-black">19 days ago</a>
                                </div>
                                <div class="pr-3">
                                    <span class="pr-1">Viewed</span>
                                    <span class="text-black">89 times</span>
                                </div>
                            </div>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">attribute</a>
                            </div> -->
                        </div>
                    </div><!-- end media -->
                </div><!-- end question-highlight -->
                <div class="question d-flex">
                	<div class="votes votes-styled w-auto">
                		<div id="vote" class="upvotejs">
                			<a class="upvote upvote-on" data-toggle="tooltip" data-placement="right" title="This question is useful"></a>
                			<span class="count">1</span>
                			<a class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a>
                			<a class="star" data-toggle="tooltip" data-placement="right" title="Bookmark this question."></a>
                		</div>
                	</div><!-- end votes -->
                	<div class="question-post-body-wrap flex-grow-1">
                		<div class="question-post-body">
                			<p>{{$posts[0]->description}}</p>
                			{!!$posts[0]->script!!}

                		</div><!-- end question-post-body -->

                	</div><!-- end question-post-body-wrap -->
                </div><!-- end question -->
                <div class="subheader d-flex align-items-center justify-content-between">
                	<div class="subheader-title">
                		<h3 class="fs-16">{{count($comments)}} Comments</h3>
                	</div><!-- end subheader-title -->
                	<div class="subheader-actions d-flex align-items-center lh-1">
                		<label class="fs-13 fw-regular mr-1 mb-0">Order by</label>
                		<div class="w-100px">
                			   <select class="select-container orderBy" name="orderBy">
                                    <option value="1" selected="selected">Newest </option>
                                    <option value="2">Oldest</option>
                                    <option value="3">A to Z</option>
                                    <option value="4">Z to A </option>
                                    <option value="5">High Rating</option>
                                    <option value="6">Low Rating </option>
                                </select>
                		</div>
                	</div><!-- end subheader-actions -->
                </div><!-- end subheader -->
                <div class="answer-wrap d-flex">
                	<div class="votes votes-styled w-auto">
                		<div id="vote2" class="upvotejs">
                			<a class="upvote upvote-on" data-toggle="tooltip" data-placement="right" title="This question is useful"></a>
                			<span class="count">2</span>
                			<a class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a>
                			<a class="star check star-on" data-toggle="tooltip" data-placement="right" title="The question owner accepted this answer"></a>
                		</div>
                	</div><!-- end votes -->
                	<div class="answer-body-wrap flex-grow-1">
                		<div class="answer-body">

                			@if(count($comments)>0)
                			@foreach($comments as $key => $comment)
                				<pre class="code-block custom-scrollbar-styled"><code>{!! $comment->comment !!}

</code></pre>
                            @endforeach
                			@endif
                			</div>

                			<div class="comments-wrap">

                				<div class="comment-form">
                					<div class="comment-link-wrap text-center">
                						<a class="collapse-btn comment-link" data-toggle="collapse" href="#addCommentCollapseTwo" role="button" aria-expanded="false" aria-controls="addCommentCollapseTwo" title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add a comment</a>
                					</div>
                					<div class="collapse border-top border-top-gray mt-2 pt-3" id="addCommentCollapseTwo">
                						<form action="{{url('comment')}}" method="post" class="row pb-3">
                							@csrf
                							<input type="hidden" name="question_id" value="{{$posts[0]->id}}">
                							<input type="hidden" name="comment_to_user_id" value="{{$posts[0]->user_id}}">
                							<div class="col-lg-12">
                								<h4 class="fs-16 pb-2">Leave a Comment</h4>
                								<div class="divider mb-2"><span></span></div>
                							</div><!-- end col-lg-12 -->
                							<div class="col-lg-12">
                								<div class="input-box">
                									<label class="fs-13 text-black lh-20">Message</label>
                									<div class="form-group">
                										<textarea class="form-control form--control form-control-sm fs-13" name="comment" rows="5" placeholder="Your comment here..."></textarea>
                									</div>
                								</div>
                							</div><!-- end col-lg-12 -->
                							<div class="col-lg-12">
                								<div class="input-box d-flex flex-wrap align-items-center justify-content-between">
                									<button class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray" type="submit">Post Comment</button>
                								</div>
                							</div><!-- end col-lg-12 -->
                						</form>
                					</div><!-- end collapse -->
                				</div>
                			</div><!-- end comments-wrap -->
                		</div><!-- end answer-body-wrap -->
                	</div><!-- end answer-wrap -->
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
            	<div class="sidebar">
            		<div class="ad-card">
            			<h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
            			<div class="ad-banner mb-4 mx-auto">
            				<span class="ad-text">290x500</span>
            			</div>
            		</div><!-- end ad-card -->
            		<div class="ad-card">
            			<h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
            			<div class="ad-banner mb-4 mx-auto">
            				<span class="ad-text">290x500</span>
            			</div>
            		</div><!-- end ad-card -->
            	</div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->

@include('layout/footer')