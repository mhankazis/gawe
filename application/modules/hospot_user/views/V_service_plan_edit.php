

<!--  END CUSTOM STYLE FILE  -->


<div id="tabsVerticalWithIcon" class="col-lg-12 col-12 layout-spacing">
	<div class="statbox widget box box-shadow">
		<div class="widget-header">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-12">
					<h4>Vertical Rounded With Icon</h4>
				</div>
			</div>
		</div>
		<div class="widget-content widget-content-area rounded-vertical-pills-icon">

			<div class="row mb-4 mt-3">
				<div class="col-sm-4 col-12">
					<div style="margin-left: -140px" class="nav flex-column nav-pills mb-sm-0 mb-3" id="rounded-vertical-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-home-tab"  href="<?php echo base_url('hospot_user/edit_user/')?><?php echo $show['id_customer']?>" aria-controls="rounded-vertical-pills-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Customer Info</a>


						<a class="nav-link mb-2 mx-auto active" id="rounded-vertical-pills-profile-tab" href="<?php echo base_url('hospot_user/edit_service_plan/')?><?php echo $show['id_customer']?>" aria-controls="rounded-vertical-pills-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Service Plan</a>


						<a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-messages-tab"  href="<?php echo base_url('hospot_user/user_history/')?><?php echo $show['id_customer']?>"  aria-controls="rounded-vertical-pills-messages" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Invoice History</a>
					</div>
				</div>

				<div style="margin-left: -150px" class="col-sm-8 col-12">
					<div class="tab-content" id="rounded-vertical-pills-tabContent">
						<div class="tab-pane fade active show" id="rounded-vertical-pills-home" role="tabpanel" aria-labelledby="rounded-vertical-pills-home-tab">
							<div class="col-lg-11 mx-auto">
								<div class="row">

									<div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">

										<form  method="post" action="<?php echo base_url('hospot_user/action_edit_plan/'.$show['id_customer']) ?>">
											<div class="row">

												<div class="col-lg-11 mx-auto">
													<div class="row">

														<div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
															<div class="form">
																<div style="margin-left: -50px;" class="row">

																	<input type="hidden" name="id_customer_service" value="<?php echo $show ['id_customer_service']?>">
																	<div style="margin-bottom: 35px" class="col-md-12">
																		<div class="form-group">
																			<label for="profession">Server Name</label>
																			<select required name="sever_name" class="form-select" id="exampleFormControlSelect1">
																				<?php foreach ($show_server as $sv) {?>
																					<option <?php if ($show['id_server_name'] == $sv->id_server_name ) echo "selected" ?> value="<?php echo $sv->id_server_name?>"><?php echo $sv->name_server?></option>
																				<?php }?>
																			</select>

																		</div>
																		<a style="margin-top: 30px" href=""> <p style="margin-top: 10px">[+] ADD SERVER NAME</p></a>
																	</div>
																	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label for="country">Payment Type</label>
																			<select  name="payment_type" id="payment_type"  class="form-select mb-3">

																				<option <?php echo ($show['payment_type'] == 'PREPAID') ? "selected":""?> value="PREPAID"  id="prepaid">PREPAID</option>
																				<option <?php echo ($show['payment_type'] == 'POSTPAID	') ? "selected":""?> value="POSTPAID" id="postpaid">POSTPAID</option>
																			</select>
																		</div>
																	</div>

																	<div class="col-md-6">
																		<div class="form-group">

																			<label for="country">Pay Status</label>
																			<select name="trx_status"   class="form-select mb-3">

																				<option <?php echo ($show['payment_status'] == 'PAID	') ? "selected":""?> value="PAID" id="paid" selected="selected">PAID</option>
																				<option <?php echo ($show['payment_status'] == 'UNPAID	') ? "selected":""?>  value="UNPAID" id="unpaid">UNPAID</option>
																			</select>

																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label for="country">Account Status</label>
																			<select name="account_status" class="form-select mb-3" id="myselect">

																				<option <?php echo ($show['account_status'] == 'Enable	') ? "selected":""?> value="Enable">ENABLED</option>
																				<option <?php echo ($show['account_status'] == 'Disable	') ? "selected":""?> value="Disable">DISABLED</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">

																		<div class="form-group">
																			<label for="country">Data Owner</label>
																			<select name="data_owner"  class="form-select mb-3" id="select-state" >

																				<option value="<?php echo $data_owner['id_user']?>"><?php echo $data_owner['nama_lengkap']?></option>


																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">

																			<label for="country">Bind On Login</label>
																			<select name="bind_login" class="form-select mb-3" id="select-state" >

																				<option <?php echo ($show['bind_login'] == 'NO	') ? "selected":""?>  value="NO">NO</option>
																				<option <?php echo ($show['bind_login'] == 'YES	') ? "selected":""?> value="YES">YES</option>
																			</select>

																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label for="country">Service Plan</label>
																			<select name="service_plan"  class="form-select mb-3" id="select-state" >
																				<?php foreach ($show_service_plan as $ee) {?>
																					<option <?php if ($show['id_service_plan'] == $ee->id_service_plan ) echo "selected" ?> value="<?php echo $ee->id_service_plan?>"><?php echo $ee->plan_name?></option>
																				<?php }?>


																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">

																			<label for="address">Discount ( One Time )</label>
																			<input  name="discount" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" readonly value="<?php echo $show ['discount']  ?>" >

																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">

																			<label for="address">Reseller Fee</label>
																			<input name="reseller_fee" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" readonly value="<?php echo $show ['reseller_fee']  ?>" >

																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">

																			<label for="address">Instalation Fee</label>
																			<input name="instalation_fee" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" readonly value="<?php echo $show ['instalation_fee']  ?>" >

																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">

																			<label for="address">Device Fee</label>
																			<input name="device_fee" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" readonly value="<?php echo $show ['device_fee']  ?>" >

																		</div>
																	</div>
																	<div class="col-md-12">
																		<label for="address"><b>Nominal Writing :</b></label>
																		<span class="help-block text-green text-bold"><ul><li>Without thousands separator, use dot (.) for fractions</li><li>Reseller Fee : can be set manually or set to zero ( 0 ) if you want to use<br> fee from the profile sell price</li></ul></span></div>


																	<div style="margin-top: 15px" class="col-md-6">
																		<div class="form-group">

																			<label for="address">Renewed On</label>
																			<div class="input-group mb-3">
																				<input type="date" name="due_date" class="form-control mb-3 uang" id="address" placeholder="Address" value="<?php echo $show ['due_date']  ?>" >

																			</div>
																		</div>
																	</div>
																	<div style="margin-top: 15px" class="col-md-6">
																		<div class="form-group">

																			<label for="address">Due Date</label>
																			<div class="input-group mb-3">
																				<input style="color: #0284f5" type="text" class="form-control" READONLY value="UNLIMITED" placeholder="Notification" aria-label="notification">
																				<span class="input-group-text"><i size="3" data-feather="calendar"></i></span>
																			</div>

																		</div>
																	</div>



																	<div class="col-md-12 mt-1">
																		<div class="form-group text-end">
																			<button class="btn btn-secondary">Add Customer</button>
																		</div>
																	</div>

																</div>

															</div>
														</div>
													</div>
												</div>

											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="rounded-vertical-pills-profile" role="tabpanel" aria-labelledby="rounded-vertical-pills-profile-tab">
							<div class="media mt-4 mb-3 mr-2">
								<img class="me-3" src="<?php echo base_url(); ?>assets/src/assets/img/profile-32.jpeg" alt="Generic placeholder image">
								<div class="media-body">
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="rounded-vertical-pills-messages" role="tabpanel" aria-labelledby="rounded-vertical-pills-messages-tab">
							<p class="dropcap  dc-outline-primary">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
