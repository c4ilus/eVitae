<?php
    include('../includes/elements/header-admin.php');

    session_start();
        if(isset($_SESSION['add']) && $_SESSION['add'] == 'ok')
        {
            echo "<div class='notification'>Technologie ajout&eacute;e !</div>";
        }
        if(isset($_SESSION['update']) && $_SESSION['update'] == 'ok')
        {
            echo "<div class='notification'>Technologie mise &agrave; jour !</div>";
        }
        if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'ok')
        {
            echo "<div class='notification'>Technologie supprim&eacute;e !</div>";
        }
    unset($_SESSION);
    session_destroy();
?>
    
    <h1>Lexique</h1>
        <?php
            echo "<table width='98%' align='center' id='infos'>";
            foreach ($technologie as $tab){             
                echo "<tr><td width='95%' class='left'><b>$tab[1]</b></td><td width='5%'><form action='../includes/pdo/delete/delete_technologie.php' method='post' enctype='application/x-www-form-urlencoded'><input type='text' name='id' value='$tab[0]' class='hidden' /><input type='submit' value='' id='delete' title='Supprimer'></form></td></tr>";
                echo "<tr><td colspan='2'><div class='btnedit' title='Modifier'></div>";
                echo "<div class='edit_form'>";
                echo "<form id='edit_form' action='../includes/pdo/update/update_technologie.php' method='post' enctype='application/x-www-form-urlencoded'>
                <input type='text' name='id' value='$tab[0]' class='hidden' /><br/>
                <textarea name='definition' id='definition' class='validate[required] rows='7'>$tab[2]</textarea><br/>
                <input type='submit' value='Modifier' class='button'>
                </form>";                        
                echo "</div></td></tr>";
            }
            echo "</table>";
        ?>  
        <div class="add">Ajouter une technologie</div> 
        <?php
            echo '<div class="add_form">';
            echo "<form id='add_form' action='../includes/pdo/add/add_technologie.php' method='post' enctype='application/x-www-form-urlencoded'>
            <input type='text' name='technologie' id='technologie' value='Technologie' class='validate[required] onclick=\"this.value=''\"/><br/>
            <textarea name='definition' id='definition' rows='7' class='validate[required] onclick=\"this.value=''\">Définition</textarea><br/><br/>
            <input type='submit' value='Ajouter' class='button'>
            </form>";
            echo '</div>';
        ?>
<?php
    include('../includes/elements/footer-admin.php');
?>
