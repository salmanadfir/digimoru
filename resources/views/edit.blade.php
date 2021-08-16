<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marketplace Digimoru</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('Digimoru/css/styles.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

<header>
    {{-- <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label> --}}
    {{-- <div class="sidebar">
        <header>Digimoru</header>
        <ul>
            <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
        </ul>
    </div> --}}
   <nav>
      <img class="ml-4" src="{{asset('Digimoru/gambar/Digimoru.png')}}">
      <div class="main">
      <div class="containerr">
         <ul>
            <li class="nav-item">
                <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Manajemen Produk</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </li>
         </ul>
      </div>
   </nav>
</header>

<main>
<article id="class" class="cardio">
         <section class="class">
             <div class="containerr">
                 <div class="row">
                     <div class="col-md-12">
                         <a href="{{ url('/') }}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                 </div>
                 <div class="col-md-12 mt-1">
                     <div class="card">
                         <div class="row">
                             <div class="col-md-6">
                                 {{-- <img src="{{ $barang-> gambar }}" class="rounded mx-auto d-block" width="100%" alt="">--}}
                             </div>
                             <div class="col-md-6 mt-5">
                                <div class="container">
                                    <h2>Edit Produk</h2>

                                    @if (session('success'))
                                        @alert(['type' => 'success'])
                                            {!! session('success') !!}
                                        @endalert
                                    @endif
                                    <form action="/manajemenproduk/{{$barang->id}}" method="POST" enctype="multipart/form-data">
                                        @method('patch')
                                        @csrf
                                      <div class="form-group">
                                        <label for="Name">Nama Produk:</label>
                                      <input type="text" class="form-control" id="nama_barang" placeholder="Enter Nama Produk" name="nama_barang" value="{{$barang->nama_barang}}">
                                        <p class="text-danger">{{ $errors->first('nama_barang') }}</p>
                                    </div>
                                      <div class="form-group">
                                        <label for="Harga">Harga:</label>
                                        <input type="number" class="form-control" id="harga" placeholder="Enter Harga" name="harga" value="{{$barang->harga}}">
                                        <p class="text-danger">{{ $errors->first('harga') }}</p>
                                      </div>
                                      <div class="form-group">
                                        <label for="Stok">Stok:</label>
                                        <input type="number" class="form-control" id="stok" placeholder="Enter Stok" name="stok" value="{{$barang->stok}}">
                                        <p class="text-danger">{{ $errors->first('stok') }}</p>
                                      </div>
                                      <div class="form-group">
                                        <label for="Keterangan">Keterangan:</label>
                                        <input type="text" class="form-control" id="Keterangan" placeholder="Enter Keterangan" name="keterangan" value="{{$barang->keterangan}}">
                                        <p class="text-danger">{{ $errors->first('keterangan') }}</p>
                                      </div>
                                      <div class="form-group">
                                        <label for="Gambar">Gambar:</label>
                                        <input type="file" class="form-control" id="gambar" placeholder="Enter Gambar" name="gambar" value="{{$barang->gambar}}">
                                        <p class="text-danger">{{ $errors->first('gambar') }}</p>
                                        @if (!empty($product->photo))
                                            <hr>
                                            <img src="{{ $barang-gambar }}"
                                                alt="{{ $barang->nama_barang }}"
                                                width="150px" height="150px">
                                        @endif
                                      </div>
                                      <button type="submit" class="btn btn-dark my-1">Update</button>
                                    </form>
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
