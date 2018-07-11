<!DOCTYPE html>
<html lang="en">
 <head>
		

	    <title>@yield('title')</title>

	@include('shared.head')
 </head>
  <body class="animsition">

    @include('shared.header')
	
   
		@yield('content')
       
	

	@include('shared.footer')
    <!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>
	
	@include('shared.footerjs')

       @yield('js')

 </body>
</html>
