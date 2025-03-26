<?php include 'layouts/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Consulta de Signo</title>
</head>
<body>
    <div class="container">
        <h1>Consulta de Signo</h1>
        <form id="formulario" action="show_zodiac_sign.php" method="POST">
            <label for="dataNascimento">Informe sua Data de Nascimento:</label>
            <input type="date" id="dataNascimento" name="dataNascimento" required>
            <button type="submit">Consultar Signo</button>
        </form>
    </div>
</body>
</html>