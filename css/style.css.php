<?php
/*
 * This files uses lessphp to compile the style.less file upon load.
 * This makes it so you don't have to run a compiler in the background,
 * and instead it just runs when the file is called. Probably shouldn't
 * be used for production sites, but for building it's good.
 *
*/

// set header to make sure file is interpreted correctly
header('Content-Type: text/css');

// pull in the lessphp library
require('lessphp/lessc.inc.php');

// create a new lessphp object, compile/echo the lessified css.
$less = new lessc;
echo $less->compileFile('style.less');

// end.
?>