<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../src/css/halaman_beranda.css" />
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
        <a href="../logout.php">Log Out</a>
      </div>
    </header>
    <main>
      <section class="jumbotron">
        <div>
          <h1>SMKN 5 KOTA BEKASI</h1>
          <h2>Rekayasa Perangkat Lunak</h2>
        </div>
      </section>
      <section class="visi-misi">
        <div class="visi">
          <h1>Visi</h1>
          <p>
            Terwujudnya SMK berkualitas yang menghasilkan Sumber Daya Manusia
            (SDM) Unggul, Kompeten, Berkarakter, dan Berwawasan global
          </p>
        </div>
        <div class="misi">
          <h1>Misi</h1>
          <p>
            Membentuk peserta didik berprestasi pada bidang akademis dan non
            akademis.
          </p>
          <p>
            Membekali peserta didik memiliki daya saing dengan
            menumbuhkembangkan semangat keunggulan yang kreatif dan inovatif.
          </p>
          <p>
            Mengembangkan ilmu pengetahuan dan teknologi sesuai dengan bakat,
            minat dan potensi peserta didik.
          </p>
          <p>
            Menghasilkan tamatan yang mampu mengembangkan sistem informasi
            digital.
          </p>
          <p>
            Membekali peserta didik dengan multiskills abad 21 dan kompetensi
            yang tersertifikasi IDUKA (Institusi Dunia Usaha dan Dunia Kerja)
            dan lembaga sertifikasi profesi.
          </p>
          <p>
            Menumbuhkembangkan karakter religius, nasionalis, ilmiah, dan
            edukatif pada seluruh warga sekolah.
          </p>
          <p>
            Mengoptimalkan penguatan aspek softskills dengan jiwa disiplin,
            mandiri dan tanggungjawab sesuai dengan etos kerja.
          </p>
          <p>
            Menumbuhkembangkan budaya sekolah yang sehat, ramah, dan peduli
            lingkungan.
          </p>
          <p>
            Memperkuat kolaborasi dan komunikasi dengan IDUKA (Institusi Dunia
            Usaha dan Dunia Kerja) dalam hal Link and Match Kurikulum
            Pembelajaran, PKL (Praktek Kerja Lapangan), Teaching Factory, Kelas
            Industri, Recruitment Tenaga Kerja, Magang Guru, Guru Tamu, serta
            kerjasama lainnya yang saling menguntungkan.
          </p>
          <p>
            Menerapkan sistem manajemen mutu Sekolah Menengah Kejuruan yang
            distandarkan secara nasional dengan berbasis teknologi informasi.
          </p>
        </div>
      </section>
    </main>
    <footer>
      <p>2024 &copy; Copyright Rayhan Nurahman All Right Reserve</p>
    </footer>
  </body>
</html>
