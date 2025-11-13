<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas Gabungan PHP</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        label { display: inline-block; width: 150px; margin-bottom: 10px; }
        .output { margin-top: 20px; border: 2px solid #007bff; padding: 20px; background-color: #e9f5ff; width: 450px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Tugas: Hitung Umur dan Gaji Karyawan</h2>
    
    <form method="POST" action="">
        
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" required><br>

        <label for="pekerjaan">Pilih Pekerjaan:</label>
        <select id="pekerjaan" name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="programmer">Programmer</option>
            <option value="designer">Designer Grafis</option>
            <option value="manager">Manager</option>
            <option value="staf">Staf Administrasi</option>
        </select><br><br>

        <input type="submit" value="Tampilkan Hasil">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $nama = $_POST['nama'];
        $tgl_lahir_str = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];


        $tgl_lahir = new DateTime($tgl_lahir_str);
        $sekarang = new DateTime();
        $selisih = $sekarang->diff($tgl_lahir);
        $umur = $selisih->y; 


        $gaji = 0;
        $nama_pekerjaan = "";

        switch ($pekerjaan) {
            case "programmer":
                $gaji = 8000000;
                $nama_pekerjaan = "Programmer";
                break;
            case "designer":
                $gaji = 6500000;
                $nama_pekerjaan = "Designer Grafis";
                break;
            case "manager":
                $gaji = 12000000;
                $nama_pekerjaan = "Manager";
                break;
            case "staf":
                $gaji = 4500000;
                $nama_pekerjaan = "Staf Administrasi";
                break;
            default:
                $gaji = 0;
                $nama_pekerjaan = "Pekerjaan Tidak Diketahui";
                break;
        }

        $gaji_rupiah = "Rp " . number_format($gaji, 0, ',', '.');
        
        echo '<div class="output">';
        echo '<h2>Hasil Data Karyawan</h2>';
        echo '<p><strong>Nama Lengkap:</strong> ' . $nama . '</p>';
        echo '<p><strong>Umur:</strong> ' . $umur . ' Tahun</p>';
        echo '<hr>';
        echo '<p><strong>Pekerjaan:</strong> ' . $nama_pekerjaan . '</p>';
        echo '<p class="gaji"><strong>Gaji Pokok:</strong> ' . $gaji_rupiah . '</p>';
        echo '</div>';
    }
    ?>

</body>
</html>