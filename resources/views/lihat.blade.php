<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .Foto {
            position: relative;
            padding-bottom: 5%;
            height: 0;
            overflow: hidden;
        }
    
        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>


    
    <div class="Foto">

        <!-- Page Heading --> 

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="/rumahpodcast" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Kembali</a>
                    </div>
    /* <a href="/rumahpodcast" class="btn btn-primary container" style="justify-content:center; display:block;">kembali ke halaman</a>
    </div> */
    <h3 style="text-align: center">Nama Genre:{{$data->Genre}}</h3>

    <iframe src="/image/{{$data->Foto}}" sandbox="" style="margin-left:15%; width:70%; height:70%; postion:absolute; postion:relative;" ></iframe>
    

</body>
</html>