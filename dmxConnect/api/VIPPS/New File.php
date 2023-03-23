<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
[
  {
    "name": "websiet",
    "module": "core",
    "action": "setvalue",
    "options": {
      "value": "https://www.pcin.no/",
      "key": "website"
    },
    "meta": [],
    "outputType": "text"
  },
  {
    "name": "pcin",
    "module": "core",
    "action": "redirect",
    "options": {
      "url": "{{websiet}}"
    },
    "disabled": true,
    "output": true
  }
]
JSON
);
?>