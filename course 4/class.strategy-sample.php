<?php 
abstract class Localization {
    function formatMoney($sum)
    {
        number_format($sum);
    }
    function translate($phrase)
    {
        return $phrase;
    }
}
class English extends Localization
{
    function formatMoney($sum)
    {
        $text = '';
        if($sum<0){
            $text .= '-';
            $sum = abs($sum);
        }
        $text .='$' . number_format($sum, 2, '.', ',');
        return $text;
    }
}
class Russian extends Localization
{
    function formatMoney($sum)
    {
        $text = '';
        if($sum<0){
            $text .= '-';
            $sum = abs($sum);
        }
        $text .= number_format($sum, 2, ',', '.');
        return $text;
    }
    function translate($phrase)
    {
        if ($phrase == 'yes')
            return 'да';
        if ($phrase == 'no')
            return 'нет';
    }
}
echo 'English==================<br>';
$local = new English();
echo $local->formatMoney(231321654).'<br>';
echo $local->translate('yes')."<br>";
echo 'Russian==================<br>';
$local = new Russian();
echo $local->formatMoney(231321654).'<br>';
echo $local->translate('yes')."<br>";

 ?>