<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dasbor </title>
    <link rel="stylesheet" href="assets/css/dashstyle.css">
    <!-- Boxiocns CDN Link -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <iconify-icon icon="bx:joystick" style="scale: 180%; padding: 30px; color: white;"></iconify-icon>
      <span class="logo_name">Mabar Coyy</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="indexx.html">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <!-- <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Data Pemain</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Data Pemain</a></li>
          <li><a href="#">Valorant</a></li>
          <li><a href="#">Genshin Impact</a></li>
          <li><a href="#">PUBG</a></li>
          <li><a href="#">Fall Guys</a></li>
          <li><a href="#"></a></li>
        </ul>
      </li> -->
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Tables</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Tables</a></li>
          <li><a href="datapemain.html">Table Pemain</a></li>
          <li><a href="#">Table Game</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <!-- <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li> -->
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/Kazuha.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Kazuhaaa</div>
        <div class="job">Admin</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
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
                <form action="" method="POST" enctype="multipart/form-data">
                    <table id="tbl-card">
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
  </section>

  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="script.js"></script>

</body>
</html>
