<?php
require "koneksi.php";
$sql    = "SELECT id, nim, nama, program_studi, email FROM mahasiswa ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Daftar data mahasiswa - Web Programming 1">
  <title>Data Mahasiswa | Web Programming 1</title>
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
    <a href="data_mahasiswa.php" class="active">Data Mahasiswa</a>
    <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
  </nav>
  <main>
    <section>
      <h2>Daftar Mahasiswa</h2>

      <?php if (isset($_GET["status"]) && $_GET["status"] === "sukses"): ?>
        <p class="alert-sukses">&#10003; Data berhasil ditambahkan.</p>
      <?php endif; ?>

      <table class="data-table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          if ($result && $result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
          ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row["nim"]); ?></td>
            <td><?= htmlspecialchars($row["nama"]); ?></td>
            <td><?= htmlspecialchars($row["program_studi"]); ?></td>
            <td><?= htmlspecialchars($row["email"]); ?></td>
          </tr>
          <?php
            endwhile;
          else:
          ?>
          <tr>
            <td colspan="5" style="text-align:center; color:#888;">Belum ada data mahasiswa.</td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>

      <p style="margin-top:16px;">
        <a href="form_mahasiswa.php">+ Tambah Mahasiswa Baru</a>
      </p>
    </section>
  </main>
  <footer>
    <p>Web Programming 1</p>
  </footer>
</body>
</html>
<?php $conn->close(); ?>
