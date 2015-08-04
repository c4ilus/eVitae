<?php
    include('includes/elements/header.php');
?>
            <body>
            <?php
                 session_start();
                 if(isset($_SESSION['message']))
                 {
                    if($_SESSION['message'] == 'ok')
                    {
                        echo "<div class='notification-mail-envoye'>Merci !</div>";
                    }
                 }
                 unset($_SESSION);
                 session_destroy();
            ?>
                <div class="header"><?php echo $nom . ', ' . strtolower($poste) . ", " . $ville ?></div>
                <div class="main">
                    <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td class="up-contact"><span class="up-title"><?php echo $nom ?></span><a title="Retour au CV" href="/"><img src="includes/images/cv.png" alt="CV"/></a></td>
                    </tr>
                    <tr>
                            <td class="central-contact" valign="top">
                                <div class="container">
                                <h1>Restons en contact ...</h1>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td class="formulaire" valign="top">
                                                <form id="contact-form" method="post" action="includes/fonctions/submit.php" >
                                                    <table>
                                                        <tr>
                                                            <td><strong>Prénom :</strong><br/><input type='text' name='prenom' id='prenom' class='validate[required]' /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Nom :</strong><br/><input type='text' name='nom' id='nom' class='validate[required]' /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Société :</strong><br/><input type='text' name='societe' id='societe' /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Téléphone :</strong><br/><input type='text' name='telephone' id='telephone' class='validate[custom[onlyNumberSp]]' /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Email :</strong><br/><input type='text' name='email' id='email' class='validate[required,custom[email]]' /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Message :</strong><br/><textarea rows="" cols="" name="message" id="message" class="validate[required]"></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type='reset' value='Effacer' class='button'/>
                                                                <input type='submit' value='Envoyer' class='button'/>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </td>
                                            <td valign="top" align="center">
                                                <div class="social">
                                                    <strong>Suivez moi sur :</strong>
                                                    <br/><br/>
                                                    <a href="<?php echo $viadeo; ?>" target="_blank"><img src="includes/images/viadeo.png" alt=""/></a>
                                                    <a href="<?php echo $linkedin; ?>" target="_blank"><img src="includes/images/linkedin.png" alt=""/></a>
                                                    <br/>
                                                    <a href="<?php echo $googleplus; ?>" target="_blank"><img src="includes/images/google.png" alt=""/></a>
                                                    <a href="<?php echo $twitter; ?>" target="_blank"><img src="includes/images/twitter.png" alt=""/></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <?php include('includes/elements/footer.php');?>
                </div>
            </body>
        </html>
