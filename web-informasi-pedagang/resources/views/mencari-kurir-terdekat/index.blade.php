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
		  <div class="form-group">
		    <label for="exampleInputPassword1">Kategori Kurir</label>
		     <select class="form-control" >
		      <option>Angkutan</option>
		      <option>Motor</option>
		      <option>Becak</option>
		    </select>
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
					<div id="panelContent"></div><br>
					<div id="longitude"></div><br>
					<div id="latitude"></div>
				</div>
				<div class="col-md-9">
					<div id="map" style="height: 500px;width: 600px"></div>	
				</div>
			</div>
		</div>
		
	</div>
	<script type="text/javascript">
      $(document).ready(function() {
        
        function updateMarkerPosition(latLng) {
            document.getElementById('latitude').value = [latLng.lat()]
            document.getElementById('longitude').value = [latLng.lng()]
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

