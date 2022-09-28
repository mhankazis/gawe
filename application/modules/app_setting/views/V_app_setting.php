<div style="margin-bottom: 20px" class="page-meta">
	<nav class="breadcrumb-style-one" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">App Setting</a></li>
			<li class="breadcrumb-item active" aria-current="page">General Settings</li>
		</ol>
	</nav>
</div>
<div class="row">

	<div id="flLoginForm" class="col-lg-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-header">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
						<h4>General Settings</h4>
					</div>
				</div>
			</div>
			<div class="widget-content widget-content-area">
				<form method="post" action="<?php echo base_url('App_setting/add_general_setting') ?>" class="row g-3">
					<div class="col-md-8">
						<label for="inputEmail4" class="form-label">Company Name</label>
						<input value="<?php echo $show_general['company_name']?> " name="company_name" type="text" name="company_name" class="form-control" id="inputEmail4">
					</div>
						<input type="hidden" name="id_company" value="">
					<div class="col-4">
						<label for="inputAddress" class="form-label">Mobile Phone</label>
						<input value="<?php echo $show_general['company_mobile']?>" name="company_mobile" type="text" class="form-control" id="inputAddress">
					</div>
					<div class="col-12">
						<label for="inputAddress2" class="form-label">Invoice Description</label>
						<input value="<?php echo $show_general['company_invoice']?>" name="company_acc_invoice" type="text" class="form-control" id="inputAddress2" >
						<input type="hidden" name="id_general" value="<?php echo $show_general['id_general'] ?>">
					</div>
					<div class="col-md-4">
						<label for="inputCity" class="form-label">Bank</label>
						<input value="<?php echo $show_general['company_bank']?>" name="company_bank" type="text" class="form-control" id="inputCity">
					</div>
					<div class="col-md-4">
						<label for="inputState" class="form-label">Acc Name</label>
						<input value="<?php echo $show_general['company_acc_name']?>" name="company_acc_name" type="text" class="form-control" id="inputCity">
					</div>
					<div class="col-md-4">
						<label for="inputZip" class="form-label">Acc Number</label>
						<input value="<?php echo $show_general['company_acc_number']?>" name="company_acc_number" type="text" class="form-control" id="inputZip">
					</div>
					<div class="col-12">
						<label for="inputState" class="form-label">Automatic Invoice</label>
						<select name="company_auto_invoice" id="inputState" class="form-select">

							<option <?php if ($show_general['company_auto_invoice']=='5 DAYS BEFORE DUE DATE') echo "selected" ?> value="5 DAYS BEFORE DUE DATE" selected="">5 DAYS BEFORE DUE DATE</option>
							<option <?php if ($show_general['company_auto_invoice']=='7 DAYS BEFORE DUE DATE') echo "selected" ?> value="7 DAYS BEFORE DUE DATE">7 DAYS BEFORE DUE DATE</option>
							<option <?php if ($show_general['company_auto_invoice']=='10 DAYS BEFORE DUE DATE') echo "selected" ?> value="10 DAYS BEFORE DUE DATE">10 DAYS BEFORE DUE DATE</option>
							<option <?php if ($show_general['company_auto_invoice']=='15 DAYS BEFORE DUE DATE') echo "selected" ?> value="15 DAYS BEFORE DUE DATE">15 DAYS BEFORE DUE DATE</option>

						</select>

					</div>
					<div class="col-12">
						<label for="inputState" class="form-label">Lock Renewal Feature Until</label>
						<select name="company_lock_renewal" id="inputState" class="form-select">
							<option <?php if ($show_general['company_lock_renewal']=='5 DAYS BEFORE DUE DATE') echo "selected" ?> value="5 DAYS BEFORE DUE DATE" selected="">5 DAYS BEFORE DUE DATE</option>
							<option <?php if ($show_general['company_lock_renewal']=='7 DAYS BEFORE DUE DATE') echo "selected" ?> value="7 DAYS BEFORE DUE DATE">7 DAYS BEFORE DUE DATE</option>
							<option <?php if ($show_general['company_lock_renewal']=='10 DAYS BEFORE DUE DATE') echo "selected" ?> value="10 DAYS BEFORE DUE DATE">10 DAYS BEFORE DUE DATE</option>
							<option <?php if ($show_general['company_lock_renewal']=='15 DAYS BEFORE DUE DATE') echo "selected" ?> value="15 DAYS BEFORE DUE DATE">15 DAYS BEFORE DUE DATE</option>
							<option <?php if ($show_general['company_lock_renewal']=='UNLOCKED -> CAN RENEWED ANYTIME') echo "selected" ?> value="UNLOCKED -> CAN RENEWED ANYTIME">UNLOCKED -> CAN RENEWED ANYTIME</option>

						</select>

					</div>
					<div class="form-group mb-4">
						<label for="exampleFormControlTextarea1">Address</label>
						<textarea name="company_address" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $show_general['company_address']?></textarea>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary">Lock Renewal Feature Until</button>
					</div>
				</form>


			</div>
		</div>
	</div>

</div>
