<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare("DELETE FROM competences WHERE id_competence = :param1");
        $pdo->bindParam(':param1', $_POST['id']);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['delete'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
