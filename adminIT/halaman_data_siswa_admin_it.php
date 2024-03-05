<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../src/css/halaman_data_siswa.css" />
  <title>Sistem Informasi Jurusan | Rekayasa Perangkat Lunak</title>
</head>

<body>
  <?php
  session_start();

  if (!isset($_SESSION['login_admin_it']) || $_SESSION['login_admin_it'] !== true || $_SESSION['login_admin_it'] == "") {
    header("location:login_admin_it.php?pesan=gagal");
  }
  ?>

  <header>
    <div class="Text-title">
      <h1>Rekayasa Perangkat Lunak</h1>
    </div>
    <nav class="Menu">
      <a href="halaman_admin_it.php">Beranda</a>
      <a href="halaman_data_siswa_admin_it.php">Data Siswa</a>
      <a href="halaman_data_guru_admin_it.php">Data Guru</a>
    </nav>
    <div class="Action">
      <a class="tambah-user-btn" href="tambah-user.html">Tambah User</a>
      <a class="logout" href="../logout.php">Log Out</a>
    </div>
  </header>
  <main>
    <section class="informasi">
      <h1>Data siswa siswi SMKN 5 KOTA BEKASI</h1>
      <h2>Rekayasa Perangkat Lunak</h2>
    </section>
    <section class="menu-kelas">
      <h2>Pilih Kelas</h2>
      <div>
        <button type="button" onclick="showXIIRPL1()">XII RPL 1</button>
        <button type="button" onclick="showXIIRPL2()">XII RPL 2</button>
        <button type="button" onclick="showXIIRPL3()">XII RPL 3</button>
      </div>
    </section>
    <section class="data-siswa" id="xiirpl1">
      <nav class="tambah-data">
        <button class="tambah-data-siswa" id="addDataSiswa">
          Tambah Data
        </button>
      </nav>
      <?php
      include "../koneksi.php";

      $sql = "SELECT * FROM siswa";
      $result = $conn->query($sql);

      if ($result->num_rows > 0)
      ?>
      <table>
        <thead>
          <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>PWEB</th>
            <th>PKK</th>
            <th>BASIS DATA</th>
            <th>PBO</th>
            <th>EDIT</th>
            <th>HAPUS</th>
          </tr>
        </thead>
        <tbody>
          <?php
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["nis"] . "</td>";
          echo "<td>" . $row["nama"] . "</td>";
          echo "<td>" . $row['kelas'] . "</td>";
          echo "<td>" . $row["pweb"] . "</td>";
          echo "<td>" . $row["pkk"] . "</td>";
          echo "<td>" . $row["basis_data"] . "</td>";
          echo "<td>" . $row["pbo"] . "</td>";
          echo "<td><button class='edit-button' type='button' onclick='showEditForm(\"" . $row["nis"] . "\", \"" . $row["nama"] . "\", \"" . $row["kelas"] . "\", \"" . $row["pweb"] . "\", \"" . $row["pkk"] . "\", \"" . $row["basis_data"] . "\", \"" . $row["pbo"] . "\")'>Edit</button></td>";
          echo "<td><a href='hapus_data_siswa.php?nis=" . $row['nis'] . "&kelas=" . $row['kelas'] . "'>Hapus</a></td>";
          echo "<tr>";
        }
          ?>
        </tbody>
      </table>
    </section>
    <section class="form-add-user-siswa" id="addSiswa">
      <form action="sistem_edit_siswa.php" method="post">
        <label for="NIS">NIS</label>
        <input type="text" name="nis" id="NIS" required />
        <label for="Nama">Nama</label>
        <input type="text" name="nama" id="Nama" required />
        <label for="kelas">Kelas</label>
        <select name="kelas" id="Kelas" required>
          <option value="siswa">XII RPL 1</option>
          <option value="siswa2">XII RPL 2</option>
          <option value="siswa3">XII RPL 3</option>
        </select>
        <label for="PWEB">PWEB</label>
        <input type="number" name="pweb" id="PWEB" required />
        <label for="PKK">PKK</label>
        <input type="number" name="pkk" id="PKK" required />
        <label for="Basis_Data">Basis Data</label>
        <input type="number" name="basis_data" id="Basis_Data" required />
        <label for="PBO">PBO</label>
        <input type="number" name="pbo" id="PBO" required />
        <div>
          <button class="tambah-btn" type="submit">Tambah</button>
          <button class="tutup-form" type="button" onclick="tutupFormUser()">
            Tutup
          </button>
        </div>
      </form>
    </section>
    <section class="data-siswa" id="xiirpl2">
      <nav class="tambah-data">
        <button class="tambah-data-siswa" id="addDataSiswa">
          Tambah Data
        </button>
      </nav>
      <table>
        <thead>
          <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>PWEB</th>
            <th>PKK</th>
            <th>BASIS DATA</th>
            <th>PBO</th>
            <th>EDIT</th>
            <th>HAPUS</th>
          </tr>
        </thead>
        <tbody>
          <td>212210028</td>
          <td>Rayhan</td>
          <td>XII RPL 1</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>Edit</td>
          <td>Hapus</td>
        </tbody>
      </table>
    </section>
    <section class="data-siswa" id="xiirpl3">
      <nav class="tambah-data">
        <button class="tambah-data-siswa" id="addDataSiswa">
          Tambah Data
        </button>
      </nav>
      <table>
        <thead>
          <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>PWEB</th>
            <th>PKK</th>
            <th>BASIS DATA</th>
            <th>PBO</th>
            <th>EDIT</th>
            <th>HAPUS</th>
          </tr>
        </thead>
        <tbody>
          <td>212210028</td>
          <td>Rayhan21</td>
          <td>XII RPL 1</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>Edit</td>
          <td>Hapus</td>
        </tbody>
      </table>
    </section>
  </main>
  <footer>
    <p>2024 &copy; Copyright Rayhan Nurahman All Right Reserve</p>
  </footer>
  <script>
    function showXIIRPL1() {
      var xiirpl1 = document.getElementById("xiirpl1");
      var xiirpl2 = document.getElementById("xiirpl2");
      var xiirpl3 = document.getElementById("xiirpl3");

      xiirpl1.style.display = "flex";
      xiirpl2.style.display = "none";
      xiirpl3.style.display = "none";
    }

    function showXIIRPL2() {
      var xiirpl1 = document.getElementById("xiirpl1");
      var xiirpl2 = document.getElementById("xiirpl2");
      var xiirpl3 = document.getElementById("xiirpl3");

      xiirpl1.style.display = "none";
      xiirpl2.style.display = "flex";
      xiirpl3.style.display = "none";
    }

    function showXIIRPL3() {
      var xiirpl1 = document.getElementById("xiirpl1");
      var xiirpl2 = document.getElementById("xiirpl2");
      var xiirpl3 = document.getElementById("xiirpl3");

      xiirpl1.style.display = "none";
      xiirpl2.style.display = "none";
      xiirpl3.style.display = "flex";
    }

    function showEditForm(nis, nama, kelas, pweb, pkk, basis_data, pbo) {
      document.getElementById("addSiswa").style.transform = "scaleY(1)";
      document.getElementById("NIS").value = nis;
      document.getElementById("Nama").value = nama;
      document.getElementById("Kelas").value = kelas;
      document.getElementById("PWEB").value = pweb;
      document.getElementById("PKK").value = pkk;
      document.getElementById("Basis_Data").value = basis_data;
      document.getElementById("PBO").value = pbo;
    }


    function tutupFormUser() {
      var formAddSiswa = document.getElementById("addSiswa");
      var formAddGuru = document.getElementById("addGuru");
      var formAddOrtu = document.getElementById("addOrtu");
      var formAddStaff = document.getElementById("addStaff");
      var formAddAdmin = document.getElementById("addAdmin");
      formAddSiswa.style.transform = "scaleY(0)";
      formAddGuru.style.transform = "scaleY(0)";
      formAddOrtu.style.transform = "scaleY(0)";
      formAddStaff.style.transform = "scaleY(0)";
      formAddAdmin.style.transform = "scaleY(0)";
    }
  </script>
</body>

</html>