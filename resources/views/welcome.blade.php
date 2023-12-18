<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2225230054_dindayulia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <style>
    body {
      background-image: url("{{ asset('/images/bg2.jpg')}}");
      font-family: roboto;
      
    }
    img {
        width: 40px;
        height: 160px;
    }
    .card{
        width: 50%;
        height: 50%;
        margin-left: 400px;
        margin-top: 60px;
        background: #DEB887;
      }
    .btn {
        margin-left: 100px;
        padding: 10px;
        width: 250px;
        height: 50px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        background: #000000;
    }
    .btn:hover {
        background: white;
        color: 	#000000;
        
    }
  </style>


      <div class="card">
        <div class="card-body">
          <h1 class="card-title"><b><center>PROJEK UAS ALPRO 2023</center></b></h1> 
          <h4 class="card-subtitle mb-2"><center>Dosen Pengampu : Ria Sudiana, S.Si., M.Si.</h4>
          <br>
          <h4 class="card-subtitle mb-2"><center>Nama : Dinda Yulia Putri</center></h4>
          <h4 class="card-subtitle mb-2"><center>NIM : 2225230054</center></h4>
          <h4 class="card-subtitle mb-2"><center>Kelas : 1C</center></h4>
        </br>
          <h3><p class="card-text"><b><center>Tugas UAS ini untuk memenuhi mata kuliah Algoritma dan Pemrograman</center></b></p></h3>
          <a href="{{ url('/student') }}" class="btn ">Tekan Untuk Melihat</a>
        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>