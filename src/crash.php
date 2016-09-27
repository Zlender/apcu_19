<?php

// Set PHP memory limit to something small to fill it up easily
ini_set('memory_limit','512K');

// Fill it almost to the max but not let it fail
$v = str_repeat("0", 253600);

// Apcu_cache_info will grab a read lock but won't be able to get needed memory
// and will log a FATAL. Read lock will stay in place on parent FPM process.
apcu_cache_info();
