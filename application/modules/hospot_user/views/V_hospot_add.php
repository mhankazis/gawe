<script src="https://demo.mixradius.com:2143/theme/default/assets/jquery/jquery.min.js"></script>
<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->

        <!-- /BREADCRUMB -->

        <div class="account-settings-container layout-top-spacing">
            <div class="card">
                <div class="card-body">


                    <div class="account-content">
                        <div class="row mb-3">
                            <div class="col-md-12">


                                <div class="animated-underline-content">
                                    <ul class="nav nav-tabs" id="animateLine" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-preferences-tab"  href="<?php echo base_url('hospot_user/service_information/') ?>"  aria-controls="animated-underline-preferences" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Customer Info</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Service Plan</a>
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="animateLineContent-4">
                            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <form method="post" action="<?php echo base_url('hospot_user/add_service/'.$id) ?>" class="section general-info">
                                            <div class="info">
                                                <h6 class="">Add Customer</h6>
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">

                                                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div  class="form-group">
                                                                                <label style="margin-bottom: 20px" for="profession"> Type</label><br>
                                                                                <input name="type_service" value="hotspot" class="form-check-input" type="radio" name="radio-checked" id="form-check-radio-default">
                                                                                <label class="form-check-label" for="form-check-radio-default">
                                                                                    HOTSPOT
                                                                                </label></div>
                                                                            </div>
                                                                            <input type="hidden" name="id_customer" value="<?php echo $id?>">
                                                                            <div style="margin-bottom: 35px" class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="profession">Server Name</label>
                                                                                    <select name="sever_name" class="form-select" id="exampleFormControlSelect1">
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a style="margin-top: 30px" href=""> <p style="margin-top: 10px">[+] ADD SERVER NAME</p></a>
                                                                            </div>
                                                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="country">Payment Type</label>
                                                                                    <select name="payment_type" id="payment_type"  class="form-select mb-3">

                                                                                        <option value="PREPAID" id="prepaid">PREPAID</option>
                                                                                        <option value="POSTPAID" id="postpaid">POSTPAID</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="country">Pay Status</label>
                                                                                    <select name="trx_status" id="trx_status"  class="form-select mb-3">

                                                                                        <option value="PAID" id="paid" selected="selected">PAID</option>
                                                                                        <option value="UNPAID" id="unpaid">UNPAID</option>
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="country">Account Status</label>
                                                                                    <select name="account_status" class="form-select mb-3" id="myselect">

                                                                                        <option  value="Enable">ENABLED</option>
                                                                                        <option value="Disable">DISABLED</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">

                                                                                <div class="form-group">
                                                                                    <label for="country">Data Owner</label>
                                                                                    <select name="data_owner"  class="form-select mb-3" id="select-state" >

                                                                                        <option value="1"><?php echo $data_owner['nama_lengkap']?></option>
                                                                                    

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="country">Bind On Login</label>
                                                                                    <select name="bind_login" class="form-select mb-3" id="select-state" >

                                                                                        <option value="NO">NO</option>
                                                                                        <option value="YES">YES</option>
                                                                                    </select>

                                                                                </div>
                                                                            </div>                                    
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="country">Service Plan</label>
                                                                                    <select name="service_plan"  class="form-select mb-3" id="select-state" >


                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>


                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Discount ( One Time )</label>
                                                                                    <input name="discount" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Reseller Fee</label>
                                                                                    <input name="reseller_fee" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Instalation Fee</label>
                                                                                    <input name="instalation_fee" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Device Fee</label>
                                                                                    <input name="device_fee" type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                               <label for="address"><b>Nominal Writing :</b></label>
                                                                               <span class="help-block text-green text-bold"><ul><li>Without thousands separator, use dot (.) for fractions</li><li>Reseller Fee : can be set manually or set to zero ( 0 ) if you want to use<br> fee from the profile sell price</li></ul></span></div>


                                                                               <div style="margin-top: 15px" class="col-md-12">
                                                                                <div class="form-group">

                                                                                    <label for="address">Change Due Date - Optional</label>
                                                                                    <input type="date" name="due_date" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

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
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                                

                                <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                            <div class="section general-info">
                                                <div class="info">
                                                    <h6 class="">Choose Theme</h6>
                                                    <div class="d-sm-flex justify-content-around">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                              <img class="ms-3" width="100" height="68" alt="settings-dark" src="<?php echo base_url(); ?>assets/src/assets/img/settings-light.svg">
                                                          </label>
                                                      </div>

                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            <img class="ms-3" width="100" height="68" alt="settings-light" src="<?php echo base_url(); ?>assets/src/assets/img/settings-dark.svg">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                        <div class="section general-info">
                                            <div class="info">
                                                <h6 class="">Activity data</h6>
                                                <p>Download your Summary, Task and Payment History Data</p>
                                                <div class="form-group mt-4">
                                                    <button class="btn btn-primary">Download Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                        <div class="section general-info">
                                            <div class="info">
                                                <h6 class="">Public Profile</h6>
                                                <p>Your <span class="text-success">Profile</span> will be visible to anyone on the network.</p>
                                                <div class="form-group mt-4">
                                                    <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                        <input class="switch-input" type="checkbox" role="switch" id="publicProfile" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                        <div class="section general-info">
                                            <div class="info">
                                                <h6 class="">Show my email</h6>
                                                <p>Your <span class="text-success">Email</span> will be visible to anyone on the network.</p>
                                                <div class="form-group mt-4">
                                                    <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                        <input class="switch-input" type="checkbox" role="switch" id="showMyEmail">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                        <div class="section general-info">
                                            <div class="info">
                                                <h6 class="">Enable keyboard shortcuts</h6>
                                                <p>When enabled, press <code class="text-success">ctrl</code> for help</p>
                                                <div class="form-group mt-4">
                                                    <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                        <input class="switch-input" type="checkbox" role="switch" id="EnableKeyboardShortcut">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                        <div class="section general-info">
                                            <div class="info">
                                                <h6 class="">Hide left navigation</h6>
                                                <p>Sidebar will be <span class="text-success">hidden</span> by default</p>
                                                <div class="form-group mt-4">
                                                    <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                        <input class="switch-input" type="checkbox" role="switch" id="hideLeftNavigation">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                        <div class="section general-info">
                                            <div class="info">
                                                <h6 class="">Advertisements</h6>
                                                <p>Display <span class="text-success">Ads</span> on your dashboard</p>
                                                <div class="form-group mt-4">
                                                    <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                        <input class="switch-input" type="checkbox" role="switch" id="advertisements">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                        <div class="section general-info">
                                            <div class="info">
                                                <h6 class="">Social Profile</h6>
                                                <p>Enable your <span class="text-success">social</span> profiles on this network</p>
                                                <div class="form-group mt-4">
                                                    <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                        <input class="switch-input" type="checkbox" role="switch" id="socialprofile" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>

</div>

<!--  BEGIN FOOTER  -->

<!--  END FOOTER  -->

<script>
   $("#payment_type").change(function(){
    if ($('#prepaid').is(':selected')) {
       $('#unpaid').removeAttr('selected'); 
       $('#paid').attr('selected','selected'); 
       $('#trx_status').removeAttr('disabled');
   }

   if ($('#postpaid').is(':selected')) {
       $('#paid').removeAttr('selected'); 
       $('#unpaid').attr('selected','selected');
       $('#trx_status').attr('disabled','disabled'); 
   }
});   
   
</script>