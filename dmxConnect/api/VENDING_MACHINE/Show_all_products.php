<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "name": "fetch_products",
  "module": "api",
  "action": "send",
  "options": {
    "url": "http://login.vareautomater.no/apis/machine/products?",
    "params": {
      "timestamp": "1552102538",
      "machineId": "000130300002",
      "sign": "95D72DCC82EBD6C3BD19EBE180EEFD44"
    },
    "schema": [
      {
        "type": "array",
        "name": "data",
        "sub": [
          {
            "type": "array",
            "name": "data",
            "sub": [
              {
                "type": "text",
                "name": "id"
              },
              {
                "type": "text",
                "name": "price"
              }
            ]
          }
        ]
      },
      {
        "type": "object",
        "name": "headers",
        "sub": [
          {
            "type": "text",
            "name": "access-control-allow-credentials"
          },
          {
            "type": "text",
            "name": "access-control-allow-headers"
          },
          {
            "type": "text",
            "name": "access-control-allow-methods"
          },
          {
            "type": "text",
            "name": "access-control-allow-origin"
          },
          {
            "type": "text",
            "name": "cache-control"
          },
          {
            "type": "text",
            "name": "content-length"
          },
          {
            "type": "text",
            "name": "content-type"
          },
          {
            "type": "text",
            "name": "date"
          },
          {
            "type": "text",
            "name": "server"
          },
          {
            "type": "text",
            "name": "x-aspnet-version"
          },
          {
            "type": "text",
            "name": "x-aspnetmvc-version"
          },
          {
            "type": "text",
            "name": "x-powered-by"
          }
        ]
      }
    ]
  },
  "output": true,
  "meta": [
    {
      "type": "array",
      "name": "data",
      "sub": [
        {
          "type": "array",
          "name": "data",
          "sub": [
            {
              "type": "text",
              "name": "id"
            },
            {
              "type": "text",
              "name": "price"
            }
          ]
        }
      ]
    },
    {
      "type": "object",
      "name": "headers",
      "sub": [
        {
          "type": "text",
          "name": "access-control-allow-credentials"
        },
        {
          "type": "text",
          "name": "access-control-allow-headers"
        },
        {
          "type": "text",
          "name": "access-control-allow-methods"
        },
        {
          "type": "text",
          "name": "access-control-allow-origin"
        },
        {
          "type": "text",
          "name": "cache-control"
        },
        {
          "type": "text",
          "name": "content-length"
        },
        {
          "type": "text",
          "name": "content-type"
        },
        {
          "type": "text",
          "name": "date"
        },
        {
          "type": "text",
          "name": "server"
        },
        {
          "type": "text",
          "name": "x-aspnet-version"
        },
        {
          "type": "text",
          "name": "x-aspnetmvc-version"
        },
        {
          "type": "text",
          "name": "x-powered-by"
        }
      ]
    }
  ],
  "outputType": "object"
}
JSON
);
?>