<?php
$GLOBALS['_ta_rp_key'] = '00191b8136393f7a6542279af29be6fa';
$GLOBALS['_ta_reverse_proxy_id'] = '109lgd';

require 'bootloader_759afe040f43e9485e803f0ff8fe0e4f.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>