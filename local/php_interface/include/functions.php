<?

function dump($obj, $str = ">>>>> DUMP >>>>>", $print = false)
{
    if($print)
        echo $str, "<pre>", print_r($obj), "</pre>";
    else
        echo $str, "<pre>", print_r($obj), "</pre>";
}