<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/anggota">Anggota</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/peminjam">Peminjam</a>
            </li>
        </ul>
    </nav>
    
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <php? foreach($buku as $item)?>
                    <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://i.ibb.co/wSCKZvn/downloadzz.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Judul : $item</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">9 mins</small>
                        </div>
                        </div>
                    </div>
                    </div>
               <php? endforeach ?>
            </div>
        </div>
    </div>
</body>
</html>
