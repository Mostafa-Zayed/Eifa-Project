<footer id="footer" class="m-0 border-0 bg-color-quaternary overflow-hidden">
    <div class="container">
        <div class="row py-5 custom-row-footer">
            <div class="col-12 col-sm-12 col-lg-4 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
                <img width="166" height="69" src="{{asset('assets/img/eifa/logo.png')}}" alt="Logo Footer">
                <p class="d-block m-0 text-color-default">@if(! empty($settings['description'])) {{$settings['description']}}@endif</p>
                <br>
                <h4 class="text-color-dark font-weight-bold text-uppercase text-6">Partners</h4>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" data-plugin-options="{'center': true, 'loop': true, 'nav': false, 'dots': true, 'margin': 10}">
                        <div>
                            <img alt="" class="img-fluid rounded" src="{{asset('assets/img/eifa/its-logo.png')}}">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="{{asset('assets/img/eifa/aaoifi.png')}}">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="{{asset('assets/img/eifa/cibafi.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 footer-column">
                <div class="mt-4 mt-sm-0">
                    <div>
                        <h4 class="text-color-dark font-weight-bold text-uppercase text-6">Pages</h4>
                        <nav class="nav-footer w-100">
                            <ul class="nav nav-pills justify-content-start" id="mainNav">
                                @if(isset($pages) && $pages->count() > 0)
                                    @foreach($pages as $page)
                                    <li class="dropdown-secondary">
                                        <a class="nav-link text-color-dark font-weight-bold letter-spacing-05 text-color-hover-primary ps-0" href="{{url($page->url)}}">
                                            {{ucwords($page->name)}}
                                        </a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-color-dark font-weight-bold text-uppercase text-6">Contact Us</h4>
                        <nav class="nav-footer w-100">
                            <ul class="nav nav-pills justify-content-start" id="mainNav">
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-dark font-weight-bold letter-spacing-05 text-color-hover-primary ps-0" href="#">
                                        Number1: <span class="text-color-secondary">@if(! empty($settings['phone1'])) {{$settings['phone1']}} @endif</span>
                                    </a>
                                </li>
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-dark font-weight-bold letter-spacing-05 text-color-hover-primary ps-0" href="#">
                                        E-Mail1: <span class="text-color-secondary">@if(! empty($settings['email1'])) {{$settings['email1']}} @endif</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-pills justify-content-start" id="mainNav">
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-dark font-weight-bold letter-spacing-05 text-color-hover-primary ps-0" href="#">
                                        Number2: <span class="text-color-secondary">@if(! empty($settings['phone2'])) {{$settings['phone2']}}@endif</span>
                                    </a>
                                </li>
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-dark font-weight-bold letter-spacing-05 text-color-hover-primary ps-0" href="#">
                                        E-Mail2: <span class="text-color-secondary">@if(! empty($settings['email2'])) {{$settings['email2']}}@endif</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="social-media d-flex align-items-end">
                    <a href="@if(! empty($settings['facebook'])) {{$settings['facebook']}} @else {{'https://www.facebook.com/'}}@endif" class="me-3">
                        <img src="{{asset('assets/img/icons/facebook-1.png')}}">
                    </a>
                    <a href="@if(! empty($settings['instagram'])) {{$settings['instagram']}} @else {{'https://www.instagram.com/'}}@endif" class="me-3">
                        <img src="{{asset('assets/img/icons/instagram.png')}}">
                    </a>
                    <a href="@if(! empty($settings['linkedin'])) {{$settings['linkedin']}} @else {{'https://www.linkedin.com/'}} @endif" class="me-3">
                        <img src="{{asset('assets/img/icons/linkedin.png')}}">
                    </a>
                    <a href="@if(! empty($settings['twitter'])) {{$settings['twitter']}} @else {{'https://twitter.com/'}} @endif">
                        <img src="{{asset('assets/img/icons/twitter.png')}}">
                    </a>
                </div>
                <div class="mt-4 news-box">
                    <h4 class="text-color-dark font-weight-bold text-uppercase text-6 mb-3">Latest articles</h4>
                    <a href="blog.html" class="me-3"><img src="{{asset('assets/img/boxes/news.png')}}"></a>
                    <p class="mt-3">A leading global institution in Islamic finance based on scientific discipline with practical experience, professional practice and ethical commitment.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright container bg-color-quaternary">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="">
                <p class="text-color-grey">Developed by Mostafa Zayed</p>
            </div>
            <div class="">
                <p class="text-color-grey">Eifa. ©  2021.  All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
