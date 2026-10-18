<?php
// data aray
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "andi@upi.edu",
        "nilai" => 88
    ],
    [
        "nim" => "25002",
        "nama" => "Budi Santoso",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "budi@upi.edu",
        "nilai" => 76
    ],
    [
        "nim" => "25003",
        "nama" => "Citra Lestari",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "citra@upi.edu",
        "nilai" => 67
    ],
    [
        "nim" => "25004",
        "nama" => "Dina Maharani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "dina@upi.edu",
        "nilai" => 92
    ],
    [
        "nim" => "25005",
        "nama" => "Eko Saputra",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "eko@upi.edu",
        "nilai" => 56
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Website PHP Dasar</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        .lulus { color: green; font-weight: bold; }
        .tidak-lulus { color: red; font-weight: bold; }
        .btn { padding: 8px 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        .btn-top { float: right; margin-bottom: 20px; }
    </style>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>
    <p>Mini Website PHP Dasar</p>
    
    <a href="form_pesan.php" class="btn btn-top">Isi Form Pesan</a>
    <div style="clear: both;"></div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <!-- 2. if else foreach -->
            <?php foreach ($mahasiswa as $data): ?>
                
                <!-- 3. if else -->
                <?php
                $nilai = $data["nilai"];
                if ($nilai >= 85) {
                    $grade = "A";
                    $status = "Lulus";
                    $class_status = "lulus";
                } elseif ($nilai >= 75) {
                    $grade = "B";
                    $status = "Lulus";
                    $class_status = "lulus";
                } elseif ($nilai >= 60) {
                    $grade = "C";
                    $status = "Tidak Lulus";
                    $class_status = "tidak-lulus";
                } else {
                    $grade = "D";
                    $status = "Tidak Lulus";
                    $class_status = "tidak-lulus";
                }
                
                // susunan data
                $url_get = "detail.php?nim=" . $data['nim'] . "&nama=" . urlencode($data['nama']) . "&jurusan=" . urlencode($data['jurusan']) . "&email=" . $data['email'] . "&nilai=" . $nilai . "&grade=" . $grade . "&status=" . urlencode($status);
                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data["nim"]; ?></td>
                    <td><?= $data["nama"]; ?></td>
                    <td><?= $data["jurusan"]; ?></td>
                    <td><?= $nilai; ?></td>
                    <td><?= $grade; ?></td>
                    <td class="<?= $class_status ?>"><?= $status; ?></td>
                    <!-- 4. mengirim untuk get -->
                    <td><a href="<?= $url_get ?>" class="btn">Lihat Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>