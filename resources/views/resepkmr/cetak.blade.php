<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @foreach($resepkmr as $r)
    {{-- @foreach ($i++) --}}
        <div class="container" style="margin-top : 5%">
                <center><h1>Hotel HEBAT</h1><small><h4>Jln. Gunung Sitoli No.36 Mudik</h4> <h5>Provinsi Sumatera Utara</h5></small></center> 
                <br>
                <br>
                <br>  
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Tanggal Check In</th>
                        <th scope="col">Tanggal Check Out</th>
                        <th scope="col">Jumlah Kamar</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Email</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $r->nama_tamu}}</td>
                        <td>{{ $r->tgl_in}}</td>
                        <td>{{ $r->tgl_out}}</td>
                        <td>{{ $r->jmlh_kmr}}</td>
                        <td>{{ $r->nama_pemesan}}</td>
                        <td>{{ $r->no_telp}}</td>
                        <td>{{ $r->email}}</td>
                    </tr>
                    
                    
                </tbody>
            </table>
            {{-- @endforeach --}}
            @endforeach

        </div>
        <br>
        <br>
        <br>
        <center><h4>--Harap Di Bawah Ketika Masuk Hotel--</h4></center>
        <center><h1>Terimakasih '_'</h1></center>
        <script>
            window.print();
        </script>
        </body>
        </html>