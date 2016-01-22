<html>
<head>
	@include('layouts.header')
	@yield('header')
</head>
<body>
	@include('layouts.topber')
	@yield('topber')

<div class="ch-container">
    <div class="row">

	@include('layouts.left_menu')
	@yield('left_menu')

    <div id="content" class="col-lg-10 col-sm-10">


	@include('layouts.breadcrumb')
	@yield('breadcrumb')

    <!-- content starts -->

	@yield('content')

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
</body>
</html>