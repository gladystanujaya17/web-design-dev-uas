<?php
    require '../../searchphp/function/function.php';
    $conn = koneksiDb();

    session_start();
    $query = "INSERT INTO transaksi_kereta (transaksi_id, username, train_id,
             departure_date, total_seats, grand_total) VALUES (?, ?, ?, ?, ?, ?)";

    $date = date($_SESSION['keretatanggal']);
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssisii', 
            $_SESSION['idbookingkereta'], $_SESSION['uname'], $_SESSION['idkereta'], $date, 
            $_SESSION['keretanumofseats'], $_SESSION['keretapembayaran']);
    $stmt->execute();

    unset(
        $_SESSION['idkereta'],
        $_SESSION['bookkereta'],
        $_SESSION['keretadari'],
        $_SESSION['keretake'],
        $_SESSION['keretatanggal'],
        $_SESSION['keretanumofseats'],
        $_SESSION['keretapembayaran']
    );

    header('Location: ../../list-history.php')
?>