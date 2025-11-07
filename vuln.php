<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'Tamu';

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Demo XSS - Vulnerable</title>
</head>

<body>
    <h1>Halo, <?php echo $name; ?>!</h1>

    <p>Contoh link (klik untuk mengirim payload):</p>
    <ul>
        <li><a href="vuln.php?name=Fadhil">Normal</a></li>
        <li><a href="vuln.php?name=%3Cscript%3Ealert('XSS')%3C%2Fscript%3E">Test XSS (alert)</a></li>
    </ul>

    <form method="get" action="vuln.php">
        <label>Masukkan nama: <input type="text" name="name"></label>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>