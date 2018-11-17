<?php
/**
 * plugin name: ababa
*/

function calc ($atts) 
{
    return '<iframe src="'.plugins_url().'/teste/index.php" frameborder="0" width="600" height="350" style="border:0">';   //frameborder='0'  allowfullscreen></iframe>";
}

add_shortcode('calculadora', 'calc');