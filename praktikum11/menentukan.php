<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
<form method="post">
    <div class="container">
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col" style="width : 100%;">
                Bulan
            </div>
            <div class="col" style="width : 100%;">
                <select name="bulan">
                    <option value="januari">Januari</option>
                    <option value="februari">Februari</option>
                    <option value="maret">Maret</option>
                    <option value="april">April</option>
                    <option value="mei">Mei</option>
                    <option value="juni">Juni</option>
                    <option value="juli">Juli</option>
                    <option value="agustus">Agustus</option>
                    <option value="september">September</option>
                    <option value="oktober">Oktober</option>
                    <option value="november">November</option>
                    <option value="desember">Desember</option>
                </select>
            </div>  
        </div>
        <div class="row" style="width:40%; padding-bottom: 10px;">
            <div class="col" style="width : 100%;">
                Tahun
            </div>
            <div class="col" style="width : 100%;">
                <input name="tahun" type="number" placeholder="">
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


        <p id="hasil" class="container">
        <?php 
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $hasil;

            if($bulan != null && $tahun != null){
                if($tahun % 4 == 0){
                    if($bulan == "februari"){
                        $hasil = 29;
                        echo "jumlah hari = $hasil";
                    } else if ($bulan == "april" || $bulan == "juni" || $bulan == "september" || $bulan == "november"){
                        $hasil = 30;
                        echo "jumlah hari = $hasil";
                    } else {
                        $hasil = 31;
                        echo "jumlah hari = $hasil";
                    }
                } else {
                    if($bulan == "februari"){
                        $hasil = 28;
                        echo "jumlah hari = $hasil";
                    } else if ($bulan == "april" || $bulan == "juni" || $bulan == "september" || $bulan == "november"){
                        $hasil = 30;
                        echo "jumlah hari = $hasil";
                    } else {
                        $hasil = 31;
                        echo "jumlah hari = $hasil";
                    }
                }   
            }
            
            ?>    
        </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>