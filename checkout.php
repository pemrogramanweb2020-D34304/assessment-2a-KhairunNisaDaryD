<?php
    require_once("koneksi.php");
    $nama = $_POST['namapemesan'];

    $sql = "SELECT * FROM makanan";
    $result = mysqli_query($connect, $sql);

    echo "<h1>Rekap Makanan</h1>";
    echo "<h2>Nama Pemesan : $nama</h2>";
    echo "<table border=1>";
    echo "<thead>
          <th>No</th>
          <th>Nama Makanan</th>
          <th>Jumlah Makanan</th>
          <th>Harga Makanan</th>
          <th>Jumlah Pesanan</th>
          <th>Action</th>
          </thead>";

    while ($row = mysqli_fetch_assoc($result)) {
        $nomakanan = $row['nomakanan'];

        echo "<tr>";
        echo "<td>".$row['nomakanan']."</td>";
        echo "<td>".$row['namamakanan']."</td>";
        echo "<td>".$row['jumlahmakanan']."</td>";
        echo "<td>".$row['hargamakanan']."</td>";
        echo "<td><input type='text' name='jumlahpesan' value=0></td>";

        echo "<td><a href='pemesanan.php?nomakanan=$nomakanan'><button>Masukkan Ke Pemesanana</button></a></td>";
        echo "</tr>";
    }
    echo "</table><br>";
    echo "<a href='proses.php?namapemesan=$nama'><button>Pesan</button></a>";


?>