<?php

$json = json_decode($_POST['payload'], true);

// deployを実行する
if(!empty($json['commits'][0]['branch'])) {
  if ($json['commits'][0]['branch'] == 'production') exec('git checkout production;git pull');
}


