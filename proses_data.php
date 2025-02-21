<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url(night.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            justify-content: center;
            align-items: center;

        }
        .container {
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 20px;
            width: 350px;
            text-align: left;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .data {
            display: grid;
            grid-template-columns: 120px auto;
            gap: 5px;
            font-size: 16px;
        }
        .label {
            text-align: right;
            font-weight: bold;
            color: white;
        }
        .value {
            color: #222;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pengguna</h2>
        <div class="data">
            <?php
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : null; 
            $day = $_POST['day'];
            $month = $_POST['month'];
            $years = $_POST['years'];
            $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : "Tidak Memiliki Hobi";

            echo "<div class='label'>Nama:</div> <div class='value'>$nama</div>";
            echo "<div class='label'>Kelas:</div> <div class='value'>$kelas</div>";
            
            if ($jenis_kelamin) {
                $jk_display = ($jenis_kelamin == "laki-laki") ? "Laki-Laki" : "Perempuan";
                echo "<div class='label'>Jenis Kelamin:</div> <div class='value'>$jk_display</div>";
            } else {
                echo "<div class='label'>Jenis Kelamin:</div> <div class='value'>Tidak Dipilih</div>";
            }

            echo "<div class='label'>Tanggal Lahir:</div> <div class='value'>$day-$month-$years</div>";
            echo "<div class='label'>Hobi:</div> <div class='value'>$hobi</div>";
            ?>
        </div>
    </div>
</body>
</html>

</html>