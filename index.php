<?php
    include('includes/elements/header.php');
?>
            <body>
                <div class='notification-accueil'>
                  <span class="close">[Fermer]</span>
                  Bonjour, <br/><br/>
                  <?php echo $bio ?><br/><br/>
                  Merci de votre visite !
                </div>
                <div class="header"><?php echo $nom . ', ' . strtolower($poste) . ", " . $ville ?></div>
                <div class="main">
                    <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                            <td class="up-cv" colspan="2"><span class="up-title"><?php echo $nom ?></span><a title="Pour me contacter ..." href="contact"><img src="includes/images/contact.png" alt="Contact"/></a></td>
                        </tr>
                        <tr>
                            <td class="central-cv" valign="top">
                                <div class="container">
                                    <table border="0" width="100%">
                                        <tr>
                                            <td>
                                                <h1><?php echo $poste . ' - ' . $ville; ?></h1>
                                            </td>
                                            <td width="220" align="right" valign="top">
                                                <a href="pdf.php" class="pdf" target="_blank">T&eacute;l&eacute;charger en version PDF</a>
                                            </td>
                                        </tr>
                                    </table>
                                        <h2>FORMATIONS</h2>
                                        <?php
                                            echo '<div class="conteneur">';
                                            foreach ($formations as $tab){
                                                if($tab[5] == 0){
                                                    echo '<h3>Depuis ' . $tab[1] . '</h3><br/>';
                                                }else{
                                                    echo '<h3>' . $tab[1] . '</h3><br/>';
                                                }
                                                echo '<strong>' . $tab[2] . '</strong> - ' . $tab[3] . '<br/>';
                                                echo '<em>' . $tab[4] . '</em><br/>';
                                                echo '<br/>';
                                            }
                                            echo '</div>';

                                           $tab = '';
                                        ?>
                                        <h2>EXPERIENCES PROFESSIONNELLES</h2>
                                        <?php
                                            echo '<div class="conteneur">';
                                            foreach ($experiences as $tab){
                                                if($tab[7] == 0){
                                                    echo '<h3>Depuis ' . $tab[1] . '</h3><br/>';
                                                }else{
                                                    echo '<h3>' . $tab[1] . '<h3><br/>';
                                                }
                                                echo '<strong>' . $tab[2] . '</strong> - <strong>' . $tab[3] . '</strong> - ' . $tab[4] . '<br/>';
                                                echo '<em>' . $tab[5] . '</em><br/>';
                                                echo $tab[6] . '<br/>';
                                                echo '<br/>';
                                            }
                                            echo '</div>';

                                            $tab = '';
                                        ?>
                                        <h2>COMPETENCES</h2>
                                        <?php
                                            echo '<div class="conteneur">';

                                            foreach($competences as $tab){
                                                echo '<h3>' . $tab[1] . '</h3><br/>';
                                                echo '<em>' . $tab[2] . '</em><br/>';
                                                echo '<br/>';
                                            }

                                            echo '</div>';

                                            $tab = '';
                                        ?>
                                        <h2>LANGUES</h2>
                                        <?php
                                            echo '<div class="conteneur">';
                                            foreach($langues as $tab){
                                                echo '<h3>' . $tab[1] . '</h3><br/>';
                                                echo '<em>' . $tab[2] . '</em><br/>';
                                                echo '<br/>';
                                            }
                                            echo '</div>';

                                            $tab = '';
                                        ?>
                                        <h2>AUTRES INFORMATIONS</h2>
                                        <?php
                                            echo '<div class="conteneur">';
                                            foreach($complement as $tab){
                                                echo '<h3>' . $tab[1] . '</h3><br/>';
                                                echo '<em>' . $tab[2] . '</em><br/>';
                                                echo '<br/>';
                                            }
                                            echo '</div>';

                                           // $tab = '';

                                        ?>
                                    </div>
                            </td>
                        </tr>
                    </table>
                    <?php include('includes/elements/footer.php'); ?>
                </div>
            </body>
        </html>
