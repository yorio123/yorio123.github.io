<?php
    $cn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=sukaduka2020");
    $result = pg_query($cn,"select * from tb_pengunjung order by nama_pengunjung ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL ETAHAM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img src="eta.JPEG" width="300px" height="150px">
      <br>
        <a class="navbar-brand" href="utama.php"><h1 class="display-6">HOTEL ETAHAM</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                    <a class="nav-link" href="utama.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kamar.php">Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="karyawan.php">Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengunjung.php">Pengunjung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat Datang di<br></h1>
            <h1 class="display-4">HOTEL ETAHAM</h1>
            <p class="lead">Kami menyediakan Pelayanan yang berkualitas dengan jaminan Kenyamanan penuh.</p><br><br><br><hr class="bg-dark">
            <img src="ikonpengunjung.JPEG" width="200px" height="150px">
            <a class="display-4">DATA PENGUNJUNG HOTEL ETAHAM</a><hr class="bg-dark">
        </div>
    </div>
<table border="1" align="center" width="80%" height="500pxx" bgcolor="#ccc" >
        <tr>
            <th width="250x" height="50pxx" bgcolor="gray">No.KTP</th>
            <th width="450x" height="50pxx" bgcolor="gray">Nama</th>
            <th width="250x" height="50pxx" bgcolor="gray">Status</th>
            <th width="250x" height="50pxx" bgcolor="gray">Alamat</th>
            <th width="250x" height="50pxx" bgcolor="gray">Umur</th>
            <th width="250x" height="50pxx" bgcolor="gray">Jenis Kelamin</th>
        </tr>
<?php

    while ($row = pg_fetch_object($result)) 
    {
        echo "
        <tr>    
            <td>$row->no_ktp</td>
            <td>$row->nama_pengunjung</td> 
            <td>$row->status_pengunjung</td>
            <td>$row->alamat_pengunjung</td>
            <td>$row->umur_pengunjung</td>
            <td>$row->jenis_kelamin_pengunjung</td>           
        </tr>
        ";  
    }
      

?>


    </table>
    <br><br><br><br><br>
<p class="lead">Follow Us ON Our Social Media :</p>
<img src="ikonfacebook.JPEG" width="50pxx" height="50px">
<a href="https://www.facebook.com/profile.php?id=100078045834720">Yorio Hutagalung</a>
<img src="ikoninstagram.JPEG" width="50pxx" height="50px">
<a href="https://l.facebook.com/l.php?u=https%3A%2F%2Finstagram.com%2Fyoriohutagalung%3Figshid%3DNTc4MTIwNjQ2YQ%253D%253D%26fbclid%3DIwAR3wPpVuLGEzJ8PNu7Iwi_tCLZpyjx6SuSp816F5S77OXh4F8Hlul-dw7zU&h=AT0jDN3MXM6OyCceJxqysX-9yFNEgRAW2bAzfrQKLj99QRBlaKFdWSoFbOhcw2tTVBzHzhGMwpndrnESIWjsebMDNkEM1FA8olH0U5pPRZUHgyq2fpRJ0TsydPhBacLmn4FOz1ERJnjJSmQ8pOcPXQ"> yoriohutagalung </a>
<img src="ikontwitter.JPEG" width="50pxx" height="50px">
<a href="https://twitter.com/BangYoo24">BangYoo24</a>
<br><br>



    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2023 HOTEL ETAHAM. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>