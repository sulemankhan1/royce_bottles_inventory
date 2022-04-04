<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		<?php
		if(isset($title) && !empty($title))
		{
			echo $title;
		}else
		{
			echo 'Royce';
		}  ?>
	</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>" />

	<!-- Library / Plugin Css Build -->
	<link rel="stylesheet" href="<?= base_url('assets/css/core/libs.min.css') ?>" />

	<!-- Aos Animation Css -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/aos/dist/aos.css') ?>" />

	<!-- Hope Ui Design System Css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/hope-ui.min.css?v=1.2.0') ?>" />

	<!-- Custom Css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.min.css?v=1.2.0') ?>" />

	<!-- Font Awesome Css -->
	<script src="https://kit.fontawesome.com/b04cb78fd5.js" crossorigin="anonymous"></script>

    <?php

      if(isset($styles) && !empty($styles))
      {

        foreach ($styles as $key => $v) {

    ?>

        <link rel="stylesheet" href="<?= base_url('assets/css/'.$v) ?>" />

    <?php

        }

      }
     ?>

		 <style type="text/css">

				.form-control
				{
					border: 1px solid #c7c7c7!important;
				}

		 </style>

</head>

<body class="">
	<!-- loader Start -->
	<div id="loading">
		<div class="loader simple-loader">
			<div class="loader-body"></div>
		</div>
	</div>
	<!-- loader END -->
