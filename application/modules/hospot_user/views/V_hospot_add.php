<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
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
                                            <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Service Plan</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-preferences-tab"  href="<?php echo base_url('hospot_user/service_information/') ?>"  aria-controls="animated-underline-preferences" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Customer Info</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="animateLineContent-4">
                            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <form class="section general-info">
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
                                                                                <input  class="form-check-input" type="radio" name="radio-checked" id="form-check-radio-default">
                                                                                <label class="form-check-label" for="form-check-radio-default">
                                                                                    HOTSPOT
                                                                                </label></div>
                                                                            </div>

                                                                            <div style="margin-bottom: 35px" class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="profession">Server Name</label>
                                                                                    <select class="form-select" id="exampleFormControlSelect1">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a style="margin-top: 30px" href=""> <p style="margin-top: 10px">[+] ADD SERVER NAME</p></a>
                                                                            </div>
                                                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="country">Payment Type</label>
                                                                                    <select  class="form-select mb-3" id="myselect">

                                                                                        <option selected>PREPAID</option>
                                                                                        <option>POSTPAID</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="address">Pay Status</label>
                                                                                    <input type="text" class="form-control mb-3" id="address" placeholder="Address" value="New York" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="country">Account Status</label>
                                                                                    <select  class="form-select mb-3" id="myselect">

                                                                                        <option selected>ENABLED</option>
                                                                                        <option>DISABLED</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">

                                                                                <div class="form-group">
                                                                                    <label for="country">Data Owner</label>
                                                                                    <select  class="form-select mb-3" id="select-state" >

                                                                                        <option selected>tes</option>
                                                                                        <option>tes</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="country">Bind On Login</label>
                                                                                    <select  class="form-select mb-3" id="select-state" >

                                                                                        <option selected>NO</option>
                                                                                        <option>YES</option>
                                                                                    </select>

                                                                                </div>
                                                                            </div>                                    
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="country">Service Plan</label>
                                                                                    <select  class="form-select mb-3" id="select-state" >

                                                                                        <option selected>NO</option>
                                                                                        <option>YES</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Discount ( One Time )</label>
                                                                                    <input type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Reseller Fee</label>
                                                                                    <input type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Instalation Fee</label>
                                                                                    <input type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                    <label for="address">Device Fee</label>
                                                                                    <input type="number" class="form-control mb-3 uang" id="address" placeholder="Address" value="0" >

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

