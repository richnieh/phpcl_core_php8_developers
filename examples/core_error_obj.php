<?php
// core_error_obj.php
include __DIR__ . '/includes/try_catch_test.php';

// accessing a property of a non-object
echo test(function () { 
	$a->test = 0;
	$a->test++;
	return $a->test;
});
