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
            <a class="nav-link" href="{{url('/beranda')}}">Home</a>
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




<article id="class" class="cards">
    <section class="class">

    <h2>Manajemen Produk</h2>
        <div class="container">
            <a href="{{ url('/manajemenproduk/tambahproduk') }}" class="btn btn-dark my-1"> Tambah</a>
        <br>
        <table class="table table-light">
            <thead>
                <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Keterangan</th>
                        <th>Last Update</th>
                        <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($barang as $row)
            @php
                $path = Storage::url('Digimoru/gambar/'.$row->gambar);
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                    <td>
                    @if (!empty($row->gambar))
                    <img src="{{ url($path) }}"
                    alt="{{ $row->nama_barang }}" width="50px" height="50px">
                    @else
                        <img src="http://via.placeholder.com/50x50" alt="{{ $row->nama_barang }}">
                    @endif
                </>
                    <td>{{ ucfirst($row->nama_barang) }}</td>
                    <td>Rp {{ number_format($row->harga) }}</td>
                    <td>{{ $row->stok }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>{{ $row->updated_at }}</td>
                    <td>
                    <a href="/manajemenproduk/editproduk/{{$row->id}}"
                            class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                    <form action="/manajemenproduk/{{ $row->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
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
