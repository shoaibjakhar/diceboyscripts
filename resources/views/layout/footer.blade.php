<!-- ================================
         START FOOTER AREA
         ================================= -->
         <section class="footer-area pt-80px bg-dark position-relative">
            <span class="vertical-bar-shape vertical-bar-shape-1"></span>
            <span class="vertical-bar-shape vertical-bar-shape-2"></span>
            <span class="vertical-bar-shape vertical-bar-shape-3"></span>
            <span class="vertical-bar-shape vertical-bar-shape-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 responsive-column-half">
                        <div class="footer-item">
                            <h3 class="fs-18 fw-bold pb-2 text-white">Company</h3>
                            <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <!-- <li><a href="contact.html">Contact</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="advertising.html">Advertising</a></li> -->
                            </ul>
                        </div><!-- end footer-item -->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-half">
                        <div class="footer-item">
                            <h3 class="fs-18 fw-bold pb-2 text-white">Legal Stuff</h3>
                            <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                <li><a href="#">Privacy Policy</a></li>
                                <!-- <li><a href="terms-and-conditions.html">Terms of Service</a></li>
                                    <li><a href="privacy-policy.html">Cookie Policy</a></li> -->
                                </ul>
                            </div><!-- end footer-item -->
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-3 responsive-column-half">
                            <div class="footer-item">
                                <h3 class="fs-18 fw-bold pb-2 text-white">Help</h3>
                                <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                    <!-- <li><a href="faq.html">Knowledge Base</a></li> -->
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div><!-- end footer-item -->
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-3 responsive-column-half">
                            <div class="footer-item">
                                <h3 class="fs-18 fw-bold pb-2 text-white">Connect with us</h3>
                                <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                    <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                                    <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                                    <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                                    <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                                </ul>
                            </div><!-- end footer-item -->
                        </div><!-- end col-lg-3 -->
                    </div><!-- end row -->
                </div><!-- end container -->
                <hr class="border-top-gray my-5">
                <div class="container">
                    <div class="row align-items-center pb-4 copyright-wrap">
                        <div class="col-lg-6">
                            <a href="{{url('/')}}" class="d-inline-block">
                                <img src="{{ asset('disilab/images/logo9.jpeg')}}" alt="footer logo" class="footer-logo">
                            </a>
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6">
                            <p class="copyright-desc text-right fs-14">Copyright &copy; 2022 <a href="https://diceboyscripts.com/">DiceBoyScripts</a></p>
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
          ================================= -->

          <!-- start back to top -->
          <div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end back to top -->

        <!-- Modal -->
        <div class="modal fade modal-container login-form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-center">
                        <h5 class="modal-title" id="loginModalTitle">Good to see you again!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-times"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Email</label>
                                <input class="form-control form--control" type="email" name="email" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Password</label>
                                <div class="input-group mb-1">
                                    <input class="form-control form--control password-field" type="password" name="password" placeholder="Enter password">
                                    <div class="input-group-append">
                                        <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                            <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                            <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="custom-control custom-checkbox fs-14">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label custom--control-label" for="rememberMe">Remember me!</label>
                                </div>
                                <a href="javascript:void(0)" class="lost-pass-btn fs-14 hover-underline">Forgot Password?</a>
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="btn theme-btn w-100">
                                    Login to Account <i class="la la-arrow-right icon ml-1"></i>
                                </button>
                            </div>
                            <p class="create-account-text text-right fs-14 pt-1">
                                New to diceboy? <a class="signup-btn text-color hover-underline" href="javascript:void(0)">Create account</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade modal-container signup-form" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-center">
                        <h5 class="modal-title" id="signUpModalTitle">Welcome! create your account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-times"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('signup')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Username</label>
                                <input id=""
                                type="text"
                                name="username"
                                class="@error('username') is-invalid  @enderror form-control form--control"
                                placeholder="Username"
                                value="{{ old('username') }}">
                                @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Email</label>
                                <input 
                                class="@error('email')  is-invalid  @enderror form-control form--control" 
                                type="email" 
                                name="email" 
                                placeholder="Email address"
                                value="{{ old('email') }}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Password</label>
                                <div class="input-group mb-1">
                                    <input 
                                    class="@error('password') is-invalid @enderror form-control form--control password-field" 
                                    type="password" 
                                    name="password" 
                                    placeholder="Enter password">

                                    <div class="input-group-append">
                                        <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                            <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                            <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                        </button>
                                    </div>

                                </div>
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <p class="fs-14 lh-20">Your password must be at least 6 characters long and must contain letters, numbers and special characters. Cannot contain whitespace.</p>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox fs-14">
                                    <input type="checkbox" class="custom-control-input" id="agreeCheckBox">
                                    <label class="custom-control-label custom--control-label" for="agreeCheckBox">By signing up, you agree to our <a href="#" class="text-color hover-underline">Privacy Policy.</a></label>
                                </div>
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="btn theme-btn w-100">
                                    Register Account <i class="la la-arrow-right icon ml-1"></i>
                                </button>
                            </div>
                            <p class="create-account-text text-right fs-14">
                                Already on diceboy? <a class="login-btn text-color hover-underline" href="javascript:void(0)">Log in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->


        <!-- template js files -->
        <script src="{{ asset('disilab/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{ asset('disilab/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('disilab/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('disilab/js/jquery-te-1.4.0.min.js')}}"></script>
        <script src="{{ asset('disilab/js/jquery.multi-file.min.js')}}"></script>
        <script src="{{ asset('disilab/js/selectize.min.js')}}"></script>
        <script src="{{ asset('disilab/js/main.js')}}"></script>
        <script src="{{ asset('disilab/js/jquery-te-1.4.0.min.js')}}"></script>
        <script src="{{ asset('disilab/js/upvote.vanilla.js')}}"></script>
        <script src="{{ asset('disilab/js/upvote-script.js')}}"></script>


        <script>
            $(document).ready(function(){
                $('.orderBy').change(function() {
                    var showByorder=$('.orderBy').val();
                    $.ajax({
                       type:'POST',
                       url:'{{url('orderBy')}}',
                       data:{_token: "{{ csrf_token() }}", showByorder:showByorder },
                       success:function(data) {
                         $("#question").html(data);
                     }
                 });
                });

                $("#vote a.upvote").click(function() {
                    
                    saveRating();
                });

                 $("#vote a.downvote").click(function() {
                   saveRating();
                });


                function saveRating()
                {
                     
                    
                    
                     var current_total_vote = parseInt($('#current_total_vote').text());
                     var user_pre_rating = parseInt($("#user_pre_rating").val());
                     var total_pre_rating = parseInt($("#total_pre_rating").val());

                     var rating= current_total_vote  - total_pre_rating +(user_pre_rating);

                     var script_id = $("input[name='script_id']").val();
                     var script_user_id = $("input[name='script_user_id']").val();

                    $.ajax({
                       type:'POST',
                       url:'{{url('rating')}}',
                       data:{_token: "{{ csrf_token() }}", rating:rating ,script_id :script_id , script_user_id : script_user_id },
                       success:function(data) {

                    }
                });
                }
            });

        
    function copyToClipboard() {
        var range = document.createRange();
                    range.selectNode(document.getElementById("question-blur"));
                    window.getSelection().removeAllRanges(); // clear current selection
                    window.getSelection().addRange(range); // to select text
                    document.execCommand("copy");
                    window.getSelection().removeAllRanges();
                    document.getElementById("copy-message").innerHTML = "Script Copy To Clipboard";
}

</script>


    </body>

    </html>