<?php
   $dynamic_app = getenv('DYNAMIC_APP');
   $static_app = getenv('STATIC_APP');
?>

<VirtualHost *:80>
        ServerName labo.api.ch

        ProxyPass '/api/pets/' 'http://<?php print "$dynamic_app"?>/'
        ProxyPassReverse '/api/pets/' 'http://<?php print "$dynamic_app"?>/' 

        ProxyPass '/' 'http://<?php print "$static_app"?>/'
        ProxyPassReverse '/' 'http://<?php print "$static_app"?>/'
</VirtualHost>