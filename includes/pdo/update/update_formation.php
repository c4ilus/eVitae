<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare('UPDATE formation SET date_formation = :param1, etablissement = :param2, ville = :param3, infos = :param4, est_fini = :param5 WHERE id_formation LIKE :param6');
        $pdo->bindParam(':param1', $_POST['date']);
        $pdo->bindParam(':param2', stripslashes($_POST['etablissement']));
        $pdo->bindParam(':param3', stripslashes($_POST['ville']));
        $pdo->bindParam(':param4', stripslashes($_POST['informations']));

        if($_POST['status'] == 'En formation'){
            $status = 0;
        }else{
            $status = 1;
        }

        $pdo->bindParam(':param5', $status);
        $pdo->bindParam(':param6', $_POST['id']);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['update'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
