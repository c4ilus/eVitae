<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare("INSERT INTO formation (date_formation, etablissement, ville, infos, est_fini) VALUES (:param1, :param2, :param3, :param4, :param5)");
        $pdo->bindParam(':param1', $_POST['date']);
        $pdo->bindParam(':param2', $_POST['etablissement']);
        $pdo->bindParam(':param3', $_POST['ville']);
        $pdo->bindParam(':param4', $_POST['informations']);

        if($_POST['status'] == 'En formation'){
            $status = 0;
        }else{
            $status = 1;
        }

        $pdo->bindParam(':param5', $status);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['add'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
