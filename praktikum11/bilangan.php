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
                Bilangan
            </div>
            <div class="col" style="width : 100%;">
                <input name="bilangan" type="number" placeholder="Bilangan">
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
            $bulan = $_POST['bilangan'];
            $hasil;

            if($bulan != null){
                if($bulan < 0){
                    echo "Bilangan Negatif";
                } else {
                    echo "Bilangan Positif";
                }
            }
            
            ?>    
        </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>