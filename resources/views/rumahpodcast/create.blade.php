<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">notifikasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              apakah anda yakin ingin kembali ke halawan awal
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tidak</button>
              <a class="btn btn-danger" href="/home">iya</a>
            </div>
          </div>
        </div>
      </div>
    <div class="container">
    <h4>Tambah Data Podcast Anda</h4>
    <div class="card  ">
        <div class="card-header "> 
            Isikan data podcast anda di bawah kolom ini 
        </div>

        <!-- modal akhir !-->
        <div class="card-body">
<form action="/store" method="POST"enctype="multipart/form-data">
         @csrf
        <input type="text"  class="form-control mb-3" name="Namapodcast" placeholder=" Nama Podcast"value="{{ old('Namapodcast')}}"><br>
        <input type="text"  class="form-control mb-3" name="Judul" class="mb-3" placeholder="Judul Podcast"value="{{ old('Judul')}}">
        <input type="file"  class="form-control mb-3" name="Foto" class="mb-3" value="{{ old('Foto')}}">
      
        <select name="Genre"  class="form-select mb-3" size="3" aria-label="size 3 select example">
            <option selected>Pilih Genre Podcast Anda</option>
            <option value="Komedi">Komedi</option>
            <option value="Cinta">Cinta</option>
            <option value="Inspirasi">Inspirasi</option>
            <option value="Horor">Horor</option>
        </select><br>
        <input type="date"  class="form-control mb-3" name="Tanggal" value="{{ old('Tanggal')}}"><br>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
         kembali
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#simpan">simpan</button>

</div>

<div class="modal fade" id="simpan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="simpan">notifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                apakah anda yakin ingin membuat data podcast anda?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tidak</button>
                <button type="submit" class="btn btn-primary">Submit</button>

              </div>
            </div>
          </div>
        </div>
        
        </form>
</div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>