

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
          <div style="margin-left: -150px" class="nav flex-column nav-pills mb-sm-0 mb-3" id="rounded-vertical-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link mb-2 mx-auto active" id="rounded-vertical-pills-home-tab" data-bs-toggle="pill" href="#rounded-vertical-pills-home" role="tab" aria-controls="rounded-vertical-pills-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Customer Info</a>


            <a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-profile-tab" href="zz" aria-controls="rounded-vertical-pills-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Service Plan</a>


            <a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-messages-tab" data-bs-toggle="pill" href="#rounded-vertical-pills-messages" role="tab" aria-controls="rounded-vertical-pills-messages" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Customer Report</a>
          </div>
        </div>

        <div style="margin-left: -150px" class="col-sm-8 col-12">
          <div class="tab-content" id="rounded-vertical-pills-tabContent">
            <div class="tab-pane fade active show" id="rounded-vertical-pills-home" role="tabpanel" aria-labelledby="rounded-vertical-pills-home-tab">
              <div class="col-lg-11 mx-auto">
                <div class="row">

                  <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">

                    <form  method="post" action="<?php echo base_url('hospot_user/action_edit_user/'.$show['id_customer']) ?>">
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
                          <input value="<?php echo $show['id_customer'] ?>" required type="text" name="id_customer" class="form-control mb-3" id="address" placeholder="Customer ID"  >
                          <p style="margin-top: -10px;     font-size: smaller;">LETTERS AND NUMBERS ONLY</p>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="address"><b>Name</b></label>
                          <input required name="name" value="<?php echo $show['name'] ?>" type="text" class="form-control mb-3" id="address" placeholder="Full Name" >
                        </div>
                      </div>
                      <div style="margin-bottom: 15px" class="col-md-12"><div class="form-group">
                        <label for="address"><b> ID Card | Driver Licence | Passport</b></label>
                        <input value="<?php echo $show['id_card'] ?>" required type="text" name="id_card" class="form-control mb-3" id="address" placeholder="0000000000000000000000000" >
                      </div></div>



                      <div style="margin-bottom: 15px" class="col-md-6">
                        <div class="form-group">
                          <label for="address"><b>  Mobile Phone</b></label>
                          <input value="<?php echo $show['mobile'] ?>" required type="text" name="mobile" class="form-control mb-3" id="address" placeholder="International Phone Format" >


                        </div>
                      </div>


                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="address"><b>  Email</b></label>
                          <input value="<?php echo $show['email'] ?>" required type="email" name="email" class="form-control mb-3" id="address" placeholder="Example@mail.com" >
                        </div>

                      </div>
                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="address"><b>  Username</b></label>
                          <input value="<?php echo $show['username'] ?>" required type="text" name="username" class="form-control mb-3" id="address" placeholder="Username" >
                        </div>

                      </div>
                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="address"><b>  Password</b></label>
                          <input value="<?php echo $show['password'] ?>" required type="password" name="password" class="form-control mb-3" id="address" placeholder="Password" >
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
                          <button type="submit" class="btn btn-secondary">Edit User</button>
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