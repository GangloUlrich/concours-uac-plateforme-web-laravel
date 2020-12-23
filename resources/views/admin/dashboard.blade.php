@extends('admin.app')
@section('title','Dashboard')
@section('content')
    <div class="wrapper ">
        <div class="sidebar" data-color="green" data-background-color="white" data-image="#">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

              Tip 2: you can also add an image using data-image tag
          -->
            <div class="logo"><a href="{{ route('accueil') }}" class="simple-text logo-normal">
                    JOBS UAC
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('profil')}}">
                            <i class="material-icons">person</i>
                            <p>Profil</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('utilisateurs')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Utilisateurs</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('actualites_admin')}}">
                            <i class="material-icons">library_books</i>
                            <p>Actualités</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('publications_admin')}}">
                            <i class="material-icons fas fa-rss"></i>
                            <p>Publications</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('galerie_admin')}}">
                            <i class="material-icons fas fa-images"></i>
                            <p>Galerie</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('stages_admin')}}">
                            <i class="material-icons fas fa-business-time"></i>
                            <p>Stages</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('emplois_admin')}}">
                            <i class="material-icons fas fa-briefcase"></i>
                            <p>Emplois</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('poadcast_admin')}}">
                            <i class="material-icons fas fa-headphones"></i>
                            <p>Poadcast Employabilité</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('trucs_astuces_admin')}}">
                            <i class="material-icons fas fa-tools"></i>
                            <p>Trucs et Astuces</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('faq_admin')}}">
                            <i class="material-icons fas fa-question"></i>
                            <p>FAQ</p>
                        </a>
                    </li>
                    <!--<li class="nav-item ">
                        <a class="nav-link" href="{{route('icons')}}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('map')}}">
                            <i class="material-icons">location_ons</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('notifications')}}">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('rtl')}}">
                            <i class="material-icons">language</i>
                            <p>RTL Support</p>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Un nouveau recruteur</a>
                                    <a class="dropdown-item" href="#">Vous avez 5 offres à consulter</a>
                                    <a class="dropdown-item" href="#">Modification d'un profil</a>
                                    <a class="dropdown-item" href="#">Autre Notification</a>
                                    <a class="dropdown-item" href="#">Une autre</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profil</a>
                                    <a class="dropdown-item" href="#">Paramètres</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Deconnexion</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-user-alt"></i>
                                    </div>
                                    <p class="card-category">Utilisateurs</p>
                                    <h3 class="card-title">50</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-user-graduate"></i>
                                    </div>
                                    <p class="card-category">Etudiants</p>
                                    <h3 class="card-title">35</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-user-tie"></i>
                                    </div>
                                    <p class="card-category">Recruteurs</p>
                                    <h3 class="card-title">15</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-newspaper"></i>
                                    </div>
                                    <p class="card-category">Actualités</p>
                                    <h3 class="card-title">20</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-rss"></i>
                                    </div>
                                    <p class="card-category">Publications</p>
                                    <h3 class="card-title">13</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-images"></i>
                                    </div>
                                    <p class="card-category">Photos, Vidéos</p>
                                    <h3 class="card-title">55</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-business-time"></i>
                                    </div>
                                    <p class="card-category">Offres de Stage</p>
                                    <h3 class="card-title">10</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-briefcase"></i>
                                    </div>
                                    <p class="card-category">Offres d'Emploi</p>
                                    <h3 class="card-title">5</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-headphones"></i>
                                    </div>
                                    <p class="card-category">Emissions de Poadcast Employabilité</p>
                                    <h3 class="card-title">8</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-tools"></i>
                                    </div>
                                    <p class="card-category">Trucs et Astuces</p>
                                    <h3 class="card-title">10</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-question"></i>
                                    </div>
                                    <p class="card-category">Questions débattues</p>
                                    <h3 class="card-title">60</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons fas fa-building"></i>
                                    </div>
                                    <p class="card-category">Entreprises et Partenaires</p>
                                    <h3 class="card-title">25</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Aujourd'hui
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                    
                        
            
        </div>
    </div>
    

@endsection
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
</script>
@section('script')

@endsection