</div>
<script type="text/javascript">


	// New York
	var startlat = <?php echo $show['latitude'] ?>;
	var startlon = <?php echo $show['longitude'] ?>;

	var options = {
		center: [startlat, startlon],
		zoom: 9
	}

	document.getElementById('lat').value = startlat;
	document.getElementById('lon').value = startlon;

	var map = L.map('map', options);
	var nzoom = 12;

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(map);

	var myMarker = L.marker([startlat, startlon], {title: "Coordinates", alt: "Coordinates", draggable: true}).addTo(map).on('dragend', function() {
		var lat = myMarker.getLatLng().lat.toFixed(8);
		var lon = myMarker.getLatLng().lng.toFixed(8);
		var czoom = map.getZoom();
		if(czoom < 18) { nzoom = czoom + 2; }
		if(nzoom > 18) { nzoom = 18; }
		if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
		document.getElementById('lat').value = lat;
		document.getElementById('lon').value = lon;
		myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
	});

	function chooseAddr(lat1, lng1)
	{
		myMarker.closePopup();
		map.setView([lat1, lng1],18);
		myMarker.setLatLng([lat1, lng1]);
		lat = lat1.toFixed(8);
		lon = lng1.toFixed(8);
		document.getElementById('lat').value = lat;
		document.getElementById('lon').value = lon;
		myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
	}

	function myFunction(arr)
	{
		var out = "<br />";
		var i;

		if(arr.length > 0)
		{
			for(i = 0; i < arr.length; i++)
			{
				out += "<div class='address' title='Show Location and Coordinates' onclick='chooseAddr(" + arr[i].lat + ", " + arr[i].lon + ");return false;'>" + arr[i].display_name + "</div>";
			}
			document.getElementById('results').innerHTML = out;
		}
		else
		{
			document.getElementById('results').innerHTML = "Sorry, no results...";
		}

	}

	function addr_search()
	{
		var inp = document.getElementById("addr");
		var xmlhttp = new XMLHttpRequest();
		var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + inp.value;
		xmlhttp.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				var myArr = JSON.parse(this.responseText);
				myFunction(myArr);
			}
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();
	}


</script>
