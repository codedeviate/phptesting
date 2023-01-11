<?php
print "PHP: " . phpversion() . PHP_EOL;
$data = parse_ini_file('/etc/os-release', true, INI_SCANNER_NORMAL);
print "OS: " . $data["NAME"] . " - " . $data["VERSION_ID"];
?>