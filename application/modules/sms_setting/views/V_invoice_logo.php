<div style="margin-bottom: 20px" class="page-meta">
	<nav class="breadcrumb-style-one" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">App Setting</a></li>
			<li class="breadcrumb-item active" aria-current="page">Invoice Logo</li>
		</ol>
	</nav>
</div>
<div class="col-lg-12 col-12 layout-spacing">
	<div class="statbox widget box box-shadow">
		<div class="widget-header">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-12">
					<h4>Invoice Logo</h4>
				</div>
			</div>
		</div>
		<div class="widget-content widget-content-area">
			<?= form_open_multipart('invoice_logo/add_logo'); ?>
				<div class="row mb-4">
					<div class="col">
						<input name="logo_left" type="file" class="form-control" placeholder="First name">
					</div>
					<div class="col">
						<input name="logo_right" type="file" class="form-control" placeholder="Last name">
					</div>
				</div>
				<p>Maximum image size is width 400px and height 100px</p>
				<input type="submit" name="time" class="btn btn-primary">
			<?= form_close(); ?>



		</div>

	</div>
</div>
<div class="col-lg-12 col-12 layout-spacing">
	<div class="statbox widget box box-shadow">
		<div class="widget-header">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-12">
					<h4>Logo Left</h4>
				</div>
			</div>
		</div>
		<div class="widget-content widget-content-area">
			<img src="<?php echo base_url ()?>assets/img/<?php echo $show['invoice_logo_left']?> ">

		</div>

	</div>
</div>
