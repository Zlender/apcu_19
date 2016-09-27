<?php

for ($i = 0; $i < 8192; $i++) {
	  apcu_store("$i", str_repeat("0", 128));

}
