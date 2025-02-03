<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Utils
{
    public function showAlert($type="", $msg = "")
    {
        echo "<div class=\"alert $type\">";
        echo "<span class=\"closebtn\">&times;</span>";
        echo "<strong>Perhatian!</strong> ".$msg;
        echo "</div>";
    }
    
    public function unique_multidim_array($array, $key)
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();
   
        foreach ($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }
}
