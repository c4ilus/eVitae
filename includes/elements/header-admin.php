<?php 
    include('../includes/pdo/get_data.php');
?>
    <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml' xml:lang='fr' dir='ltr'>
        <head>
           <title>Administration</title>
           <link rel='stylesheet' type='text/css' href='../includes/css/back.css' />
           <link rel='stylesheet' type='text/css' href='../includes/css/jquery.validationEngine.css' />
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
           <script type="text/javascript" src="../includes/js/jquery.js"></script>
           <script type="text/javascript" src="../includes/js/back.js"></script> 
           <script type="text/javascript" src="../includes/js/jquery.validationEngine-fr.js" charset="utf-8"></script>
           <script type="text/javascript" src="../includes/js/jquery.validationEngine.js" charset="utf-8"></script>
        </head>
        <body>    
            <div class="header"><p>Administration</p></div>
            <table width="100%" border="0" cellspacing="0" cellpading="0" align="center">
                <tr>
                    <td valign="top" width="100">
                            <div class="menu">
                                <a href="index.php" id="perso">Profil</a>
                                <a href="formations" id="formations">Formations</a>
                                <a href="experiences" id="experiences">Experiences</a>
                                <a href="competences" id="competences">Competences</a>
                                <a href="langues" id="langues">Langues</a>
                                <a href="complements" id="complements">Complements</a>
                                <a href="liens" id="liens">Liens</a>
                                <a href="technologies" id="lexique">Lexique</a>
                            </div>
                    </td>
                    <td valign="top">
                        <div class="main">
                       