<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare('UPDATE complements SET details = :param1 WHERE id_complement LIKE :param2');
        $pdo->bindParam(':param1', stripslashes($_POST['details']));
        $pdo->bindParam(':param2', $_POST['id']);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['update'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
