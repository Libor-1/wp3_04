<?php
require_once __DIR__ . '/vendor/autoload.php'; 
?>
<?php

$firstname ="Martin";
$lastname ="Kokeš";

$myDocument = new \Mpdf\Mpdf();
$myDocument -> WriteHTML('<h1>Hello world!</h1>');
$myDocument -> WriteHTML('<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla pulvinar eleifend sem. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Aenean fermentum risus id tortor. Duis viverra diam non justo. Aenean id metus id velit ullamcorper pulvinar. Suspendisse sagittis ultrices augue.</p>');
$myDocument -> WriteHTML('<ul>');
$myDocument -> WriteHTML("<li>Jméno:$firstname</li>");
$myDocument -> WriteHTML("<li>Jméno:$lastname</li>");
$myDocument -> WriteHTML('</ul>');
$myDocument -> Output();  

?>
<?php
$employee[0]['firstname']= "Libor"; 
$employee[0]['lastname']= "Pluháček"; 
$employee[0]['salary']= 30000; 
$employee[1]['firstname']= "Tomáš";
$employee[1]['lastname']= "Plaček";
$employee[1]['salary']= "15000";  
$employee[2]['firstname']= "Martin";  
$employee[2]['lastname']= "Kokeš"; 
$employee[2]['salary']= "50000"; 

?>
<?php

for ($i=0; $i < count($employee); $i++) {
    echo $employee[$i]['firstname'] . ": " ;
    echo $employee[$i]['ĺastname'] . ": " ;
    echo $employee[$i]['salary'] . ": " ;
    
    ?>
    <br>
     <?php
}
?>



