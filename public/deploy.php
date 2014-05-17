<?php

$json = json_decode('{"repository": {"website": "", "fork": false, "name": "marcierge_blog", "scm": "git", "owner": "marcierge_project", "absolute_url": "/marcierge_project/marcierge_blog/", "slug": "marcierge_blog", "is_private": true}, "truncated": false, "commits": [{"node": "47269f46ffaf", "files": [{"type": "modified", "file": "README.md"}], "raw_author": "hatch2 <hiroaki@hatch2.com>", "utctimestamp": "2014-05-17 04:31:35+00:00", "author": "hatch2", "timestamp": "2014-05-17 06:31:35", "raw_node": "47269f46ffaf82b45b446e690cfc808f7451c081", "parents": ["80239d2b070b"], "branch": "master", "message": "\u30ed\u30fc\u30ab\u30eb\u3066\u3099\u4f5c\u696d\u3059\u308b\u74b0\u5883\u306e\u69cb\u7bc9\u306b\u3064\u3044\u3066 init\n", "revision": null, "size": -1}], "canon_url": "https://bitbucket.org", "user": "hatch2"}', true);

// deployを実行する
if(!empty($json['commits'][0]['branch'])) {
  if ($json['commits'][0]['branch'] == 'master') exec('git pull');
}


