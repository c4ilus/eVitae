<?php
    include('../includes/elements/header-admin.php');

    session_start();
        if(isset($_SESSION['add']) && $_SESSION['add'] == 'ok')
        {
            echo "<div class='notification'>Langue ajout&eacute;e !</div>";
        }
        if(isset($_SESSION['update']) && $_SESSION['update'] == 'ok')
        {
            echo "<div class='notification'>Langue mise &agrave; jour !</div>";
        }
        if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'ok')
        {
            echo "<div class='notification'>Langue supprim&eacute;e !</div>";
        }
    unset($_SESSION);
    session_destroy();
?>
    
    <h1>Langues</h1> 
        <?php
            echo "<table width='98%' align='center' id='infos'>";
            foreach ($langues as $tab){             
                echo "<tr><td width='95%' class='left'><b>$tab[1]</b></td><td width='5%'><form action='../includes/pdo/delete/delete_language.php' method='post' enctype='application/x-www-form-urlencoded'><input type='text' name='id' value='$tab[0]' class='hidden' /><input type='submit' value='' id='delete' title='Supprimer'></form></td></tr>";
                echo "<tr><td colspan='2'><div class='btnedit' title='Modifier'></div>";
                echo "<div class='edit_form'>";
                echo "<form id='edit_form' action='../includes/pdo/update/update_language.php' method='post' enctype='application/x-www-form-urlencoded'>
                <input type='text' name='id' value='$tab[0]' class='hidden' /><br/>
                <input type='text' name='niveau' id='niveau' class='validate[required]' value='$tab[2]' /><br/>
                <input type='submit' value='Modifier' class='button'>
                </form>";                        
                echo "</div></td></tr>";
            }
            echo "</table>";
        ?>  
        <div class="add">Ajouter une langue</div> 
        <?php
            echo '<div class="add_form">';
            echo "<form id='add_form' action='../includes/pdo/add/add_language.php' method='post' enctype='application/x-www-form-urlencoded'>
            <input type='text' name='langue' id='langue' value='Langue' class='validate[required]' onclick=\"this.value=''\"/><br/>
            <input type='text' name='niveau' id='niveau' value='Niveau' class='validate[required]' onclick=\"this.value=''\"/><br/>
            <input type='submit' value='Ajouter' class='button'>
            </form>";
            echo '</div>';
        ?>
<?php
    include('../includes/elements/footer-admin.php');
?>
