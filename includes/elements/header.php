<?php
    include('includes/pdo/get_data.php');

    function noAccent($char)
    {
       $pattern = Array("/é/", "/è/", "/ê/", "/ç/", "/à/", "/â/", "/î/", "/ï/", "/ù/", "/ô/");
       $rep_pat = Array("e", "e", "e", "c", "a", "a", "i", "i", "u", "o");
       $char = preg_replace($pattern, $rep_pat, $char);
       return $char;
    }

    if(preg_match('/contact/', $_SERVER['REQUEST_URI']))
    {
        $title = $nom . ' | contact' ;
        $keywords = strtolower($nom) . ', ' . $nom . ', contact';
        $description = 'Pour me contacter ...';
        $identifier = '';
    }elseif(preg_match('/lexique/', $_SERVER['REQUEST_URI'])){
        $title = $nom . ' | lexique';
        $keywords = $nom;
        foreach($technologie as $tab){
            $keywords .= ', ' . $tab[1] . ' toulouse';
        }
        $description = 'Quelque définitions ...';
        $identifier = '';
    }else{
        $title = $nom . ' - ' . strtolower($poste) . ' ' . strtolower($ville);
        $keywords = $nom . ', ' . strtolower($nom) . ', cv ' . $nom . ', cv ' . $poste . ', cv ' . $poste . ' ' . $ville . ', ' . $poste . ' ' . $ville . ', ' . strtolower($poste). ' ' . strtolower($ville) . ', ' . noAccent(strtolower($poste)) . ' ' . strtolower($ville);
        $description = 'CV de ' . $nom . ', ' . strtolower($poste) . ' &agrave; ' . $ville;
        $identifier = '<meta name="identifier-URL" content="http://www.'.$_SERVER["SERVER_NAME"].'" />';
    }

?>
    <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml' xml:lang='fr' dir='ltr'>
            <head>
                <title><?php echo $title ?></title>
                <link rel='stylesheet' type='text/css' href='includes/css/front.css' />
                <link rel='stylesheet' type='text/css' href='includes/css/jquery.validationEngine.css' />
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <meta http-equiv="Content-language" content="fr" />
                <meta name='robots' content='index,follow,all' />
                <?php echo $identifier?><br/>
                <meta name='keywords' content='<?php echo $keywords ?>'/>
                <meta name='description' content='<?php echo $description ?>'/>

                <script type="text/javascript" src="includes/js/jquery.js"></script>
                <script type="text/javascript" src="includes/js/front.js"></script>
                <script type="text/javascript" src="includes/js/jquery.validationEngine-fr.js" charset="utf-8"></script>
                <script type="text/javascript" src="includes/js/jquery.validationEngine.js" charset="utf-8"></script>
                <link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
            </head>
