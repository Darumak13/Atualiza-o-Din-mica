<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $questions = htmlspecialchars($_POST["questions"]);
        $questions2 = htmlspecialchars($_POST["questions2"]);
        $cont = 0;
        switch ($questions) {
            case "resposta1":
                echo"<h1> Questão 1 Resposta Incorreta</h1>";
                break;
            case "resposta2":
                echo "<h1> Questão 1 Resposta Incorreta</h1>";
                break;
            case "resposta3":
                $cont++;
                echo "<h1><i> Questão 1 Resposta Correta!!!🎊🎊</i></h1>";
                break;
            case "resposta4":
                echo "<h1> Questão 1 Resposta Incorreta</h1>";
                break;
        }

        switch ($questions2) {
            case "resposta5":
                echo"<h1> Questão 2 Resposta Incorreta</h1>";
                break;
            case "resposta6":
                $cont++;
                echo"<h1><i> Questão 2 Resposta Correta!!!🎊🎊</i></h1>";
                break;   
            case "resposta7":
                echo "<h1> Questão 2 Resposta Incorreta</h1>";
                break;
            case "resposta8":
                echo "<h1> Questão 2 Resposta Incorreta</h1>";
                break;
        }

        echo "Você obteve $cont pontos";
    } else {
        echo "<h1>Resposta não enviada :(</h1>";
    }
?>