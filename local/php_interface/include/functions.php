<?

/**
 * Dump for debug
 *
 * @param        $obj
 * @param string $str
 * @param bool   $print
 * @param bool   $dbg
 */
function dump( $obj, $str = "DUMP", $print = false, $dbg = true)
{
    $str = " >>>>> " . $str . " <<<<< ";
    if ($dbg) {
        $debug = array_shift( debug_backtrace() );
        $str .= " file: " . $debug[ 'file' ] . "  //  line: " . $debug[ 'line' ];
    }
    
    if($print)
        echo $str, "<pre>", print_r($obj), "</pre>";
    else
        echo $str, "<pre>", print_r($obj), "</pre>";
}