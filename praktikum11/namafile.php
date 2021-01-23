<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>praktikum 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<form method="post">
    <div class="container">
        <div class="text-center">
            <h1 class="font-weight-bold">Daftar NIlai UN Siswa</h1>
            <br>
            <h6 class="font-weight-bold">SMKN 4 Bandung</h6>
        </div>
        <br>
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col" style="width : 100%;">
                Nama
            </div>
            <div class="col" style="width : 100%;">
                <input name="nama" type="text" placeholder="Name">
            </div>  
        </div>
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col" style="width : 100%;">
                Nilai B.Indonesia
            </div>
            <div class="col" style="width : 100%;">
                <input name="indo" type="number" placeholder="">
            </div>
        </div>
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col" style="width : 100%;">
                Nilai Matematika
            </div>
            <div class="col" style="width : 100%;">
                <input name="math" type="number" placeholder="">
            </div>
        </div>
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col" style="width : 100%;">
                Nilai B.Inggris
            </div>
            <div class="col" style="width : 100%;">
                <input name="inggris" type="number" placeholder="">
            </div>
        </div>
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col" style="width : 100%;">
                Nilai Teori Kejuruan
            </div>
            <div class="col" style="width : 100%;">
                <input name="tk" type="number" placeholder="">
            </div>
        </div>
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col button" style="width : 100%;">
                <button class="btn btn-success">
                kirim
                </button>
            </div>
        </div>
    </div>
</form>

<div class="container">
        <div class="card text-center pt-5">
        <p id="hasil">
        <?php 
            $name = $_POST['nama'];
            $indo = $_POST['indo'];
            $math = $_POST['math'];
            $inggris = $_POST['inggris'];
            $tk = $_POST['tk'];
            $hasil = $indo+$math+$inggris+$tk;

            echo "Nama : $name  <br />"; 
            echo "Nilai Bahasa Indonesia : $indo <br />"; 
            echo "Nilai Matematika :  $math <br />"; 
            echo "Nilai Bahasa Inggris : $inggris <br />"; 
            echo "Nilai Teknik Keahlian : $tk <br />"; 
            echo "Nilai Keseluruhan : $hasil <br />"; 
            ?>    
        </p>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>