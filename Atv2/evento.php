<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $eventos = $_POST['eventos'];
        
        switch ($eventos) {
            case 'evento1':
                echo"<h1><center>Boas vindas ao evento " . "<u>". "Celebração da Lua Prateada" . "</u>" . "</center>" ."</h1>";
                break;
            case 'evento2':
                echo"<h1><center>Boas vindas ao evento " . "<u>". "Corrida das Estrelas" . "</u>" . "</center>" . "</h1>";
                break;
            case 'evento3':
                echo"<h1><center>Boas vindas ao evento " . "<u>". "Busca pelo Santo Graal" . "</u>" . "</center>" . "</h1>";
                break;
            case 'evento4':
                echo"<h1><center>Boas vindas ao evento " . "<u>". "A Busca pelo Cálice da Imortalidade" . "</u>" . "</center>" . "</h1>";
                break;
        }
        echo "<p><center>Nome = $nome</center></p>";
        echo "<p><center>Email = $email</center></p>";
    } else {
        echo "<h1>Evento não cadastrado</h1>";
    }
?>