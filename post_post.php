<?php
$data=@json_decode(file_get_contents('php://stdin'),1);
error_log ( shell_exec( "APP_ENV=prod APP_DEBUG=0 php ".$data['project']['path']."/bin/console cache:clear" ));
error_log (  shell_exec( 'composer install --no-dev --optimize-autoloader --working-dir="'.$data['project']['path'].'"' ));