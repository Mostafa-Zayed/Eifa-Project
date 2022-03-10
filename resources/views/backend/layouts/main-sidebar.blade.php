<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <li>
                        <a href="{{route('dashboard.index')}}"><i class="ti-home"></i><span class="right-nav-text">{{trans('dashboard.index')}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pages.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.pages'))}}</span> </a>
                    </li>
                    <li>
                        <a href="{{route('services.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.services'))}}</span> </a>
                    </li>
                    <li>
                        <a href="{{route('courses.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.courses'))}}</span></a>
                    </li>
                    <li>
                        <a href="{{route('founders.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.founders'))}}</span></a>
                    </li>

                    <li>
                        <a href="{{route('partners.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.partners'))}}</span></a>
                    </li>

                    <li>
                        <a href="{{route('categories.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.categories'))}}</span></a>
                    </li>

                    <li>
                        <a href="{{route('reservations.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.reservations'))}}</span></a>
                    </li>

                    <li>
                        <a href="{{route('medias.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.media'))}}</span></a>
                    </li>
                    {{--
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{ucwords(trans('dashboard.media'))}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('media.index')}}">{{ucwords(trans('dashboard.all_media'))}}</a> </li>
                            <li> <a href="{{route('media.create')}}">{{ucwords(trans('dashboard.add_media'))}}</a> </li>
                        </ul>
                    </li>
                    <!-- menu item Form-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">{{ucwords(trans('dashboard.articles'))}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Form" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('articles.index')}}">{{ucwords(trans('dashboard.all_articles'))}}</a> </li>
                            <li> <a href="{{route('articles.create')}}">{{ucwords(trans('dashboard.add_article'))}}</a> </li>
                        </ul>
                    </li>
                    <!-- menu item table -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">{{ucwords(trans('dashboard.founders'))}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('founders.index')}}">{{ucwords(trans('dashboard.all_founders'))}}</a> </li>
                            <li> <a href="{{route('founders.create')}}">{{ucwords(trans('dashboard.add_founder'))}}</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">{{ucwords(trans('dashboard.partners'))}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('partners.index')}}">{{ucwords(trans('dashboard.all_partners'))}}</a> </li>
                            <li> <a href="{{route('partners.create')}}">{{ucwords(trans('dashboard.add_partner'))}}</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                            <div class="pull-left"><i class="ti-id-badge"></i><span
                                    class="right-nav-text">{{ucwords(trans('dashboard.reservations'))}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('reservations.index')}}">{{ucwords(trans('dashboard.all_reservations'))}}</a> </li>
                            <li> <a href="{{route('reservations.create')}}">{{ucwords(trans('dashboard.add_reservation'))}}</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">
                            <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">{{ucwords(trans('dashboard.settings'))}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('settings.index')}}">{{ucwords(trans('dashboard.all_settings'))}}</a> </li>
                            <li> <a href="{{route('settings.create')}}">{{ucwords(trans('dashboard.add_setting'))}}</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('abouts.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.how_are_we'))}}</span> </a>
                    </li>

                    <li>
                        <a href="{{route('contacts.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ucwords(trans('dashboard.contact'))}}</span> </a>
                    </li>
--}}

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
