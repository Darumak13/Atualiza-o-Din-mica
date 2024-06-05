<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $produto = htmlspecialchars($_POST["produto"]);
        $estrelas = $_POST["rating"];
        $mensage = htmlspecialchars($_POST["mensagem"]);
        echo"Produto = " .$produto. "<br>";
        echo"Rating: " .$estrelas. "<br>"; 
        echo"|---------------|<br>";
        echo"|".$mensage."|<br>";
        echo"|__________|<br>";
    } 
?>