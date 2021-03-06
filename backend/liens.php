<?php
    include('../includes/elements/header-admin.php');

    session_start();
        if(isset($_SESSION['add']) && $_SESSION['add'] == 'ok')
        {
            echo "<div class='notification'>Lien ajout&eacute; !</div>";
        }
        if(isset($_SESSION['update']) && $_SESSION['update'] == 'ok')
        {
            echo "<div class='notification'>Lien mis &agrave; jour !</div>";
        }
        if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'ok')
        {
            echo "<div class='notification'>Lien supprim&eacute; !</div>";
        }
    unset($_SESSION);
    session_destroy();
?>
    
    <h1>Liens</h1>
        <?php
            echo "<table width='98%' align='center' id='infos'>";
            foreach ($lien as $tab){             
                echo "<tr><td width='95%' class='left'><b>$tab[1]</b></td><td width='5%'><form action='../includes/pdo/delete/delete_lien.php' method='post' enctype='application/x-www-form-urlencoded'><input type='text' name='id' value='$tab[0]' class='hidden' /><input type='submit' value='' id='delete' title='Supprimer'></form></td></tr>";
                echo "<tr><td colspan='2'><div class='btnedit' title='Modifier'></div>";
                echo "<div class='edit_form'>";
                echo "<form id='edit_form' action='../includes/pdo/update/update_lien.php' method='post' enctype='application/x-www-form-urlencoded'>
                <input type='text' name='id' value='$tab[0]' class='hidden' /><br/>
                <input type='text' name='nom' id='name' class='validate[required]' value='$tab[1]' /><br/>
                <input type='text' name='url' id='url' class='validate[required,custom[url]]' value='$tab[2]' /><br/>
                <input type='submit' value='Modifier' class='button'>
                </form>";                        
                echo "</div></td></tr>";
            }
            echo "</table>";
        ?>  
        <div class="add">Ajouter un lien</div> 
        <?php
            echo '<div class="add_form">';
            echo "<form id='add_form' action='../includes/pdo/add/add_lien.php' method='post' enctype='application/x-www-form-urlencoded'>
            <input type='text' name='nom' id='name' value='nom du lien' class='validate[required]' onclick=\"this.value=''\"/><br/>
            <input type='text' name='url' id='url' value='url' class='validate[required,custom[url]]' onclick=\"this.value=''\"><br/><br/>
            <input type='submit' value='Ajouter' class='button'>
            </form>";
            echo '</div>';
        ?>
<?php
    include('../includes/elements/footer-admin.php');
?>
