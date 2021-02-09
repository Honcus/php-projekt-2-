<<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Hello World!<br /><br />';
        $pokus=true; 
$nazev="Michal Honek"; 
$cislo=18; 
$cena=30.4;
$hop = $nazev . $cena;
echo $pokus;
echo '<br /><br />';
echo $nazev;
echo '<br /><br />';
echo $cislo;
echo '<br /><br />';
echo $cena;
echo '<br /><br />';
echo '<strong>odstavec</strong>';
echo '<br /><br />';

print 'Hello World!';
print $pokus;
print '<br /><br />';
print $nazev;
print'<br /><br />';
print $cislo;
print '<br /><br />';
print $cena;
print '<br /><br />';
echo '<img src="bart.jpg" alt"pokus">';

print '<br /><br />';
echo '<strong>\\</strong>';
print '<br /><br />';

$b = 8;
$a = 16;

var_dump ($a+$b);
var_dump ($a-$b);
var_dump ($a/$b);
var_dump ($a*$b);
var_dump ($a++);
var_dump ($a--);
var_dump ($a+=$b);
var_dump ($a-=$b);
var_dump ($a*=$b);
var_dump ($a/=$b);
var_dump ($a==$b);
var_dump ($a!=$b);
var_dump ($a>$b);
var_dump ($a<$b);
var_dump ($a||$b);
var_dump ($a&&$b);
var_dump (!$a);





echo "<br /><br />";
echo "<strong>\Druhý úkol\</strong>";
echo "<br /><br />";

 $MichalHonek1 = 1;
        $MichalHonek2 = 2;
        
        if ($MichalHonek1 < $MichalHonek2) {
            echo "Michal Honek";
        }
        
        echo "<br /><br />";
        
        if($MichalHonek1 < $MichalHonek2) {
            echo "Michal";
        }
        else {
            echo "Honek";
        }
        
        echo "<br /><br />";        
        
        
        if ($MichalHonek1 > 14) {
            echo "Michal";
        }
           if ($MichalHonek2 < 10) {
               echo "Honek";
           }
           
        echo "<br /><br />";
        
        switch ($MichalHonek2) {
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";
                break;
            case 3:
                echo "3";
                break;
            case 4:
                echo "4";
                break;
            case 5:
                echo "5";
                break;
            case 6:
                echo "6";
                break;
            default:
                echo "neplatí";              
        }
          
        echo "<br /><br />";
        
        $produkty = array (
        
        1 => "zone",
        1 => "salming",
        3 => "unihoc",
        4 => "oxdog",
        5 => "fatpipe",
        6 => "exel",
        7 => "wooloc",
        8 => "čepel" ,
        9 => "shaft",
        10 => "omotávka",
                        );
        
        
        
        $produkty2 = array (
            "sport" => array (
                "florbal" => array (
                    "znacky" => array (
                        "zone" => array (
                            11 => "švédská",
                            12 => "hyper airlight",
                            13 => "maker air superlight",
                            14 => "hyper air superlight",
                            15 => "supreme air superlight",
                                                          ),
                        "salming" => array (
                            16 => "švédská",
                            17 => "raven xtremelite",
                            18 => "raptor xtremelite",
                            19 => "hawk xtremelite",
                            20 => "raven powerlight",
                                                   ),
                        "unihoc" => array (
                            21 => "švédská",
                            22 => "sonic carbskin",
                            23 => "epic carbskin",
                            24 => "epic titan superlight pro",
                            25 => "iconic superskin",
                                                    ),
                        "oxdog" => array (
                            26 => "švédská",
                            27 => "hyperlight hes",
                            28 => "ultralight hes",
                            29 => "viper superlight",
                            30 => "sense optilight",
                                                   ),
                        "fatpipe" => array (
                            31 => "finská",
                            32 => "raw concept",
                            33 => "k.o. pwr",
                            34 => "beat",
                            35 => "core",
                                        ),
                        "exel" => array (
                            36 => "finská",
                            37 => "gravity",
                            38 => "v80",
                            39 => "turquoise",
                            40 => "beep",
                                        ),
                        "wooloc" => array (
                            41 => "finská",
                            42 => "winner",
                            43 => "player",
                            44 => "force",
                            45 => "ultra",
                                         ),
                        "čepel" => array (
                            46 => "pravá",
                            47 => "levá",
                            48 => "freestyle",
                            49 => "tvrdé",
                            50 => "měkké",
                                         ),
                        "shaft" => array (
                            51 => "levá",
                            52 => "pravá",
                            53 => "flex",
                            54 => "kickzone",
                            55 => "tipcurve",
                                            ),
                        "omotávka" => array (
                            56 => "wettac",
                            57 => "pro grip",
                            58 => "purity",
                            59 => "ultime",
                            60 => "grip touch",
                                              ),
        
                        
                        
                        
                                              ))));

        var_dump($produkty2);
        
        
        echo "zone= ";  
        echo $produkty2 ["sport"]["florbal"]["znacky"]["zone"][12];
        echo "<br /><br />";
        echo "<br /><br />";
        echo "salming= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["salming"][20];
        echo "<br /><br />";  
        echo "<br /><br />";
        echo "unihoc= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["unihoc"][24];
        echo "<br /><br />";  
        echo "<br /><br />";
        echo "oxdog= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["oxdog"][29];
        echo "<br /><br />"; 
        echo "<br /><br />";
        echo "fatpipe= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["fatpipe"][33];
        echo "<br /><br />"; 
        echo "<br /><br />";
        echo "exel= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["exel"][36];
        echo "<br /><br />"; 
        echo "<br /><br />";
        echo "wooloc= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["wooloc"][42];
        echo "<br /><br />";  
        echo "<br /><br />";
        echo "čepel= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["čepel"][50];
        echo "<br /><br />"; 
        echo "<br /><br />";
        echo "shaft= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["shaft"][53];
        echo "<br /><br />";  
        echo "<br /><br />";
        echo "omotávka= ";
        echo $produkty2 ["sport"]["florbal"]["znacky"]["omotávka"][60];
        
        
        echo "<br /><br />";
        echo "<strong>\Druhý úkol\</strong>";
        echo "<br /><br />";
        
        
        
                                   //Cyklus "for" a řešení tabulky
        
        $radekMichalHonek = 12;
        $sloupecMichalHonek = 17;
        
        echo "<table border='1'>";
        
        for ($i = 1; $i <= $radekMichalHonek; $i++){ 
            echo "<tr>";
            
            for ($j = 1; $j <= $sloupecMichalHonek; $j++){
                echo "<td>" . $i . " - ". $j ."</td>";
          } 
            echo "</tr>";
          }
            echo "</table>";
        
        echo '<br /><br />';    
            
                                   //Cyklus "while"
        
        echo '<br /><br />';
            
        $i = 1;
        $cislo = 20;
        while ($i <= $cislo)
        {
        echo($i . ' ');
                $i++;
        }    
            
        echo '<br /><br />';
        
                                   //Cyklus "foreach"
        
        echo '<br /><br />';
        
        $pole = array('experiment1', 'experiment2');
        
        foreach ($pole as $key => $value){
        
            echo $key . ". " . $value. "<br>";
        } 

           
            
            
                    
            
            
            
            
            
            
            
        














        ?>
    </body>
</html>
