@extends('layouts.template')

@section('title')

@section('content')
<div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Player Table</span>
      <input id="inp" type="text" placeholder="Search..." style="width: 55%; height: 30px;">
    </div>
    <div class="topright">
      <ul>
        <li>Kazuhaaa</li>
        <li><img src="image/Kazuha.jpg" alt="profileImg"></li>
        <li><iconify-icon icon="ant-design:setting-filled"></iconify-icon></li>
      </ul>
    </div>
    <div class="contain-4">
            <div class="card">
                <form action="/insertpemain" method="POST" enctype="multipart/form-data">
                    <table id="tbl-card">
                        @csrf
                            <tr>
                                <td>Foto</td>
                                <td><input type="file" name="foto" required="required" class="foto" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="name" required="required" placeholder="Nama" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" required="required" placeholder="Username" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="keterangan" required="required" placeholder="keterangan" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="ara" type="submit"><p>Save</p></button>
                                </td>
                            </tr>
                    </table>
                </form>
            </div>
       </div>
@endsection