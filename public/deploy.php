<?php

// ごめんこれでゆるして
exec('git reset --hard;git clean -df');
exec('git checkout master;git pull');
exec('cp /var/www/sites/deploy_blog_ikikau/wp-config.php .');
