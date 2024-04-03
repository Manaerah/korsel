<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visi & misi</title>
    <link rel="stylesheet" href="visi & misi.php">
</head>
<body>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>

    <div id="content">
        <?php
        // Mendapatkan nilai dari parameter 'page' di URL
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Menggunakan nilai 'page' untuk memuat konten yang sesuai
        switch ($page) {
            case 'home':
                include('home.php');
                break;
            case 'about':
                include('about.php');
                break;
            case 'contact':
                include('contact.php');
                break;
            default:
                echo "Halaman tidak ditemukan";
                break;
        }
        ?>
    </div>
</body>
</html>