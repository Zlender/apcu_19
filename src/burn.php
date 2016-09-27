<?php

// Apcu_cache_info will grab a read lock so anything that requires write lock
// will wait.
// [17:35:02] root@ded-21.rzlender:/var/www/html/rokd8.prod/docroot# strace -p 10250
// Process 10250 attached - interrupt to quit
// futex(0x7f8133800094, FUTEX_WAIT, 0, NULL^C <unfinished ...>
apcu_add("foo", "bar");
