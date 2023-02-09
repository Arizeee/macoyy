@extends('layouts.template')

@section('title')

@section('content')
<div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Game Table</Table></span>
      <form action="" method="get">
    </div>
    <div class="topright">
      <ul>
        <li>Kazuhaaa</li>
        <li><img src="image/Kazuha.jpg" alt="profileImg"></li>
        <li><iconify-icon icon="ant-design:setting-filled"></iconify-icon></li>
      </ul>
    </div>
    <div class="contain-3">
        <div class="btncont">
          <div class="btn-data">
              <p><a href="/tambahgame">+ Tambah</a></p>
            </div>
            <div class="btn-data-1">
              <input id="inp" type="search" placeholder="Search..." name="search" style="width: 25%; height: 30px; margin-left:75%;">
            </div>
            </form>
        <table id="tbl-1">
         <tr>
            <th scope="col" style="width: 2px;">Id</th>
            <th scope="col">Foto</th>
            <th scope="col">Game</th>
            <th scope="col">Versi</th>
            <th scope="col">Di buat</th>
            <th scope="col" style="border-top-right-radius: 30px;">Aksi</th>
         </tr>
         <tr>
         @php
              $no = 1;
            @endphp
            @foreach ($data as $g)
            <td>{{ $no++ }}</td>
           <td>
             <img src="{{'fotopemain/'.$g->foto}}" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
           </td>
           <td>{{$g->nama_game}}</td>
           <td>{{$g->versi_game}}</td>
           <td>{{ $g->created_at->format('D M Y') }}</td> 
            <td> 
                <button class="btn-1" style="margin-right:-20px;"> <a href='/tampilgame/{{ $g->id }}' ><iconify-icon icon="material-symbols:edit-square-outline"></iconify-icon></a></button>
                <button  class="btn-2" style="margin-left: -20px;"> <a href='/deletegame/{{ $g->id }}'><iconify-icon icon="uil:trash"></iconify-icon></a></button>
            </td>
         </tr>
         @endforeach
        </table>
{{$data->links('pagination::bootstrap-4 ')}}
</div>

{{-- {{ $data->$games->count('nama_game') }} --}}
@endsection


 