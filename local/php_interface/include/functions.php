<?

function dump($obj, $str = "DUMP", $print = false, $dbg = true)
{
    $debug = array_shift(debug_backtrace());
    
    $str = " >>>>> " . $str . " <<<<< ";
    if ($dbg)
        $str .= " file: " . $debug['file'] . "  //  line: " . $debug['line'];

    if($print)
        echo $str, "<pre>", print_r($obj), "</pre>";
    else
        echo $str, "<pre>", print_r($obj), "</pre>";
}