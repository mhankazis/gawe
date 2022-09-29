<div class="page-meta">
	<nav class="breadcrumb-style-one" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">App</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog</li>
		</ol>
	</nav>
</div>
<!-- /BREADCRUMB -->

<div class="row layout-top-spacing">
	<div class="col-lg-3 col-md-3 col-sm-3 mb-4">
		<input id="t-text" type="text" name="txt" placeholder="Search" class="form-control" required="">
	</div>
	<div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4 ms-auto">
		<select class="form-select form-select" aria-label="Default select example">
			<option selected="">All Category</option>
			<option value="3">Wordpress</option>
			<option value="1">Admin</option>
			<option value="2">Themeforest</option>
			<option value="3">Travel</option>
		</select>
	</div>

	<div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
		<select class="form-select form-select" aria-label="Default select example">
			<option selected="">Sort By</option>
			<option value="1">Recent</option>
			<option value="2">Most Upvoted</option>
			<option value="3">Popular</option>
		</select>
	</div>
</div>
<div class="row">

	<?php foreach ($show as $show_user)
		{?>

	<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
		<a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
			<img src="<?php echo base_url(); ?>assets/src/assets/img/grid-blog-style-2.jpeg" class="card-img-top" alt="...">
			<div class="card-body px-0 pb-0">
				<h5 class="text-center"><?php echo $show_user->name?> </h5>
				<div class="media mt-4 mb-0 pt-1">
					<div class="media-body">
						<?php if ($show_user->level == 1)  {?>
							<h4 class="media-heading text-center">admin</h4>
						<?php } else{ ?>
							<h4 class="media-heading text-center">user</h4>
						<?php }?>


					</div>
				</div>
			</div>
		</a>
	</div>
	<?php }?>
	<?php echo $pagination ?>
</div>
