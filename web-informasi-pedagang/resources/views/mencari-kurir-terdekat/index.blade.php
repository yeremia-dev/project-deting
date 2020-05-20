@extends('mencari-kurir-terdekat.layouts.master')
@section('content')
	<br>
	<div class="alert alert-dark" role="alert">
		<h3>Pedagang</h3>
	</div>
	<br>
	<div class="form-group">
		<h4>Cari Kurir Terdekat</h4><br>
		<form id="formCariTempat"  autocomplete="off">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Lokasi Anda</label>
		    <input type="text" class="form-control" placeholder="Lokasi anda" id="tempat">
		  </div>
		  <button type="submit" class="btn btn-primary">Cari Kurir</button>
		</form>
	</div>

	<br>
	<hr>
	<div class="form-group">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<label for="lokasi">Lokasi</label>
					<textarea id="lokasi" rows="5" cols="5" class="form-control">--
					</textarea>
          <label for="longitude">Longitude</label>
          <input id="longitude" type="text" name="" class="form-control" value="--">
          <label for="latitude">Latitude</label>
          <input  id="latitude" type="text" name="" class="form-control" value="--">
					<div id="panelContent"></div><br>
					<!-- <div id="longitude"></div><br>
					<div id="latitude"></div> -->
				</div>
				<div class="col-md-5">
					<div id="map" style="height: 500px;width: 600px"></div>
				</div>
        <div class="col-md-4">
          <div>
            <div id="judul_kurir"></div> <br>
             <div id="content_kurir"  ></div>
          </div>
        </div>
			</div>
		</div>

	</div>
  <script type="text/javascript">
    var count = 0;
      /**
     * Converts degrees to radians.
     *
     * @param degrees Number of degrees.
     */
    function degreesToRadians(degrees){
        return degrees * Math.PI / 180;
    }

    /**
     * Returns the distance between 2 points of coordinates in Google Maps
     *
     * @see https://stackoverflow.com/a/1502821/4241030
     * @param lat1 Latitude of the point A
     * @param lng1 Longitude of the point A
     * @param lat2 Latitude of the point B
     * @param lng2 Longitude of the point B
     */
    function getDistanceBetweenPoints(lat1, lng1, lat2, lng2){
        // The radius of the planet earth in meters
        let R = 6378137;
        let dLat = degreesToRadians(lat2 - lat1);
        let dLong = degreesToRadians(lng2 - lng1);
        let a = Math.sin(dLat / 2)
                *
                Math.sin(dLat / 2)
                +
                Math.cos(degreesToRadians(lat1))
                *
                Math.cos(degreesToRadians(lat1))
                *
                Math.sin(dLong / 2)
                *
                Math.sin(dLong / 2);

        let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        let distance = R * c;

        return distance;
    }

    // Obtain the distance in meters using the haversine formula
    function getKurir(latA,longA){
      console.log(latA);
      console.log(longA);
      $("#judul_kurir").append("<h3>List Kurir</h3>")
      <?php
      foreach($kurirs as $kurir){
        ?>
          var distanceInMeters = getDistanceBetweenPoints(
            // LatA
            latA,
            // LongA
            longA,
            // LatB
            <?= $kurir->latitude ?>,
            // LongB
            <?= $kurir->longitude ?>
        );
          // Outputs: Distance in Meters:  286476.96153465303
          console.log("Distance in Meters: ", distanceInMeters);
          if(distanceInMeters <= 1000){
            count++;
              $("#content_kurir").append("\
                <div class='alert alert-primary'>\
                  <div class='row'>\
                    <div class='col-md-6'>\
                      <table>\
                        <tr>\
                          <td><p>Nama </p></td>\
                          <td><p> : </p></td>\
                          <td><p> <?= $kurir->nama_kurir ?></p></td>\
                        </tr>\
                        <tr>\
                          <td><p>No. Handphone </p></td>\
                          <td><p> : </p></td>\
                          <td> <p id='myInput'><?= $kurir->nomor_telepon ?></p></td>\
                        </tr>\
                        <tr>\
                          <td><p>Jenis Kendaraan </p></td>\
                          <td><p> : </p></td>\
                          <td><p> <?= $kurir->jenis_kendaraan ?></td>\
                        </tr>\
                      </table>\
                    </div>\
                  <div class='col-md-6'></div></div>\
                </div>");
          }
        <?php
      }
    ?>
    if(count == 0){
      $("#content_kurir").append("<div class='alert alert-primary'>\
          <p>Tidak ada kurir berjarak 1 km dari lokasi anda</p>\
        </div>");
    }
    }


</script>

	<script type="text/javascript">
      $(document).ready(function() {

        function updateMarkerPosition(latLng) {
            document.getElementById('latitude').value = [latLng.lat()]
            document.getElementById('longitude').value = [latLng.lng()]
            getKurir(latLng.lat(),latLng.lng());
        }
        $("#formCariTempat").submit(function(e) {
            e.preventDefault();
            //ambil value dari form
            var namatempat=$("#tempat").val();

            if (namatempat!="") {
               //replace semua spasi menjadi tanda plus (+)
                namatempat=namatempat.replace(/ /g, "+");
               //api google maps
                var url="https://maps.googleapis.com/maps/api/geocode/json?address="+namatempat+"&key=AIzaSyCqk0o7gAPnf-hWOKtlFPjYtvWBKgDo33o";

                document.getElementById("panelContent").innerHTML="";

                //ambil data dari json
                $.getJSON(url, function(result){

                    //menampilkan peta
                    var map;
                    map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 15,
                      center: {lat: result.results[0].geometry.location.lat, lng: result.results[0].geometry.location.lng},
                    });
                    var propertiPeta = {
                        center:new google.maps.LatLng(result.results[0].geometry.location.lat,result.results[0].geometry.location.lng),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: false,         zoomControl: true,
                         scaleControl: false,
                         streetViewControl: false,
                         rotateControl: false,
                         fullscreenControl: false
                    }

                    //looping data json
                    $.each(result.results, function(i){
                        //menampilkan data keterangan alamat, lat, long
                        $("#latitude").val(result.results[i].geometry.location.lat);
                        $("#longitude").val(result.results[i].geometry.location.lng);
                        $("#lokasi").val(result.results[i].formatted_address);
                        //local storage
                        localStorage.setItem("longitude", result.results[i].geometry.location.lng);
                        localStorage.setItem("latitude", result.results[i].geometry.location.lat);


                        var peta = new google.maps.Map(document.getElementById("map"), propertiPeta);

                        var latLng = new google.maps.LatLng(result.results[i].geometry.location.lat, result.results[i].geometry.location.lng);
                       var marker = new google.maps.Marker({
                           position : latLng,
                           title : 'lokasi',
                           map : map,
                           streetViewControl: false,
                           draggable : true,
                       });
                       updateMarkerPosition(latLng);
                       google.maps.event.addListener(marker, 'drag', function() {
                           updateMarkerPosition(marker.getPosition());
                       });

                         // To add the marker to the map, call setMap();
                        marker.setMap(peta);

                   });

                 });

            }else{
              alert("Nama tempat tidak boleh kosong!");
            }
        });

    });

</script>

@endsection

