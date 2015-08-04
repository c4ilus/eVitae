<?php
    include('../includes/elements/header-admin.php');

    session_start();

        if(isset($_SESSION['add']) && $_SESSION['add'] == 'ok')
        {
            echo "<div class='notification'>Comp&eacute;tence ajout&eacute;e !</div>";
        }
        if(isset($_SESSION['update']) && $_SESSION['update'] == 'ok')
        {
            echo "<div class='notification'>Comp&eacute;tence mise &agrave; jour !</div>";
        }
        if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'ok')
        {
            
            
        }
        
    unset($_SESSION);
    session_destroy();
?>

    <h1>Compétences</h1>                 
        <?php
            echo "<table width='98%' align='center' id='infos'>";
            foreach ($competences as $tab){
                echo "<tr><td width='95%'><b>$tab[1]</b></td><td width='5%'><form action='../includes/pdo/delete/delete_competence.php' method='post' enctype='application/x-www-form-urlencoded'><input type='text' name='id' value='$tab[0]' class='hidden' /><input type='submit' value='' id='delete' title='Supprimer'></form></td></tr>";
                echo "<tr><td colspan='2'><div class='btnedit' title='Modifier'></div>";
                echo "<div class='edit_form'>";
                echo "<form id='edit_form' action='../includes/pdo/update/update_competence.php' method='post' enctype='application/x-www-form-urlencoded'>
                <input type='text' name='id' value='$tab[0]' class='hidden' /><br/>
                <input type='text' name='domaine' id='domaine' value='$tab[1]' class='validate[required]' /><br/>
                <textarea name='technologies' id='technologies' rows='10' class='validate[required]'>$tab[2]</textarea><br/>
                <input type='submit' value='Modifier' class='button'>
                </form>";                        
                echo "</div></td></tr>";                  
            }     
            echo "</table>";
        ?>
        <div class="add">Ajouter une compétence</div> 
        <?php
            echo '<div class="add_form">';
            echo "<form id='add_form' action='../includes/pdo/add/add_competence.php' method='post' enctype='application/x-www-form-urlencoded'>
            <input type='text' name='domaine' id='domaine' value='Domaine de compétences' class='validate[required]' onclick=\"this.value=''\"/><br/>
            <textarea name='technologies' rows='7' id='technologies' class='validate[required]' onclick=\"this.value=''\">Technologies</textarea><br/>
            <input type='submit' value='Ajouter' class='button'>
            </form>";
            echo '</div>';
        ?>
    
<?php
    include('../includes/elements/footer-admin.php');
?>
