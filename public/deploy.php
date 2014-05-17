<?php

$json = json_decode($_POST);

if(!empty($json['commits'][0]['branch'])) {
  file_put_contents('./bitbucket_put.txt', $json['commits'][0]['branch']);
  exec('git pull');
} else {
  file_put_contents('./bitbucket_put.txt', $_POST);
}


