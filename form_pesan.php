<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .card { border: 1px solid #ddd; padding: 20px; border-radius: 8px; max-width: 500px; margin: auto; background-color: #f9f9f9; }
        input[type="text"], select, textarea { width: 100%; padding: 8px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn { padding: 8px 16px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 4px; }
        .btn-kembali { background-color: #6c757d; text-decoration: none; padding: 8px 16px; color: white; border-radius: 4px; margin-left: 10px; display: inline-block;}
    </style>
</head>
<body>

    <div class="card">
        <h2>Form Pesan Mahasiswa</h2>
        
        <!-- 5. form untuk post -->
        <form action="hasil_pesan.php" method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="pesan">Pesan / Kesan</label>
            <textarea id="pesan" name="pesan" rows="4" required></textarea>

            <button type="submit" name="kirim" class="btn">Kirim</button>
            <a href="index.php" class="btn-kembali">Kembali</a>
        </form>
    </div>

</body>
</html>