<?php
    include('pdo_connect.php');

    try{
        $db = new PDO($source, $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /********** Informations personnelles ****************************************************/
        $pdo = $db->prepare('SELECT * FROM informations ');
        $pdo->execute();

        while ($tmp = $pdo->fetch()){
            $poste = $tmp[0];
            $nom = $tmp[1];
            $adresse1 = $tmp[2];
            $adresse2 = $tmp[3];
            $cp = $tmp[4];
            $telephone = $tmp[5];
            $ville = $tmp[6];
            $email = $tmp[7];
            $naissance = $tmp[8];
            $twitter = $tmp[9];
            $googleplus = $tmp[10];
            $viadeo = $tmp[11];
            $linkedin = $tmp[12];
            $bio = $tmp[13];
            $permis = $tmp[14];
            $vehicule = $tmp[15];
        }

        $pdo = null;

        /********** Technologies ****************************************************/
        $pdo = $db->prepare('SELECT * FROM liens');
        $pdo->execute();

        $lien = $pdo->fetchAll();

        $pdo = null;

        /********** Technologies ****************************************************/
        $pdo = $db->prepare('SELECT * FROM technologies');
        $pdo->execute();

        $technologie = $pdo->fetchAll();

        $pdo = null;

        /********** Formations ****************************************************/
        $pdo = $db->prepare('SELECT * FROM formation ORDER BY id_formation DESC');
        $pdo->execute();

        $formations = $pdo->fetchAll();
        $pdo = null;

        /********** Experiences ***************************************************/
        $pdo = $db->prepare('SELECT * FROM experience ORDER BY id_experience DESC');
        $pdo->execute();

        $experiences = $pdo->fetchAll();

        $pdo = null;

        /********** Competences ***************************************************/
        $pdo = $db->prepare('SELECT * FROM competences');
        $pdo->execute();

        $competences = $pdo->fetchAll();

        $pdo = null;

        /********** Langues *******************************************************/
        $pdo = $db->prepare('SELECT * FROM langues');
        $pdo->execute();

        $langues = $pdo->fetchAll();

        $pdo = null;

        /********** Complements ****************************************************/
        $pdo = $db->prepare('SELECT * FROM complements');
        $pdo->execute();

        $complement = $pdo->fetchAll();

        $pdo = null;

    } catch(PDOException $e) {
        echo 'Error : ',$e->getMessage(),'<br/>';
        die();
    }
?>
