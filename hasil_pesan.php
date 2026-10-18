<?php
if (!isset($_POST['kirim'])) {
    header("Location: form_pesan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Berhasil Dikirim</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .card { border: 1px solid #ddd; padding: 20px; border-radius: 8px; max-width: 500px; margin: auto; background-color: #f9f9f9; }
        .btn { padding: 8px 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; display: inline-block; margin-top: 20px;}
    </style>
</head>
<body>

    <div class="card">
        <h2>Pesan Berhasil Dikirim</h2>
        <p>Terima kasih, <strong><?= $_POST['nama']; ?></strong></p>
        <p><strong>Nama:</strong> <?= $_POST['nama']; ?></p>
        <p><strong>Kelas:</strong> <?= $_POST['kelas']; ?></p>
        <p><strong>Pesan / Kesan:</strong> <?= $_POST['pesan']; ?></p>

        <a href="index.php" class="btn">Kembali ke Data Mahasiswa</a>
    </div>

</body>
</html>