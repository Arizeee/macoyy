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
        <li><img src="/image/Kazuha.jpg" alt="profileImg"></li>
        <li><iconify-icon icon="ant-design:setting-filled"></iconify-icon></li>
      </ul>
    </div>
    <div class="contain-4">
            <div class="card">
                <form action="/updategame/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    <table id="tbl-card">
                        @csrf
                            <tr>
                                <td>Foto</td>
                                <td><input type="file" name="foto" required="required"  value="{{ $data->foto}}" class="foto" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Game</td>
                                <td><input type="text" name="name" required="required" value="{{ $data->nama_game}}" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Versi</td>
                                <td><input type="text" name="username" required="required" value="{{ $data->versi_game}}" style="width: 250px;"></td>
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