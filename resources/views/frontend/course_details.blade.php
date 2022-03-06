@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.courses'))}}
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords($course->name)}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords($course->name)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8 pt-3 pt-lg-0">
                    <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">{{ucwords(trans('dashboard.course_reservation_title'))}}</p>
                    <div class="col-sm-9">
                        <button class="btn btn-modern btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">{{ucwords(trans('dashboard.registration_form'))}}</button>
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="formModalLabel">{{ucwords(trans('dashboard.registration_form'))}}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="demo-form" class="mb-4" novalidate="novalidate" method="POST" action="{{route('course.register',$course->id)}}">
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name..."/>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Number</label>
                                                <div class="col-sm-9">
                                                    <input type="numbers" name="Number" class="form-control" placeholder="Enter Your Number..."/>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Company's name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="Company Name" class="form-control" placeholder="Enter Your Company's Name..."/>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email..." required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Notes</label>
                                                <div class="col-sm-9">
                                                    <textarea rows="5" class="form-control" placeholder="Enter Your Notes ..." required></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-4 mb-lg-0">
                        <img src="img/eifa/partners-1.jpeg" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col py-5">
                <hr class="m-0">
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <p class="text-4 line-height-9 mb-0">The program aims to provide participants with the necessary professional knowledge and skills in the Sharia standards of Islamic banks and financial institutions.</p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-6">
                            <div class="card border-radius-0 box-shadow-1 border-0 me-lg-5 p-3 mb-3 mb-lg-0">
                                <img src="img/eifa/partners-2.jpeg" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-2 ps-lg-0 pt-4 pt-lg-0">
                            <!--<p class="mb-3 text-4"><strong class="text-dark">Client:</strong> Okler Themes</p>-->
                            <!--<p class="mb-3 text-4"><strong class="text-dark">Year:</strong> 2021</p>-->
                            <!--<p class="mb-3 text-4"><strong class="text-dark">Timeframe:</strong> 6 months</p>-->
                            <!--<p class="mb-3 text-4"><strong class="text-dark">Main Service:</strong> Management Consulting</p>-->
                            <!--<p class="mb-3 text-4"><strong class="text-dark">Extra Service:</strong> Business Coaching</p>-->
                            <!--<p class="text-4 mb-0"><strong class="text-dark">Return Over Investment:</strong> 90%</p>-->
                            <p> AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions <br>
                                AAOIFI grants two professional certificates:<br>
                                1/1- Certified Shariah Controller and Auditor Certificate(CSAA)<br>
                                2/1- Certified Islamic Chartered Accountant Certificate (CIPA)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>The program also provides candidates with studying the following areas:<br>
                        - Introducing the Sharia standards for Islamic banks and financial institutions issued by Al-Ayoufi.<br>
                        - The role of the various Sharia supervision and follow-up processes in Islamic banks.<br>
                        The relationship between the Shariah Supervisory Board and the internal Shariah control and follow-up processes.<br>
                        - Mechanism to follow up on the implementation of decisions and fatwas of Sharia boards.<br>
                        - Direct verification of the legitimacy of banking and financial operations in the institution.<br>
                        Target groups of this program:<br>
                        - Employees of Islamic banks and financial institutions (Takaful insurance and investment companies.), especially those working in the field of internal legal supervision and follow-up.<br>
                        Those interested in Islamic banking <br>
                        They wanted to work in Islamic banks in this field.
                    </p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-8">
                    <p class="m-0 p-0">Program duration:<br>
                        40 hours of training.
                        <br>

                        2/1 Certified Islamic Chartered Accountant Certificate <br>
                        Certified Islamic Professional Accountant (CIPA)<br>
                        Program objectives and content:<br>
                        The program aims to provide participants with the necessary technical knowledge and professional skills in the field of accounting for Islamic banks and financial institutions. The program also provides candidates with studying the following areas:<br>
                        - Introducing the accounting standards for Islamic transactions issued by the Al-Aoufi Authority.<br>
                        The objectives and concepts of financial accounting for Islamic banks and financial institutions.<br>
                        Accounting rules and treatments in Islamic banks and financial institutions.<br>
                        Presentation and public disclosure in the financial statements of Islamic banks and financial institutions<br>
                        Applications of Shariah controls in international Islamic financial products and services.
                    </p>
                    <!--<ul class="list list-icons list-primary mt-4">-->
                    <!--	<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>-->
                    <!--	<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum stibulum.</li>-->
                    <!--	<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Fusce sit amet orci q vestibulum vestibulum.</li>-->
                    <!--	<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>-->
                    <!--	<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum stibulum.</li>-->
                    <!--</ul>-->
                </div>
                <div class="col-lg-4">
                    <div class="card border-radius-0 box-shadow-1 border-0 mt-4 mt-lg-0 ms-lg-3 p-3 mb-3 mb-lg-0">
                        <img src="img/eifa/partners-3.jpeg" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
            </div>

            <!--<div class="row">-->
            <!--	<div class="col">-->
            <!--		<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Testimonials</p>-->
            <!--		<h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Review From our Client</h2>-->

            <!--		<div class="card border-radius-0 box-shadow-1 border-0 mb-4 p-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">-->
            <!--			<div class="testimonial testimonial-style-2">-->
            <!--				<blockquote>-->
            <!--					<p class="mb-0 text-5 line-height-9 px-md-5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>-->
            <!--				</blockquote>-->
            <!--				<div class="testimonial-arrow-down"></div>-->
            <!--				<div class="testimonial-author">-->
            <!--					<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">-->
            <!--					<p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>-->
            <!--				</div>-->
            <!--			</div>-->
            <!--		</div>-->

            <!--	</div>-->
            <!--</div>-->
        </div>
    </div>
    @include('frontend.includes.footer')
@section('js')
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/lazysizes/lazysizes.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('assets/vendor/vivus/vivus.min.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('assets/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('assets/js/views/view.contact.js')}}"></script>

    <!-- Demo -->
    <script src="{{asset('assets/js/demos/demo-business-consulting-2.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('assets/js/theme.init.js')}}"></script>
@endsection
@endsection
