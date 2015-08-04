<?php
    include('../includes/elements/header-admin.php');

    session_start();
        if(isset($_SESSION['add']) && $_SESSION['add'] == 'ok')
        {
            echo "<div class='notification'>Formation ajout&eacute;e !</div>";
        }
        if(isset($_SESSION['update']) && $_SESSION['update'] == 'ok')
        {
            echo "<div class='notification'>Formation mise &agrave; jour !</div>";
        }
        if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'ok')
        {
            echo "<div class='notification'>Formation supprim&eacute;e !</div>";
        }
    unset($_SESSION);
    session_destroy();
?>

    <h1>Formations</h1>     
        <?php        
            echo "<table width='98%' align='center' id='infos'>";
            foreach ($formations as $tab){ 
                echo "<tr><td width='95%' class='left'><b>$tab[2]</b> - $tab[3]</td><td width='5%'><form action='../includes/pdo/delete/delete_formation.php' method='post' enctype='application/x-www-form-urlencoded'><input type='text' name='id' value='$tab[0]' class='hidden' /><input type='submit' value='' id='delete' title='Supprimer'></form></td></tr>";
                echo "<tr><td colspan='2'><div class='btnedit' title='Enregistrer'></div>";
                echo "<div class='edit_form'>";
                echo "<form id='edit_form' action='../includes/pdo/update/update_formation.php' method='post' enctype='application/x-www-form-urlencoded'>
                <input type='text' name='id' value='$tab[0]' class='hidden' /><br/>                    
                <input type='text' name='date' id='name' class='validate[required,custom[onlyNumberSp]]' value='$tab[1]' /><br/>
                <input type='text' name='etablissement' id='etablissement' class='validate[required]' value='$tab[2]' /><br/>
                <input type='text' name='ville' id='ville' class='validate[required]' value='$tab[3]' /><br/>
                <textarea name='informations' id='informations' rows='4' class='validate[required]' >$tab[4]</textarea><br/>
                Situation : <select name='status'>
                    <option>En formation</option>
                    <option>Terminé</option>
                </select><br/>
                <input type='submit' value='Enregistrer' class='button'>
                </form>";                      
                echo "</div></td></tr>";
            }
            echo "</table>";
        ?>              
        <div class="add">Ajouter une formation</div> 
        <?php
            echo '<div class="add_form">';
            echo "<form id='add_form' action='../includes/pdo/add/add_formation.php' method='post' enctype='application/x-www-form-urlencoded'>
            <input type='text' name='date' id='name' value='Année' class='validate[required,custom[onlyNumberSp]]' onclick=\"this.value=''\" /><br/>
            <input type='text' name='etablissement' id='etablissement' value='Etablissement' class='validate[required]' onclick=\"this.value=''\" /><br/>
            <input type='text' name='ville' id='ville' value='Ville' class='validate[required]' onclick=\"this.value=''\" /><br/>
            <textarea name='informations' id='informations' rows='4' class='validate[required]' onclick=\"this.value=''\">Informations</textarea><br/>
            Situation : <select name='status'>
                <option>En formation</option>
                <option>Terminé</option>
            </select><br/>
            <input type='submit' value='Ajouter' class='button'>
            </form>";
            echo '</div>';
        ?>  
    
<?php
    include('../includes/elements/footer-admin.php');
?>
