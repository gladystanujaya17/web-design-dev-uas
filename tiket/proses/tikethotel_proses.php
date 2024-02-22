<?php
    require '../../searchphp/function/function.php';
    $conn = koneksiDb();

    session_start();
    $query = "INSERT INTO transaksi_hotel (transaksi_id, username, avail_id, 
             check_in, check_out, total_room, grand_total)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $datein = $_SESSION['checkin'];
    $dateout = $_SESSION['checkout'];

    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssissii',
    $_SESSION['idbookinghotel'], $_SESSION['uname'], $_SESSION['idhotel'], $datein, 
    $dateout, $_SESSION['numofroom'], $_SESSION['hotelpembayaran']);
    $stmt->execute();

  unset(
        $_SESSION['idhotel'],
        $_SESSION['bookhotel'],
        $_SESSION['hotel'],
        $_SESSION['kota'],
        $_SESSION['checkin'],
        $_SESSION['checkout'],
        $_SESSION['numofroom'],
        $_SESSION['bedtype'],
        $_SESSION['hotelpembayaran']
    );

    header('Location: ../../list-history.php')
?>