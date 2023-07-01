


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
        <a class="navbar-brand" href="logout.php"><h1 class="display-6">HOTEL ETAHAM</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                    <a class="nav-link" href="logout.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Pengunjung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php ">Booking</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
     <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat Datang di<br></h1>
            <h1 class="display-4">HOTEL ETAHAM</h1>
            <p class="lead">Kami menyediakan Pelayanan yang berkualitas dengan jaminan Kenyamanan penuh.</p><br><br><br>
            <h1 class="display-4">Silahkan melakukan Login terlebih dahulu</h1>
        </div>
    </div>
    <br><br>
      <form style="" id="loginform" class="form-horizontal" action="" method="POST" role="form">
        <div class="container">
        <label class="container">Email :</label>
        <input type="text" name="user"><br>
        <label class="container">Password :</label>
        <input type="password" name="pwd"><br><br>
        <input type="submit" value="Login" name="verify" />
        </div>
      </form><br><br>
      <?php
   
   $authenticated = false;
   if(isset($_POST['verify']) && $_POST['verify']=="Login")
   {

    $user= $_POST['user'];
    $pwd = $_POST['pwd'];

    $cn=pg_connect("host=localhost port=5432 dbname=postgres user= postgres password=sukaduka2020");
    if ($cn)
    {
        $query = 'select * from verify($1,$2)';
        $res = pg_query_params($cn,$query,array($user,$pwd));
        $result = pg_fetch_object($res);

        if($result)
        {
            $authenticated=$result -> verify==1;
        }
    }
    if (!$authenticated) 
    {
        echo "<center><h3>Masukkan Email dan Password yang benar</h3></center>";
    }
    else{
        header("Location: utama.php");
        exit();
    }
   }
?>

 <br><br><br>
<p class="lead">Follow Us ON Our Social Media:</p>
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