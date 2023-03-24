<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "name": "api",
  "module": "api",
  "action": "send",
  "options": {
    "url": "http://login.vareautomater.no/apis/order/create?timestamp=1552102538&machineId=000130300002&pros={{ Product_ID.value }}&sign={{ MD5Hash_Value_for_create_order.value }}&method=8",
    "params": {
      "timestamp": "1552102538",
      "machineId": "000130300002",
      "pros": "{{ Product_ID.value }}",
      "sign": "{{ MD5Hash_Value_for_create_order.value }}",
      "method": "8"
    }
  },
  "output": true
}
JSON
);
?>