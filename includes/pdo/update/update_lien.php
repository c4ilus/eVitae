<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare('UPDATE liens SET nom = :param1, url = :param2 WHERE id_lien LIKE :param3');
        $pdo->bindParam(':param1', stripslashes($_POST['nom']));
        $pdo->bindParam(':param2', stripslashes($_POST['url']));
        $pdo->bindParam(':param3', $_POST['id']);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['update'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
