			<meta charset="utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
			<meta name="description" content="" />
			<meta name="author" content="" />
			<title>SISTEM SURAT MENYURAT</title>
			<link rel="shortcut icon" href="<?= base_url() ?>assets/assets/img/ico.png">
			<link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
			<link rel="stylesheet" href="<?= base_url() ?>assets/js/jquery.mask.js">
			<link rel="stylesheet" href="<?= base_url() ?>assets/js/jquery.mask.min.js">
			<link href="<?= base_url() ?>https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
			<link rel="stylesheet" href="datepicker/datepicker3.css" />
			<!-- Add fancyBox -->
			<link rel="stylesheet" href="<?= base_url() ?>/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
			<!-- Optionally add helpers - button, thumbnail and/or media -->
			<link rel="stylesheet" href="<?= base_url() ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
			<link rel="stylesheet" href="<?= base_url() ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
			<style>
				.form-group {
					margin-bottom: 0 !important;
				}
			</style>

			<script type="text/javascript">
				$(document).ready(function() {
					// Format mata uang.
					$('.uang').mask('0.000.000.000', {
						reverse: true
					});
				})
			</script>