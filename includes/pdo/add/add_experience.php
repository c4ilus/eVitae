<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare("INSERT INTO experience (date_experience, intitule, entreprise, ville, infos, periode, est_fini) VALUES (:param1, :param2, :param3, :param4, :param5, :param6, :param7)");
        $pdo->bindParam(':param1', $_POST['date']);
        $pdo->bindParam(':param2', $_POST['poste']);
        $pdo->bindParam(':param3', $_POST['entreprise']);
        $pdo->bindParam(':param4', $_POST['ville']);
        $pdo->bindParam(':param5', $_POST['informations']);
        $pdo->bindParam(':param6', $_POST['periode']);

        if($_POST['status'] == 'En poste'){
            $status = 0;
        }else{
            $status = 1;
        }

        $pdo->bindParam(':param7', $status);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['add'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
