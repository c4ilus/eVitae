<?php
    include('includes/elements/header.php');
?>
            <body>
                <div class="header"><?php echo $nom . ', ' . strtolower($poste) . ", " . $ville ?></div>
                <div class="main">
                    <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                            <td class="up-lexique"><span class="up-title"><?php echo $nom ?></span><a title="Retour au CV" href="/"><img src="includes/images/cv.png" alt="CV"/></a><a title="Pour me contacter ..." href="contact"><img src="includes/images/contact.png" alt="contact"/></a></td>
                        </tr>
                        <tr>
                            <td class="central-lexique" valign="top">
                                <h1>Quelques definitions ...</h1>
                            <div class="lexique">
                            <?php
                                foreach($technologie as $tab){
                                    echo "<h3>$tab[1]</h3>";
                                    echo '<p>' . $tab[2] . '</p>';
                                }
                            ?>
                            </div>
                            </td>
                        </tr>
                    </table>
                    <?php include('includes/elements/footer.php'); ?>
                </div>
            </body>
        </html>
