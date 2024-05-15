<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello world!</title>
  </head>
  <body>
    {{-- Awal Navbar--}}
    @include('layouts.navbar')
    {{-- Akhir Navbar--}}

    {{-- Awal Content--}} 
    <div class="section">
        <div class="container ">
           {{--row 1--}} 
        <div class="row mt-5">
        <center><h3>List Artikel Produk</h3></center>
        </div>
          {{--row 2--}} 
        <div class="row mt-3">
              <div class="col-4 mt-5">
            <div class="card" style="width: 18rem;">
                <img src="https://jumbo.co.id/wp-content/uploads/2020/07/140.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text"><b>{{ $produks->nama_produk }}</b></p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <hr>
                  <p class="card-text">Tanggal : {{ $produks->tanggal_produk }}</p>
                  <p class="text-danger">This text represents a danger.</p>
                  
 
                 <a href="/produk" class="btn btn-info">Kembali</a>
                </div>
              </div>
            </div>
            
           
            </div>
          </div>  
        </div>     
 
    {{-- Akhir Content--}}

    {{-- Awal Footer--}}
    @include('layouts.footer')      
    {{--Akhir Footer--}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>