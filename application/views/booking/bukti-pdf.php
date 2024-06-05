<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bukti Booking</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
    }
    h1, h2 {
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    .footer {
        margin-top: 20px;
        text-align: center;
    }
</style>
</head>
<body>
<div class="container">
    <?php foreach ($useraktif as $u): ?>
        <h1>Bukti Booking</h1>
        <h2>Selamat datang, <?= $u->nama; ?></h2>
        <p>Ini adalah bukti booking buku yang telah kamu lakukan:</p>
    <?php endforeach; ?>
    <table>
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>No.</th>
                <th>Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($items as $i): ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $i['judul_buku']; ?></td>
                    <td><?= $i['pengarang']; ?></td>
                    <td><?= $i['penerbit']; ?></td>
                    <td><?= $i['tahun_terbit']; ?></td>
                </tr>
                <?php $no++; endforeach; ?>
        </tbody>
    </table>
    <div class="footer">
        <p>Jangan lupa untuk mengembalikan buku tepat waktu!</p>
        <p>Semoga harimu menyenangkan!</p>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <p><?= md5(date('d M Y H:i:s')); ?></p>
    </div>
</div>

