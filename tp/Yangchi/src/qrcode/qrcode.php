<?php
    namespace YangChi;
    $dir = dirname(__FILE__);
    $require_url = $dir."/../phpqrcode/";
    include_once($require_url."qrlib.php");
    class Qrcode{
        function showqrcode()
        {
            //set it to writable location, a place for temp generated PNG files
            $PNG_TEMP_DIR = dirname(__FILE__).'/../../../public/'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
            
            //html PNG location prefix
            $PNG_WEB_DIR = 'temp/';
            
            //ofcourse we need rights to create temp dir
            if (!file_exists($PNG_TEMP_DIR))
                mkdir($PNG_TEMP_DIR);
            
            
            $filename = $PNG_TEMP_DIR.'test.png';
            
            //processing form input
            //remember to sanitize user input in real-life solution !!!
            $errorCorrectionLevel = 'L';
            if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
                $errorCorrectionLevel = $_REQUEST['level'];    

            $matrixPointSize = 4;
            if (isset($_REQUEST['size']))
                $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);
                
            //display generated file
            return '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';
        }
    }
?>