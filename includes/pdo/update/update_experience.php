<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare('UPDATE experience SET date_experience = :param1, intitule = :param2, entreprise = :param3, ville = :param4, infos = :param5, periode = :param6, est_fini = :param7 WHERE id_experience LIKE :param8');
        $pdo->bindParam(':param1', $_POST['date']);
        $pdo->bindParam(':param2', stripslashes($_POST['poste']));
        $pdo->bindParam(':param3', stripslashes($_POST['entreprise']));
        $pdo->bindParam(':param4', stripslashes($_POST['ville']));
        $pdo->bindParam(':param5', stripslashes($_POST['informations']));
        $pdo->bindParam(':param6', stripslashes($_POST['periode']));

        if($_POST['status'] == 'En poste'){
            $status = 0;
        }else{
            $status = 1;
        }

        $pdo->bindParam(':param7', $status);
        $pdo->bindParam(':param8', $_POST['id']);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['update'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
