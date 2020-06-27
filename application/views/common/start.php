<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<?php if ($position == 'top') $this->load->view($src) ?>
	<script src="<?= base_url('assets/js/aframe.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/aframe-ar.js') ?>"></script>
</head>

<body>
