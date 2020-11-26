<?php
$data=@json_decode(file_get_contents('php://stdin'),1);
shell_exec("cd ".$data['project']['path']."; /bin/sh composer-update.sh;");