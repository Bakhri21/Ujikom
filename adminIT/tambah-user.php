<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../src/css/tambah-user.css" />
  <title>Tambah User</title>
</head>

<body>
  <?php
  if (isset($_GET['penambahandata']) && isset($_GET["akun"])) {
    if ($_GET['penambahandata'] == "berhasil") {
      echo "<div class='alert-succes'>Data " . $_GET["akun"] . " " . $_GET["penambahandata"] . " ditambahkan !</div>";
    }
  }
  if (isset($_GET['penambahandata']) && isset($_GET["akun"])) {
    if ($_GET['penambahandata'] == "gagal") {
      echo "<div class='alert-failed'>Data " . $_GET["akun"] . " " . $_GET["penambahandata"] . " ditambahkan !</div>";
    }
  }
  ?>
  <main>
    <button class="siswa" type="button" id="siswa" onclick="SiswaAdd()">
      Tambah Siswa
    </button>
    <button class="guru" type="button" onclick="GuruAdd()">
      Tambah Guru
    </button>
    <button class="orang-tua" type="button" onclick="OrtuAdd()">
      Tambah Orang Tua
    </button>
    <button class="staff" type="button" onclick="StaffAdd()">
      Tambah Staff
    </button>
    <button class="admin" type="button" onclick="AdminAdd()">
      Tambah Admin Sekolah
    </button>

    <section class="form-add-user-siswa" id="addSiswa">
      <form action="sistem_tambah_siswa.php" method="post">
        <label for="NIS">NIS</label>
        <input type="text" name="nis" id="NIS" required />
        <label for="Nama">Nama</label>
        <input type="text" name="nama" id="Nama" required />
        <label for="Password">Password</label>
        <input type="password" name="password" id="Password" required />
        <label for="kelas">Kelas</label>
        <select name="kelas" id="kelas" required>
          <option value="siswa">XII RPL 1</option>
          <option value="XIIRPL2">XII RPL 2</option>
          <option value="XIIRPL3">XII RPL 3</option>
        </select>
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" required />
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required />
        <label for="jk">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jk" required>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        <label for="agama">Agama</label>
        <select name="agama" id="agama" required>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Katolik">Katolik</option>
          <option value="Konghucu">Konghucu</option>
        </select>
        <label for="Alamat">Alamat</label>
        <textarea name="alamat" id="Alamat" rows="5"></textarea>
        <label for="Nama-ayah">Nama Ayah</label>
        <input type="text" name="nama_ayah" id="Nama-ayah" />
        <label for="Nama-ibu">Nama Ibu</label>
        <input type="text" name="nama_ibu" id="Nama-ibu" />
        <div>
          <button class="tambah-btn" type="submit">Tambah</button>
          <button class="tutup-form" type="button" onclick="tutupFormUser()">
            Tutup
          </button>
        </div>
      </form>
    </section>
    <section class="form-add-user-siswa" id="addGuru">
      <form action="sistem_tambah_guru.php" method="post">
        <label for="NIP">NIP</label>
        <input type="text" name="nip" id="NIP" required />
        <label for="Nama">Nama</label>
        <input type="text" name="nama" id="Nama" required />
        <label for="Password">Password</label>
        <input type="password" name="password" id="Password" required />
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" required />
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required />
        <label for="jk">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jk" required>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        <label for="Perguruan_Tinggi">Perguruan Tinggi</label>
        <input type="text" name="perguruan_tinggi" id="Perguruan_Tinggi" required />
        <label for="agama">Agama</label>
        <select name="agama" id="agama" required>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Katolik">Katolik</option>
          <option value="Konghucu">Konghucu</option>
        </select>
        <label for="Alamat">Alamat</label>
        <textarea name="alamat" id="Alamat" rows="5"></textarea>
        <div>
          <button class="tambah-btn" type="submit">Tambah</button>
          <button class="tutup-form" type="button" onclick="tutupFormUser()">
            Tutup
          </button>
        </div>
      </form>
    </section>
    <section class="form-add-user-siswa" id="addOrtu">
      <form action="tambah_user_ortu.php">
        <label for="ID_ORTU">ID</label>
        <input type="text" name="ID_ORTU" id="ID_ORTU" required />
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" id="Nama" required />
        <label for="Password">Password</label>
        <input type="password" name="password" id="Password" required />
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" required />
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required />
        <label for="Pendidikan_Terakhir">Pendidikan Terakhir</label>
        <select type="text" name="pendidikan_terakhir" id="Pendidikan_Terakhir" required>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA">SMA</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
        </select>
        <label for="jk">Jenis Kelamin</label>
        <select name="Jenis-Kelamin" id="jk" required>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        <label for="agama">Agama</label>
        <select name="Agama" id="agama" required>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Katolik">Katolik</option>
          <option value="Konghucu">Konghucu</option>
        </select>
        <label for="Alamat">Alamat</label>
        <textarea name="Alamat" id="Alamat" rows="5"></textarea>
        <div>
          <button class="tambah-btn" type="submit">Tambah</button>
          <button class="tutup-form" type="button" onclick="tutupFormUser()">
            Tutup
          </button>
        </div>
      </form>
    </section>
    <section class="form-add-user-siswa" id="addStaff">
      <form action="tambah_user_staff.php">
        <label for="ID_STAFF">ID</label>
        <input type="text" name="ID_STAFF" id="ID_STAFF" required />
        <label for="Nama">Username</label>
        <input type="text" name="Nama" id="Nama" required />
        <div>
          <button class="tambah-btn" type="submit">Tambah</button>
          <button class="tutup-form" type="button" onclick="tutupFormUser()">
            Tutup
          </button>
        </div>
      </form>
    </section>
    <section class="form-add-user-siswa" id="addAdmin">
      <form action="tambah_user_admin.php">
        <label for="ID_ADMIN">ID</label>
        <input type="text" name="ID_ADMIN" id="ID_ADMIN" required />
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" id="Nama" required />
        <label for="Password">Password</label>
        <input type="password" name="password" id="Password" required />
        <div>
          <button class="tambah-btn" type="submit">Tambah</button>
          <button class="tutup-form" type="button" onclick="tutupFormUser()">
            Tutup
          </button>
        </div>
      </form>
    </section>
  </main>
  <script>
    function SiswaAdd() {
      var formAddUser = document.getElementById("addSiswa");
      formAddUser.style.transform = "scaleY(1)";
    }

    function GuruAdd() {
      var formAddUser = document.getElementById("addGuru");
      formAddUser.style.transform = "scaleY(1)";
    }

    function OrtuAdd() {
      var formAddUser = document.getElementById("addOrtu");
      formAddUser.style.transform = "scaleY(1)";
    }

    function StaffAdd() {
      var formAddUser = document.getElementById("addStaff");
      formAddUser.style.transform = "scaleY(1)";
    }

    function AdminAdd() {
      var formAddUser = document.getElementById("addAdmin");
      formAddUser.style.transform = "scaleY(1)";
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