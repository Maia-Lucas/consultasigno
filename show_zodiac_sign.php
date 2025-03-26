<?php include('layouts/header.php'); ?>
<?php
    $signos = simplexml_load_file("signos.xml");
    $data_nascimento = $_POST['dataNascimento'];
    $data= new DateTime ($data_nascimento);

    foreach ($signos->signo as $signo) {
        $dataInicio = DateTime::createFromFormat('d/m', (string) $signo->dataInicio);
        $dataFim = DateTime::createFromFormat('d/m', (string) $signo->dataFim);

        
        $anoNascimento = $data->format('Y');
        $dataInicio->setDate($anoNascimento, $dataInicio->format('m'), $dataInicio->format('d'));
        $dataFim->setDate($anoNascimento, $dataFim->format('m'), $dataFim->format('d'));


        if (($data >= $dataInicio) && ($data <= $dataFim)) {
        echo "<div class='container mt-5'>";
        echo "<h2>Seu Signo é: " . $signo->signoNome . "</h2>";
        echo "<p>" . $signo->descricao . "</p>";
        break; 
        }
    }   
?>
