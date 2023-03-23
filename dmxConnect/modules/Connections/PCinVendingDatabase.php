<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$exports = <<<'JSON'
{
    "name": "PCinVendingDatabase",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "mysql",
        "connectionString": "mysql:host=vend.pcin.no;charset=utf8;sslverify=false;port=3306;dbname=nutrayqq_Vending_machine_wappler;user=nutrayqq_vend;password=VendingWappler",
        "meta"  : {}
    }
}
JSON;
?>