<?php
    include('../includes/elements/header-admin.php');

    session_start();

    if(isset($_SESSION['update']) && $_SESSION['update'] == 'ok')
    {
        echo "<div class='notification'>Informations mises &agrave; jour !</div>";
    }
        
    unset($_SESSION);
    session_destroy();
?>

    <h1>Informations personnelles</h1>
    <p class="note">* L'adresse postale, le téléphone et les informations concernant le permis sont visibles UNIQUEMENT dans le document pdf généré depuis l'accueil.</p>
        <form action='../includes/pdo/update/update_informations.php' method='post' enctype='application/x-www-form-urlencoded'>
            <table border="0" width="98%">
                <tr>
                    <td valign="top">
                         <table class="profil">
                            <tr>
                                <td><b>Nom :</b></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px">
                                      <input type='text' name='nom' maxlength='100' value="<?php echo $nom ?>" class="nom" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Poste :</b></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px">
                                      <input type='text' name='poste' maxlength='100' value="<?php echo $poste ?>" class="poste" /><br/>
                                      <input type='text' name='ville' maxlength='100' value="<?php echo $ville ?>" class="ville" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Courte biographie :</b></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px"><textarea name="bio"><?php echo $bio ?></textarea><br/></td>
                            </tr>
                            <tr>
                                <td title="E-mail" id="mail" /><input type='text' name='email' maxlength='200' value="<?php echo $email ?>" /></td>
                            </tr>
                             <tr>
                                <td title="Twitter" id="twitter" /><input type='text' name='twitter' maxlength='200' value="<?php echo $twitter ?>" /></td>
                            </tr>
                            <tr>
                                <td title="Google+" id="googleplus" /><input type='text' name='googleplus' maxlength='200' value="<?php echo $googleplus ?>" /></td>
                            </tr>
                            <tr>
                                <td title="Viadéo" id="viadeo" /><input type='text' name='viadeo' maxlength='200' value="<?php echo $viadeo ?>" /></td>
                            </tr>
                            <tr>
                                <td title="Linked In" id="linkedin" /><input type='text' name='linkedin' maxlength='200' value="<?php echo $linkedin ?>" /></td>
                            </tr>
                        </table>            
                    </td>
                    <td valign="top">
                        <table class="profil">
                            <tr>
                                <td><b>Adresse :</b></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px">
                                      <input type='text' name='adresse1' maxlength='100' value="<?php echo $adresse1 ?>" class="adresse1" /><br/>
                                      <input type='text' name='adresse2' maxlength='100' value="<?php echo $adresse2 ?>" class="adresse2" /><br/>
                                      <input type='text' name='cp' maxlength='5' value="<?php echo $cp ?>" id="cp" />&nbsp;&nbsp;<?php echo $ville ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>T&eacute;l&eacute;phone :</b></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2px">
                                      +33&nbsp;<input type='text' name='telephone' maxlength='10' value="<?php echo $telephone ?>" class="telephone" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Date de naissance : </b><em>(JJ/MM/AAAA)</em></b></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px">
                                      <input type='text' name='naissance' maxlength='10' value="<?php echo $naissance ?>" class="naissance" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Permis :</b></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px">
                                      <input type='text' name='permis' maxlength='10' value="<?php echo $permis ?>" id="permis" />&nbsp;&nbsp;&nbsp;&nbsp;Véhicule : 	
                                      <select name="vehicule">
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type='submit' name="submit" value='Enregistrer' class="buttonprofil"/>
                    </td>
                </tr>
            </table>
        </form>

<?php
    include('../includes/elements/footer-admin.php');
?>
