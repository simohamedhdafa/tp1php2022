<?php 
define("N",9);

function ligne($i, $n, $tete=false){
    $s = "";
    if($tete){
        $s = "* ";
        for($i=0; $i<=$n; $i++) $s .= " ".$i." "; 
        $s .= "<br>";
    }else{
        $s .= $i." ";
        for($j=0; $j<=$n; $j++) $s .= " ".$i*$j." ";
        $s .= "<br>";
    } 
    return $s;
}

$titre = "TD1";
$html1 = <<<JUNIA2022
        <html>
            <head>
                <title>$titre</title>
            </head>
            <body>
        JUNIA2022;
$h1 = "EXERCICES DE TD";
$msg = "<p>bonjour tout le monde</p>";

$tab5 = "";
for($i=0; $i<=N; $i++) $tab5 .= "$i * 5 = ".(5*$i)."<br>";

$msg2 = "<p>$tab5</p>";

$msg3 = "<p>";
for($i=-1; $i<=N; $i++) $msg3 .= ligne($i, N, $i==-1);
$msg3 .= "</p>";

$html2 = <<<BOBM
        </body>
    </html>
    BOBM;

echo $html1."<h1>".$h1."</h1>".$msg.$msg2.$msg3.$html2;
