<?php    

    if($_GET)
    {
        require_once("EnviarEmail.php");

        $Model = new EnviarEmail();
        $Model->setContato($_POST["Contato"]);
        $Model->setEmail($_POST["Email"]);
        $Model->setMensagem($_POST["Mensagem"]);
        $Model->Enviar();
        header("Location: ../index.html");
        exit();
    }

?>
