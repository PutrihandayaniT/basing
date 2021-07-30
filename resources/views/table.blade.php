<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <div class="table-responsive">
            <table class="table table-dark table-responsive table-bordered">
                <thead>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <th colspan="3">Data Barang</th>
                        <th rowspan="3">Status</th>
                    </tr>
                    <tr class="text-center">
                        <!-- <th style="vertical-align: middle" align="middle" class="align-middle">Nomor</th> -->
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Laptop</td>
                        <td id="jumlah1">1</td>
                        <td id="harga1" class="hargaclass1">100000</td>
                        <td id="hutang1">Lunas</td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Komputer</td>
                        <td id="jumlah2">1</td>
                        <td id="harga2">50000</td>
                        <td id="hutang2">Lunas</td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Keyboard</td>
                        <td id="jumlah3">1</td>
                        <td id="harga3">20000</td>
                        <td id="hutang3">Lunas</td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Total</td>
                        <td id="totaljumlah"></td>
                        <td id="totalharga"></td>
                        <td id="hutang"></td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Total Keseluruhan</td>
                        <td colspan="3" id="titiljimlih"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
               
        
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ url('assets/main.js') }}"></script>
    <!-- <script>document.getElementById("demo").innerHTML = z;</script> -->
</html>