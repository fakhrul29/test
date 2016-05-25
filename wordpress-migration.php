<?php
	$prefix = 'wp_';
	$source = '<SOURCE URL>';
	$destination = '<DESTINATION URL>';
	
	echo  <<<SQL
	update `{$prefix}options` set `option_value` = replace(`option_value`,'$source' , '$destination');

	update `{$prefix}posts` set `post_content` = replace( `post_content`,'$source' , '$destination'),  `guid` = replace( `guid`,'$source' , '$destination');

SQL;

?> 