<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marketplace Digimoru</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('Digimoru/css/styles.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

<header>

   <nav>
      <img class="ml-4" src="{{asset('Digimoru/gambar/Digimoru.png')}}">
      <div class="main">
      <div class="containerr">
         <ul>
            <li class="activate"><a href="{{ route('login') }}">Login</a></li>
            <li class="active"><a href="{{ route('register') }}">Register</a></li>
         </ul>
      </div>
   </nav>
</header>

<main>

 <article id="class" class="cardio">
    <section class="class">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
             </div>
             <div class="col-md-12 mt-2">
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                     {{-- <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li> --}}
                   </ol>
                 </nav>
             </div>
             @php
                   $path = Storage::url('Digimoru/gambar/'.$barang->gambar);
             @endphp
             <div class="col-md-12 mt-1">
                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-md-6">
                                <img src="{{ url($path) }}" class="rounded mx-auto d-block" width="100%" alt="">
                             </div>
                             <div class="col-md-6 mt-5">
                                 <h2>{{ $barang->nama_barang }}</h2>
                                 <table class="table">
                                     <tbody>
                                         <tr>
                                             <td>Harga</td>
                                             <td>:</td>
                                             <td>Rp. {{ number_format($barang->harga) }}</td>
                                         </tr>
                                         <tr>
                                             <td>Stok</td>
                                             <td>:</td>
                                             <td>{{ number_format($barang->stok) }}</td>
                                         </tr>
                                         <tr>
                                             <td>Keterangan</td>
                                             <td>:</td>
                                             <td>{{ $barang->keterangan }}</td>
                                         </tr>

                                         <tr>
                                             <td>Jumlah Pesan</td>
                                             <td>:</td>
                                             <td>
                                                  <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}" >
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                    <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                                 </form>
                                             </td>
                                         </tr>



                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    </section>
 </article>


<footer>
   <div class="containerr">
    <img src="{{asset('Digimoru/gambar/Digimoruijo.png')}}">
   </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
