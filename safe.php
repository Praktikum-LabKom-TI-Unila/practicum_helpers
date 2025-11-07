<?php
$name_raw = isset($_GET['name']) ? $_GET['name'] : 'Tamu';
$name = htmlspecialchars($name_raw, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Demo XSS - Safe</title>
</head>

<body>
    <h1>Halo, <?= $name; ?>!</h1>

    <p>Contoh link (klik untuk mengirim payload):</p>
    <ul>
        <li><a href="safe.php?name=Fadhil">Normal</a></li>
        <li><a href="safe.php?name=%3Cscript%3Ealert('XSS')%3C%2Fscript%3E">Test XSS (alert)</a></li>
    </ul>

    <form method="get" action="safe.php">
        <label>Masukkan nama: <input type="text" name="name"></label>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>