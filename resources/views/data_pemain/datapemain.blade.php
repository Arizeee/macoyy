@extends('layouts.template')

@section('title')

@section('content')
<div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Player Table</Table></span>
      <form action="">
      </form>
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
              <p><a href="/tambahpemain">+ Tambah</a></p>
            </div>
            <div class="btn-data-1">
              <form action="">
              <input id="inp" type="search" placeholder="Search..." name="search" style="width: 25%; height: 30px; margin-left:75%;">
              </form>
            </div>
        <table id="tbl-1">
         <tr>
            <th scope="col" style="width: 2px;">Id</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Di buat</th>
            <th scope="col" style="border-top-right-radius: 30px;">Aksi</th>
         </tr>
         <tr>
         @php
              $no = 1;
            @endphp
            @foreach ($data as $d)
            <td>{{ $no++ }}</td>
            <td>
            <img src="{{'fotopemain/'. $d->foto }}" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
            </td>
            <td>{{$d->name}}</td>
            <td>{{$d->username}}</td>
            <td>{{$d->keterangan}}</td>
            <td>{{ $d->created_at->format('D M Y') }}</td>
            <td> 
                <button class="btn-1" style="margin-right:-20px;"> <a href='/tampilkandata/{{ $d->id }}' ><iconify-icon icon="material-symbols:edit-square-outline"></iconify-icon></a></button>
                <button  class="btn-2" style="margin-left: -20px;"> <a href='/deletedata/{{ $d->id }}'><iconify-icon icon="uil:trash"></iconify-icon></a></button>
            </td>
            </tr>
            @endforeach
        </table>
{{$data->links('pagination::bootstrap-4 ')}}
</div>
@endsection


 