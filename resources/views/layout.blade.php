<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - kSchool :: Dashboard</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-default/bootstrap.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-default/materialadmin.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-default/font-awesome.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-default/material-design-iconic-font.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-default/libs/rickshaw/rickshaw.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-default/libs/morris/morris.core.css') }}"/>
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('assets/js/libs/utils/html5shiv.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/libs/utils/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="menubar-hoverable header-fixed ">
@include('partials.navbar')
<div id="base">
    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->
    <div id="content">
        <section>
            <div class="section-body">
               @yield('content')
            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->
@include('partials.sidebar')
</div>
<!-- BEGIN JAVASCRIPT -->
<script src="{{ asset('assets/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/spin.js/spin.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/autosize/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/flot/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('assets/js/libs/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/js/libs/flot/curvedLines.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/d3/d3.v3.js') }}"></script>
<script src="{{ asset('assets/js/libs/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('assets/js/core/source/App.js') }}"></script>
<script src="{{ asset('assets/js/core/source/AppNavigation.js') }}"></script>
<script src="{{ asset('assets/js/core/source/AppOffcanvas.js') }}"></script>
<script src="{{ asset('assets/js/core/source/AppCard.js') }}"></script>
<script src="{{ asset('assets/js/core/source/AppForm.js') }}"></script>
<script src="{{ asset('assets/js/core/source/AppNavSearch.js') }}"></script>
<script src="{{ asset('assets/js/core/source/AppVendor.js') }}"></script>
<script src="{{ asset('assets/js/core/demo/Demo.js') }}"></script>
<script src="{{ asset('assets/js/core/demo/DemoDashboard.js') }}"></script>
<!-- END JAVASCRIPT -->

</body>

</html>