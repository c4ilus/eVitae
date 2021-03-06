<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare("INSERT INTO liens (nom, url) VALUES (:param1, :param2)");
        $pdo->bindParam(':param1', $_POST['nom']);
        $pdo->bindParam(':param2', $_POST['url']);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['add'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
