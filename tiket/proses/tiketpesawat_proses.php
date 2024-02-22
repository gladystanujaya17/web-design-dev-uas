<?php
    require '../../searchphp/function/function.php';
    $conn = koneksiDb();

    session_start();
    $query = "INSERT INTO transaksi_pesawat (transaksi_id, username, flight_id,
    departure_date, total_seats, grand_total) VALUES (?, ?, ?, ?, ?, ?)";

    $date = date($_SESSION['flighttanggal']);

    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssisii', 
            $_SESSION['idbookingflight'], $_SESSION['uname'], $_SESSION['idpenerbangan'], $date,
            $_SESSION['flightnumofseats'], $_SESSION['flightpembayaran']);
    $stmt->execute();

    unset(
        $_SESSION['bookpesawat'],
        $_SESSION['idpenerbangan'],
        $_SESSION['maskapai'],
        $_SESSION['flightdari'],
        $_SESSION['flightke'],
        $_SESSION['flighttanggal'],
        $_SESSION['flightnumofseats'],
        $_SESSION['flightpembayaran']
   );

    header('Location: ../../list-history.php')
?>