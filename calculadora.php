<?php
/**
 * plugin name: Calculadora
 * version: 2.0
 * authors: Nicolas e José
 * 
*/

function calc ($atts) 
{
    return '<iframe src="'.plugins_url().'/calculadora/index.php" frameborder="0" width="1000" height="1000" style="border:0">';   //frameborder='0'  allowfullscreen></iframe>";
}

add_shortcode('calculadora', 'calc');