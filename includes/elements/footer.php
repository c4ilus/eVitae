<div class="footer">
    <p align="center">&copy; <?php echo date('Y'); ?> - Cr&eacute;e avec <a href="htpp://www.e-vitae.net">eVitae</a></p>
    <table border="0" align="center" width="1000">
        <tr>
            <td width="50%" valign="top">
                <ul>
                    <?php
                        foreach ($lien as $tab){
                            echo "<li><a href='$tab[2]' target='_blank'>$tab[1]</a></li>";
                        }
                    ?>
                </ul>
            </td>
            <td width="50%" align="right" valign="top">
                <?php echo $poste . " " . $ville ?><br/>
                <a href="contact">contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="lexique">lexique</a>
            </td>
        </tr>
    </table>
</div>



