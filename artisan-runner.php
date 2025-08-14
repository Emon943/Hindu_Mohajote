<?php
// artisan-runner.php

// Run composer dump-autoload
exec('/opt/cpanel/composer/bin/composer dump-autoload', $output1, $return1);
echo "Composer dump-autoload:\n";
echo implode("\n", $output1) . "\n\n";

// Run artisan optimize:clear
exec('php artisan optimize:clear', $output2, $return2);
echo "Artisan optimize:clear:\n";
echo implode("\n", $output2) . "\n";
?>