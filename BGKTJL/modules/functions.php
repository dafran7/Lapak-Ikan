<?php
/*
Sanitize class
Copyright (C) 2007 CodeAssembly.com


This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.


You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/

*/

/**
* Sanitize only one variable .
* Returns the variable sanitized according to the desired type or true/false
* for certain data types if the variable does not correspond to the given data type.
*
* NOTE: True/False is returned only for telephone, pin, id_card data types
*
* @param mixed The variable itself
* @param string A string containing the desired variable type
* @return The sanitized variable or true/false
*/

function sanitizeOne($var, $type) {

switch ( $type ) {

case 'int': // integer
$var = (int) $var;
break;

case 'str': // trim string
$var = trim ( $var );
break;

case 'nohtml': // trim string, no HTML allowed
$var = htmlentities ( trim ( $var ), ENT_QUOTES );
break;

case 'plain': // trim string, no HTML allowed, plain text
$var =  htmlentities ( trim ( $var ) , ENT_NOQUOTES )  ;
break;

case 'upper_word': // trim string, upper case words
$var = ucwords ( strtolower ( trim ( $var ) ) );
break;

case 'ucfirst': // trim string, upper case first word
$var = ucfirst ( strtolower ( trim ( $var ) ) );
break;

case 'lower': // trim string, lower case words
$var = strtolower ( trim ( $var ) );
break;

case 'urle': // trim string, url encoded
$var = urlencode ( trim ( $var ) );
break;

case 'trim_urle': // trim string, url decoded
$var = urldecode ( trim ( $var ) );
break;

case 'telephone': // True/False for a telephone number
$size = strlen ($var) ;
for ($x=0;$x<$size;$x++) {
if ( ! ( ( ctype_digit($var[$x] ) || ($var[$x]=='+') || ($var[$x]=='*') || ($var[$x]=='p')) ) ) {
return false;
}
}
return true;
break;

case 'sql': // True/False if the given string is SQL injection safe
//  insert code here, I usually use ADODB -> qstr() but depending on your needs you can use mysql_real_escape();
return mysql_real_escape_string($var);
break;

}
return $var;
}





/**
* Sanitize an array.
*
* sanitize($_POST, array('id'=>'int', 'name' => 'str'));
* sanitize($customArray, array('id'=>'int', 'name' => 'str'));
*
* @param array $data
* @param array $whatToKeep
*/

function sanitize( &$data, $whatToKeep ) {

$data = array_intersect_key( $data, $whatToKeep );
foreach ($data as $key => $value) {
$data[$key] = sanitizeOne( $data[$key] , $whatToKeep[$key] );
}
}

?>

<?php
function strip_word_html($text, $allowed_tags = '<b><i><sup><sub><em><strong><u><br>')
{
    mb_regex_encoding('UTF-8');
    //replace MS special characters first
    $search = array('/&lsquo;/u', '/&rsquo;/u', '/&ldquo;/u', '/&rdquo;/u', '/&mdash;/u');
    $replace = array('\'', '\'', '"', '"', '-');
    $text = preg_replace($search, $replace, $text);
    //make sure _all_ html entities are converted to the plain ascii equivalents - it appears
    //in some MS headers, some html entities are encoded and some aren't
    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
    //try to strip out any C style comments first, since these, embedded in html comments, seem to
    //prevent strip_tags from removing html comments (MS Word introduced combination)
    if(mb_stripos($text, '/*') !== FALSE){
        $text = mb_eregi_replace('#/\*.*?\*/#s', '', $text, 'm');
    }
    //introduce a space into any arithmetic expressions that could be caught by strip_tags so that they won't be
    //'<1' becomes '< 1'(note: somewhat application specific)
    $text = preg_replace(array('/<([0-9]+)/'), array('< $1'), $text);
    $text = strip_tags($text, $allowed_tags);
    //eliminate extraneous whitespace from start and end of line, or anywhere there are two or more spaces, convert it to one
    $text = preg_replace(array('/^\s\s+/', '/\s\s+$/', '/\s\s+/u'), array('', '', ' '), $text);
    //strip out inline css and simplify style tags
    $search = array('#<(strong|b)[^>]*>(.*?)</(strong|b)>#isu', '#<(em|i)[^>]*>(.*?)</(em|i)>#isu', '#<u[^>]*>(.*?)</u>#isu');
    $replace = array('<b>$2</b>', '<i>$2</i>', '<u>$1</u>');
    $text = preg_replace($search, $replace, $text);
    //on some of the ?newer MS Word exports, where you get conditionals of the form 'if gte mso 9', etc., it appears
    //that whatever is in one of the html comments prevents strip_tags from eradicating the html comment that contains
    //some MS Style Definitions - this last bit gets rid of any leftover comments */
    $num_matches = preg_match_all("/\<!--/u", $text, $matches);
    if($num_matches){
        $text = preg_replace('/\<!--(.)*--\>/isu', '', $text);
    }
    return $text;
}
