<?php
    include('../includes/elements/header-admin.php');

    session_start();
        if(isset($_SESSION['add']) && $_SESSION['add'] == 'ok')
        {
            echo "<div class='notification'>Exp&eacute;rience ajout&eacute;e !</div>";
        }
        if(isset($_SESSION['update']) && $_SESSION['update'] == 'ok')
        {
            echo "<div class='notification'>Exp&eacute;rience mise &agrave; jour !</div>";
        }
        if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'ok')
        {
            echo "<div class='notification'>Exp&eacute;rience supprim&eacute;e !</div>";
        }
    unset($_SESSION);
    session_destroy();
?>

    <h1>Experiences profesionnelles</h1>
        <?php
            echo "<table width='98%' align='center' id='infos'>";
            foreach ($experiences as $tab){
                echo "<tr><td width='95%' class='left'><b>$tab[3]</b> - $tab[2]</td><td width='5%'><form action='../includes/pdo/delete/delete_experience.php' method='post' enctype='application/x-www-form-urlencoded'><input type='text' name='id' value='$tab[0]' class='hidden' /><input type='submit' value='' id='delete' title='Supprimer'></form></td></tr>";
                echo "<tr><td colspan'2'><div class='btnedit' title='Modifier'></div>";
                echo "<div class='edit_form'>";
                echo "<form id='edit_form' action='../includes/pdo/update/update_experience.php' method='post' enctype='application/x-www-form-urlencoded'>
                <input type='text' name='id' value='$tab[0]' class='hidden' /><br/>                       
                <input type='text' name='date' id='date' class='validate[required,custom[onlyNumberSp]]' value='$tab[1]' /><br/>
                <input type='text' name='poste' id='poste' value='$tab[2]' class='validate[required]' /><br/>
                <input type='text' name='entreprise' id='entreprise' value='$tab[3]' class='validate[required]' /><br/>
                <input type='text' name='ville' id='ville' value='$tab[4]' class='validate[required]' /><br/>
                <textarea name='informations' id='informations' rows='7' class='validate[required]' >$tab[5]</textarea><br/>
                <textarea name='periode' id='periode' rows='4' class='validate[required]'>$tab[6]</textarea><br/>
                Situation : <select name='status'>
                    <option>En poste</option>
                    <option>Terminé</option>
                </select><br/>
                <input type='submit' value='Modifier' class='button'>
                </form>";                    
                echo "</div></td></tr>";  
            }
            echo "</table>";
        ?>  
        <div class="add">Ajouter une expérience</div> 
        <?php
            echo '<div class="add_form">';
            echo "<form id='add_form' action='../includes/pdo/add/add_experience.php' method='post' enctype='application/x-www-form-urlencoded'>
            <input type='text' name='date' id='date' value='Année' class='validate[required,custom[onlyNumberSp]]' onclick=\"this.value=''\"/><br/>
            <input type='text' name='poste' id='poste' value='Poste' class='validate[required]' onclick=\"this.value=''\"/><br/>
            <input type='text' name='entreprise' id='entreprise' value='Entreprise' class='validate[required]' onclick=\"this.value=''\"/><br/>
            <input type='text' name='ville' id='ville' value='Ville' class='validate[required]' onclick=\"this.value=''\"/><br/>
            <textarea name='informations' id='informations' rows='7' class='validate[required]' onclick=\"this.value=''\">Informations</textarea><br/>
            <textarea name='periode' id='periode' rows='4' class='validate[required]' onclick=\"this.value=''\">Periode(s)</textarea><br/>
            Situation : <select name='status'>
                <option>En poste</option>
                <option>Terminé</option>
            </select><br/>
            <input type='submit' value='Ajouter' class='button'>
            </form>";
            echo '</div>';
        ?>
    
<?php
    include('../includes/elements/footer-admin.php');
?>
