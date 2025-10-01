<?php
// biodata.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = $_POST['nama'] ?? '';
    $nim    = $_POST['nim'] ?? '';
    $prodi  = $_POST['prodi'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $hobi   = $_POST['hobi'] ?? [];
    $alamat = $_POST['alamat'] ?? '';

    echo "<div style='font-family:Arial; padding:20px; background:linear-gradient(135deg,#a18cd1,#fbc2eb); border-radius:15px; width:60%; margin:20px auto; color:#333;'>";
    echo "<h2 style='text-align:center;'>Data Biodata yang Dikirim</h2>";
    echo "<p><b>Nama:</b> $nama</p>";
    echo "<p><b>NIM:</b> $nim</p>";
    echo "<p><b>Program Studi:</b> $prodi</p>";
    echo "<p><b>Gender:</b> $gender</p>";
    echo "<p><b>Hobi:</b> " . implode(", ", $hobi) . "</p>";
    echo "<p><b>Alamat:</b> $alamat</p>";
    echo "</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Biodata - Dzikri Mardhani</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #fad0c4, #fad0c4);
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 50%;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0,0,0,0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a0572;
        }

        input[type="text"], 
        select, 
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .gender-hobi {
            margin: 10px 0;
        }

        .gender-hobi label {
            font-weight: normal;
            margin-right: 15px;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(45deg, #ff758c, #ff7eb3);
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
        }

        .submit-btn:hover {
            background: linear-gradient(45deg, #e84393, #d63031);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Biodata</h2>
        <form method="post">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" required>

            <label>NIM</label>
            <input type="text" name="nim" placeholder="NIM" required>

            <label>Program Studi</label>
            <select name="prodi" required>
                <option value="">-- Pilih Program Studi --</option>
                <option value="Informatika">Informatika</option>
                <option value="Statistika">Statistika</option>
                <option value="Mesin">Mesin</option>
            </select>

            <label>Gender</label>
            <div class="gender-hobi">
                <label><input type="radio" name="gender" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="gender" value="Perempuan"> Perempuan</label>
            </div>

            <label>Hobi</label>
            <div class="gender-hobi">
                <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
                <label><input type="checkbox" name="hobi[]" value="Menulis"> Menulis</label>
                <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
            </div>

            <label>Alamat</label>
            <textarea name="alamat" placeholder="Alamat lengkap..." required></textarea>

            <button type="submit" class="submit-btn">Kirim</button>
        </form>
    </div>
</body>
</html>
