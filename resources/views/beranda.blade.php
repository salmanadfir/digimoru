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
            <li>
                <form action="/beranda/cari" method="get">
                    {{-- <input type = "text" name ="cari" class="search" placeholder="Search" value="{{old('cari')}}">
                    <button type="submit" class="btn btn-danger">Cari</button> --}}
                    <div class="input-group mb-3">
                        <input style="border-radius: 10px 0 0 10px;" type="text" name="cari" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button style="border-radius: 0 10px 10px 0;" class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </li>
            <li class="activate"><a style="text-decoration: none;" href="{{ url('/manajemenproduk') }}">Sell Now</a></li>
            <li class="active"><a style="text-decoration: none;" href="{{ route('logout') }}">Logout</a></li>
         </ul>
      </div>
   </nav>
</header>

<main>

   <article id="class" class="cards">
    <section class="class">
       <div class="containerr">
          <h2>Want to know more about Digimoru?<br>
            check this out!</h2>
       </div>
    </section>
 </article>
 {{-- <article id="class" class="cardio">
    <section class="class"> --}}
        <div class="container">
            <div class="row">
               @foreach ($barang as $brg)
               @php
                   $path = Storage::url('Digimoru/gambar/'.$brg->gambar);
               @endphp
               <div class="col-md-4">
                <div class="card mx-auto my-4" style="width: 14rem;">
                    <img class="images w-75 h-75 my-2 mx-auto" src="{{url($path)}}" alt="{{$brg->nama_barang}}">
                    <div class="card-body">
                      <h5 style="font-size: 16px;" class="card-title">{{ $brg->nama_barang }}</h5>
                    <p style="font-size: 12px;" class="card-text">Rp. {{ number_format ($brg->harga) }}</p>
                    <a href="/beranda/detail/{{ $brg->id }}" class="btn btn-primary">Detail Barang</a>
                    </div>
                  </div>
               </div>
               @endforeach
            </div>
           </div>

           {{ $barang->links() }}

       {{-- </div>
    </section>
 </article> --}}


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
