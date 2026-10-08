<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Form tambah data mahasiswa - Web Programming 1">
  <title>Tambah Mahasiswa | Web Programming 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Web Programming 1</h1>
    <p>Praktikum Pemrograman Web</p>
  </header>
  <nav>
    <a href="index.html">Biodata</a>
    <a href="layout.html">Layout Lab</a>
    <a href="data_mahasiswa.php">Data Mahasiswa</a>
    <a href="form_mahasiswa.php" class="active">Tambah Mahasiswa</a>
  </nav>
  <main>
    <section>
      <h2>Form Data Mahasiswa</h2>
      <form action="proses_tambah.php" method="POST" class="student-form">
        <label for="nim">NIM</label>
        <input id="nim" name="nim" type="text" placeholder="Contoh: 230001" required>

        <label for="nama">Nama</label>
        <input id="nama" name="nama" type="text" placeholder="Nama lengkap mahasiswa" required>

        <label for="program_studi">Program Studi</label>
        <input id="program_studi" name="program_studi" type="text" placeholder="Contoh: Informatika" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="contoh@email.com" required>

        <button type="submit">Simpan Data</button>
      </form>
    </section>
  </main>
  <footer>
    <p>Web Programming 1</p>
  </footer>
</body>
</html>
