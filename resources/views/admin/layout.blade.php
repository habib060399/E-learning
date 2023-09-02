<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title></title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../../assets/vendors/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="../../../assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="../../../assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />  
</head>
<body>
	<div class="main-wrapper">

		@include('admin/sidebar')
	
		<div class="page-wrapper">

            @include('admin/navbar')

			<div class="page-content">
				
				@yield('c')

			</div>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="../../../assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="../../../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
<script src="../../../assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>	
<script src="../../../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../assets/vendors/inputmask/jquery.inputmask.min.js"></script>
<script src="../../../assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>

  <!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../../../assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="../../../assets/js/sweet-alert.js"></script>
  <script src="../../../assets/js/form-validation.js"></script>
  <script src="../../../assets/js/inputmask.js"></script>
  <script src="../../../assets/js/tags-input.js"></script>
  <script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
	<!-- End custom js for this page -->

</body>
</html>