<?php
$paginaHTML = file_get_contents('template/index.html');

$menuLoginProfilo = "<li class=\"login\"><a href=\"login.php\">Accedi</a></li>";
session_start();
if (isset($_SESSION['username'])) 
    $menuLoginProfilo = "<li class=\"profile\"><a href=\"profilo.php\">Profilo</a></li>";

$paginaHTML = str_replace('[loginProfilo]', $menuLoginProfilo, $paginaHTML);
echo $paginaHTML;
?>