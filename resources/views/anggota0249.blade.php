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
            <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="/anggota">Anggota</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/peminjam">Peminjam</a>
            </li>
        </ul>
        <table>
            <thread>
                <tr>
                    <th>Nama</th>
                    <th>Status</th>
                </tr>
            </thread>
            <tbody>
                @foreach($anggota as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>Anggota</td>
                </tr>
            </tbody>
        </table>
    </nav>



</body>
</html>
