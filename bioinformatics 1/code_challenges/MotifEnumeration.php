<?php
require(__DIR__.'/../../_common.php');

echo implode("\n", MotifEnumeration(
	array(
		'ATATCGCATGCTCAGCTGGGAAGAT',
		'AGGAATATCTCATATAGGGGTGATG',
		'TGGGGGGGCGCCGAAATATAGTTGG',
		'CCGCCGCCTTCGTAGCAGGGATCCA',
		'ACTGTCAGGGTGGGGGGTTTCGTTT',
		'CAGACCCGGTAAGGGAACGGTCACC'
	),
	5,
	2
));