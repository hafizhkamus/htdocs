<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <div class="container pt-5">
        <div class="content">
            <form method="post" action="post.php">
                <div class="row">
                    <div class="col">
                        <div class="d-flex py-1 justify-content-between">
                            <label for="name"> Name</label> &nbsp;
                            <input name="name" type="text" placeholder="Name Here">
                        </div>
                        <div class="d-flex  py-1 justify-content-between">
                            <label for="alamat"> Alamat</label> &nbsp;
                            <input name="alamat" type="text" placeholder="Alamat Here">
                        </div>
                        <div class="d-flex  py-1 justify-content-between" style="align-items:center;">
                            <label> Jenis Kelamin</label> &nbsp;
                            <div class="value">
                                <input name="kelamin" type="radio" values="laki-laki"> &nbsp; laki-laki
                                <input name="kelamin" type="radio" values="perempuan"> &nbsp; perempuan
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex py-1 justify-content-between">
                            <label> Agama</label> &nbsp;
                            <select name="agama" style="width: 50%;">
                                <option value="islam">islam</option>
                            </select>
                        </div>
                        <div class="d-flex py-1 justify-content-between">
                            <label for="tempat"> TTL</label> &nbsp;
                            <textarea name="tempat" id="" cols="30" rows="1"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success" type="submit"> Kirim Data</button>  &nbsp;&nbsp;&nbsp;
                            <button class="btn btn-secondary" type="button"> Ulangi</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>