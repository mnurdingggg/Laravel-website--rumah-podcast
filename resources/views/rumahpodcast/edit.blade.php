<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body id="">

    <div class="container">
    <h4>edit data</h4>
    <div class="card">
        <div class="card-body">

            
    
    <form action="/rumahpodcast/{{$rumahpodcast->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
         @csrf
         @if($rumahpodcast->Foto)
         <iframe height="500"  width="500" src="/image/{{$rumahpodcast->Foto}}" sandbox= "margin-left:20%;" ></iframe>
         <br>
         <input type="file" name="Foto" placeholder="titik kordinat"value="{{ $rumahpodcast->Foto}}"  class="form-control mb-3"><br>

         @endif
        <input type="text" name="Namapodcast" placeholder="Namapodcast"value="{{$rumahpodcast->Namapodcast}}" class="form-control mb-3"><br>
        <input type="text" name="Judul" placeholder="Judul"value="{{ $rumahpodcast->Judul}}"  class="form-control mb-3"><br>
        <select name="Genre">
    <option value="">Genre</option>
    <option value="Komedi" {{ $rumahpodcast->Genre == "Komedi" ? 'selected' : '' }}>Komedi</option>
    <option value="Cinta" {{ $rumahpodcast->Genre == "Cinta" ? 'selected' : '' }}>Cinta</option>
    <option value="Inspirasi" {{ $rumahpodcast->Genre == "Inspirasi" ? 'selected' : '' }}>Inspirasi</option>
    <option value="Horor" {{ $rumahpodcast->Genre == "Horor" ? 'selected' : '' }}>Horor</option>
</select>
        <input type="date" name="Tanggal" value="{{ $rumahpodcast->Tanggal}}">

        <input type="submit" name="submit" value="save">
    </form>
</body>
</html>