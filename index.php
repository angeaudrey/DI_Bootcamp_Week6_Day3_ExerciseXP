
<?php
#Exercise1
    function checker(int $age) {
        if ($age >= 18) {
            $message = "Vous etes éligible";
        } else {
            $message = "Vous n'etes pas éligible";
        }

        echo $message;
    }

    $monage = 30;
    checker($monage);
?>
<?php
#Exercise 2

function aire(int $long,int $larg)
{
return $long*$larg;
}

echo aire(5,7);



?>

<?php
#Exercise3
function comparaison($n)
{

$repnose = $n>30 
? 'Plus grand que 30' 
: ($n>20
?'plus grand que 20'
: ($n>10
 ? 'plus grand que 10' 
: 'entrez un nombre plus grand que 10'));
echo $n." : ".$repnose."\n";
}

comparaison(5);
comparaison(12);


?>

<?php
#Exercise4
    function word_digit($mot) {

        $mots = explode(';',$mot);
        $resultat = '';
        
        foreach($mots as $value){
            switch(trim($value)){
                case 'zero':
                    $resultat .= '0';
                    break;
                case 'one':
                    $resultat .= '1';
                    break;
                case 'two':
                    $resultat .= '2';
                    break;
                case 'three':
                    $resultat .= '3';
                    break;
                case 'four':
                    $resultat .= '4';
                    break;
                case 'five':
                    $resultat .= '5';
                    break;
                case 'six':
                    $resultat .= '6';
                    break;
                case 'seven':
                    $resultat .= '7';
                    break;
                case 'eight':
                    $resultat .= '8';
                    break;
                case 'nine':
                    $resultat .= '9';
                    break;    
            }
        }
        return $resultat;
    }
	echo word_digit("zero;four;six;one")."\n";

?>
