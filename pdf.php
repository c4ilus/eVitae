<?php
require_once('includes/fonctions/tcpdf/config/lang/eng.php');
require_once('includes/fonctions/tcpdf/tcpdf.php');
include('includes/pdo/get_data.php');

// creation d'un nouveau doc
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setPrintHeader ($val=false);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Marges
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();

$html = <<<EOF
<style>
    .partie
    {
        color:white;
        background-color:#153357;
        text-align:center;
     }

     .left
     {
        text-align:right;
        color:grey;
        font-style:italic;
        font-weight:bold;
     }

     .right
     {
        border-left:1px solid #E2E2E2;
     }

     .poste
     {
        text-align:center;
        color:#CC6600;
        font-weight:bold;
        border-top:1px solid #E2E2E2;
        border-bottom:1px solid #E2E2E2;
     }
</style>

EOF;



// -------- Informations personelles ---------------------------

$html .= '<table width="875"><tr>';
$html .= '<td><b>'.$nom.'</b><br/><br/>';
$html .= '<table width="500"><tr><td width="60"><u>Adresse</u> : </td><td>'.$adresse1.'</td></tr>';
if($adresse2 != ''){
    $html .= '<tr><td width="60">&nbsp;</td><td>'.$adresse2.'</td></tr>';
}
$html .= '<tr><td width="60">&nbsp;</td><td>'.$cp.' '.$ville.'</td></tr></table>';
$html .= '<u>Date naissance</u> : '.$naissance.'<br/>';
$html .= '<u>T&eacute;l&eacute;phone</u> : +33'.$telephone.'<br/>';
$html .= '<u>Mail</u> : '.$email.'<br/></td>';
$html .= '<td width="200" align="right" valign="top">';
if($permis != ''){
    $html .= 'Permis '.$permis.'';
}
if($vehicule == true)
{
    $html .= ' + V&eacute;hicule</td></tr>';
}else{
    $html .= '</td></tr>';
}
$html .= '<tr><td colspan="2" class="poste"><table cellpadding="5"><tr><td>'.$poste.'</td></tr></table></td></tr></table>';
$html .= '<br/>';

// -------- formations -----------------------------------------

$html .= '<table width="100%" cellpadding="5"><tr><td class="partie">Formations</td></tr>';

$html .= '<tr><td>';
foreach ($formations as $tab){
    $html .= '<table width="900" cellpadding="5" cellspacing="7"><tr>';
    if($tab[5] == 0){
        $html .= '<td width="170" class="left">Depuis ' . $tab[1] . '</td>';
    }else{
        $html .= '<td width="170" class="left">' . $tab[1] . '</td>';
    }
    $html .= '<td class="right"><strong>' . $tab[2] . '</strong> - ' . $tab[3] . '<br/>';
    $html .= '<em>' . $tab[4] . '</em></td>';
    $html .= '</tr></table>';
}
$html .= '</td></tr></table>';

$tab = '';

// ---------------- Expériences ---------------------------------

$html .= '<table cellpadding="5"><tr><td class="partie">Expériences Professionnelles</td></tr>';

$html .= '<tr><td>';
foreach ($experiences as $tab){
    $html .= '<table width="900" cellpadding="5" cellspacing="7"><tr>';
    if($tab[7] == 0){
        $html .= '<td width="170" class="left">Depuis ' . $tab[1] . '</td>';
    }else{
        $html .= '<td width="170" class="left">' . $tab[1] . '</td>';
    }
    $html .= '<td class="right"><strong>' . $tab[2] . '</strong> - <strong>' . $tab[3] . '</strong> - ' . $tab[4] . '<br/>';
    $html .= '<em>' . $tab[5] . '</em></td>';
    //$html .= $tab[6] . '<br/>';
    $html .= '</tr></table>';
}
$html .= '</td></tr></table>';

// -------- Compétences -----------------------------

$html .= '<table cellpadding="5"><tr><td class="partie">Compétences</td></tr>';

$html .= '<tr><td>';
foreach($competences as $tab){
    $html .= '<table width="900" cellpadding="5" cellspacing="7"><tr>';
    $html .= '<td width="170" class="left">' . $tab[1] . '</td>';
    $html .= '<td class="right"><em>' . $tab[2] . '</em></td>';
    $html .= '</tr></table>';
}
$html .= '</td></tr></table>';

$tab = '';

// -------- Langues --------------------------------

$html .= '<table cellpadding="5"><tr><td class="partie">Langues</td></tr>';

$html .=  '<tr><td>';
foreach($langues as $tab){
    $html .= '<table width="900" cellpadding="5" cellspacing="7"><tr>';
    $html .= '<td width="170" class="left">' . $tab[1] . '</td/>';
    $html .= '<td class="right"><em>' . $tab[2] . '</em></td>';
    $html .= '</tr></table>';
}
$html .= '</td></tr></table>';

$tab = '';

// -------- Complémtents ----------------------------

$html .= '<table cellpadding="5"><tr><td class="partie">Autres informations</td></tr>';

$html .= '<tr><td>';
foreach($complement as $tab){
    $html .= '<table width="900" cellpadding="5" cellspacing="7"><tr>';
    $html .= '<td width="170" class="left">' . $tab[1] . '</td>';
    $html .= '<td class="right"><em>' . $tab[2] . '</em></td>';
    $html .= '</tr></table>';
}
$html .= '</td></tr></table>';

$html .= '</body></html>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->lastPage();

$pdf->Output('cv', 'I');

?>
