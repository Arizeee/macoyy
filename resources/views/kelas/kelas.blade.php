@extends('layouts.dashboardhead')
@section('content')
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-book-open' style='color:#ffffff' ></i>
      <span class="logo_name">Komunikasi Siswa</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/dashboard" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/siswa">
            <i class='bx bx-box' ></i>
            <span class="links_name">Siswa</span>
          </a>
        </li>
        <li>
          <a href="/guru">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Guru</span>
          </a>
        </li>
        <li>
          <a href="/kelas">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Kelas</span>
          </a>
        </li>
        <li>
          <a href="/pelanggaran">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Pelanggaran</span>
          </a>
        </li>
        <li>
          <a href="/kasus">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Kasus</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Kelas</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Admin</span>
        <a href="/logout"><i class='bx bx-log-out'></i></a>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Siswa</div>
            <div class="number">40</div>
            <div class="indicator">
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Guru</div>
            <div class="number">38</div>
            <div class="indicator">
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Kelas</div>
            <div class="number">12</div>
            <div class="indicator">
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Pelanggaran</div>
            <div class="number">120</div>
            <div class="indicator">
            </div>
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Data Kelas</div>
          <a href="/kelas/tambahkelas"  class="btn btn-success mt-2 mb-2">Tambah</a>
            <div class="table-sect">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kelas & Jurusan</th>
                            <th>Wali Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $rows)
                        <tr>
                        <td>{{ $rows->id }}</td>
                        <td>{{ $rows->kelas_jurusan }}</td>
                        <td>{{ $rows-> guru -> nama_guru ?? 'bisa' }}</td>
                        <td>
                        <a href="/editkelas/{{ $rows->id }}" class="btn btn-success"><i class='bx bxs-edit'></i></a>
                        <a href="/hapuskelas/{{ $rows->id }}" class="btn btn-danger"><i class='bx bx-trash-alt' ></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>    
    </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

@endsection