<!doctype html>
<html lang="en">
<head>
    <title>Jobs UAC | @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}"/>

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.min.css') }}">
    

</head>
<body>
@yield('content')

<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-material-design.min.js')}}" type="text/javascript"></script>

<!-- Plugin for the Perfect Scrollbar -->
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>

<!-- Plugin for the momentJs  -->
<script src="{{asset('js/moment.min.js')}}"></script>

<!--  Plugin for Sweet Alert -->
<script src="{{asset('js/sweetalert2.js')}}"></script>

<!-- Forms Validations Plugin -->
<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('js/jquery.bootstrap-wizard.js')}}"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('js/bootstrap-selectpicker.js')}}" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('js/fullcalendar.min.js')}}"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('js/jquery-jvectormap.js')}}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/nouislider.min.js')}}" ></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="{{asset('js/arrive.min.js')}}"></script>

<!--  Google Maps Plugin    -->
<script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Chartist JS -->
<script src="{{asset('js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('js/bootstrap-notify.js')}}"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/material-dashboard.min.js')}}" type="text/javascript"></script>

@yield('script')

</body>
</html>