<?php
    include('../pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $db->prepare('UPDATE informations SET titre = :param1, email = :param2, twitter = :param3, googleplus = :param4, viadeo = :param5, linkedin = :param6, ville = :param7, bio = :param8, nom = :param9, adresse1 = :param10, adresse2 = :param11, cp = :param12, telephone = :param13, naissance = :param14, permis = :param15, vehicule = :param16');
        $pdo->bindParam(':param1', stripslashes($_POST['poste']));
        $pdo->bindParam(':param2', $_POST['email']);
        $pdo->bindParam(':param3', $_POST['twitter']);
        $pdo->bindParam(':param4', $_POST['googleplus']);
        $pdo->bindParam(':param5', $_POST['viadeo']);
        $pdo->bindParam(':param6', $_POST['linkedin']);
        $pdo->bindParam(':param7', stripslashes($_POST['ville']));
        $pdo->bindParam(':param8', stripslashes($_POST['bio']));
        $pdo->bindParam(':param9', stripslashes($_POST['nom']));
        $pdo->bindParam(':param10', stripslashes($_POST['adresse1']));
        $pdo->bindParam(':param11', stripslashes($_POST['adresse2']));
        $pdo->bindParam(':param12', $_POST['cp']);
        $pdo->bindParam(':param13', $_POST['telephone']);
        $pdo->bindParam(':param14', $_POST['naissance']);
        $pdo->bindParam(':param15', $_POST['permis']);

        if($_POST['vehicule'] == 'oui'){
            $vehicule = 1;
        }else{
            $vehicule = 0;
        }

        $pdo->bindParam(':param16', $vehicule);
        $pdo->execute();

    } catch (PDOException $e){
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }

    session_start();
    $_SESSION['update'] = "ok";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
