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
                                            <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Customer Info</a>
                                        </li>
                                        <li  class="nav-item">
                                            <a onclick="return false;" class="nav-link" id="animated-underline-preferences-tab"  href="<?php echo base_url('hospot_user/service_plan/') ?>"  aria-controls="animated-underline-preferences" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Service Plan</a>
                                            <!-- onclick="return false;" -->
                                        </li>
                                        
                                        
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="animateLineContent-4">
                            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <form method="post" action="<?php echo base_url('hospot_user/add_customer' ) ?>" class="section general-info">
                                            <div class="info">
                                                <h6 class="">Add Customer</h6>
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">

                                                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                               
                                                                
                                                                    <div class="row">
                                                                        <div style="margin-bottom: 15px" class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="profession"><b>ODP | POP ( Optional )   </b></label>
                                                                                <select required name="odp" class="form-select" id="exampleFormControlSelect1">
                                                                                    <option value="- No ODP | POP -">No ODP | POP -</option>
                                                                                    <option value="ODP CAREK - ODP CAREK 002-001-000">ODP CAREK - ODP CAREK 002-001-000</option>
                                                                                   
                                                                                </select>

                                                                            </div>

                                                                        </div>
                                                                        <div style="margin-bottom: 20px" class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="address"> <b>Customer ID</b></label>
                                                                                <input required type="text" name="id_customer" class="form-control mb-3" id="address" placeholder="Customer ID"  >
                                                                                <p style="margin-top: -10px;     font-size: smaller;">LETTERS AND NUMBERS ONLY</p>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="address"><b>Name</b></label>
                                                                                <input required name="name" type="text" class="form-control mb-3" id="address" placeholder="Full Name" >
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin-bottom: 15px" class="col-md-12"><div class="form-group">
                                                                            <label for="address"><b> ID Card | Driver Licence | Passport</b></label>
                                                                            <input required type="text" name="id_card" class="form-control mb-3" id="address" placeholder="0000000000000000000000000" >
                                                                        </div></div>


                                                                        
                                                                        <div style="margin-bottom: 15px" class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="address"><b>  Mobile Phone</b></label>
                                                                                <input required type="text" name="mobile" class="form-control mb-3" id="address" placeholder="International Phone Format" >


                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">

                                                                            <div class="form-group">
                                                                                <label for="address"><b>  Email</b></label>
                                                                                <input required type="email" name="email" class="form-control mb-3" id="address" placeholder="Example@mail.com" >
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6">

                                                                            <div class="form-group">
                                                                                <label for="address"><b>  Username</b></label>
                                                                                <input required type="text" name="username" class="form-control mb-3" id="address" placeholder="Username" >
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6">

                                                                            <div class="form-group">
                                                                                <label for="address"><b>  Password</b></label>
                                                                                <input required type="text" name="password" class="form-control mb-3" id="address" placeholder="Password" >
                                                                            </div>
                                                                            
                                                                        </div>

                                                                        <div style="margin-bottom: 15px" class="col-md-12">


                                                                            <div id="search"  class="form-group">
                                                                                <label for="address"><b>  Address</b></label>
                                                                                <div class="input-group">
                                                                                    <input type="text" class="form-control mb-3" id="addr" placeholder="Jl. Tanah bato Gg. Nur Rahman Gadut, Tilatang Kamang" >
                                                                                    <div style="margin-left: 20px" class="input-group-append">
                                                                                        <button style="    height: 50px;
                                                                                        width: 70px;" class="btn btn-outline-success btn-lg btn-icon mb-2 me-4" type="button" onclick="addr_search();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                                                      </svg></button>
                                                                                  </div>
                                                                              </div>

                                                                              <div  id="results"></div>
                                                                          </div>



                                                                      </div>
                                                                      <div class="col-md-12">
                                                                        <input type="hidden" name="lon" id="lon" size=12 value="" class="form-control" id="inputCity">


                                                                        <input type="hidden" name="lat" id="lat" size=12 value=""
                                                                        class="form-control" id="inputCity">
                                                                        <div id="map"></div>
                                                                        <style type="text/css">
                                                                            html, body { width:100%;padding:0;margin:0; }
                                                                            .container { width:100%;max-width:980px;padding:1% 2%;margin:0 auto }
                                                                            #lat, #lon { text-align:right }
                                                                            #map { width:100%;height:225px;padding:0;margin:0; }
                                                                            .address { cursor:pointer }
                                                                            .address:hover { color:#AA0000;text-decoration:underline }
                                                                        </style>
                                                                    </div>
                                                                     

                                                                    
                                                                    
                                                                    
                                                                    
                                                                    



                                                                    <div class="col-md-12 mt-5">
                                                                        <div class="form-group text-end">
                                                                            <button type="submit" class="btn btn-secondary">Add Customer</button>
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
<script type="text/javascript">


// New York
var startlat = -7.80119450;
var startlon = 110.36491700;

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
