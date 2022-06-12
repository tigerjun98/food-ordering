<?php declare(strict_types=1);

$res = shell_exec("php artisan horizon:status");

if($res !== "Horizon is running.\n") {
    echo "horizon is not running, starting it\n";
    $fp = popen("php artisan horizon", "r");
    while (!feof($fp)) {
        $buffer = fgets($fp, 4096);
        echo $buffer;
    }
    echo "horizon was terminated\n";
    pclose($fp);
} else {
    echo "horizon is running\n";
}
