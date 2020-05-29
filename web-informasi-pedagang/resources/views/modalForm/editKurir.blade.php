<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>

<form  action="/dataKurir/{id_kurir}/update" method="POST">
{{ @csrf_field() }}
  <div>
  
    <label for="">Nama</label>
    <input type="text" value="{{$k->nama_kurir}}" name="nama_kurir" class="form-control" >
    <label for="">Alamat</label>
    <textarea name="alamat_kurir"  value="{{$k->alamat_kurir}}" id="" cols="30" class="form-control" rows="10"></textarea>
    <!-- <input type="text" value="{{$k->alamat_kurir}}" name="alamat_kurir" class="form-control" > -->
    <label for="">Jenis Kelamin</label>
    <select name="" id="" value="{{$k->jenis_kelamin}}" name="jenis_kelamin" class="form-control">
      <option value="">Laki - Laki</option>
      <option value="">Perempuan</option>
    </select>
    <label for="">Nomor Telepon</label>
    <input type="text" value="{{$k->nomor_telepon}}" name="nomor_telepon" class="form-control" >
    <label for="">Jenis Kendaraan</label>
    <select name="" id="" value="{{$k->jenis_kendaraan}}" name="jenis_kendaraan" class="form-control">
      <option value="">Sepeda Motor</option>
      <option value="">Mobil</option>
      <option value="">Becak</option>
    </select>
    <label for="">Nomor Kendaraan</label>
    <input type="text" value="{{$k->nomor_kendaraan}}" name="nomor_kendaraan" class="form-control"> 
   
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
  </div>
</form>
</body>
</html>