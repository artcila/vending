<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
[
  {
    "name": "vipps_auth_token_request",
    "module": "api",
    "action": "send",
    "options": {
      "url": "https://apitest.vipps.no/accesstoken/get",
      "method": "POST",
      "dataType": "json",
      "headers": {
        "client_id": "2d3dc36a-8e14-45c0-adf5-3af7a5f944d8",
        "client_secret": "HNr22v214Kq5fba60ighW10CjSw=",
        "Ocp-Apim-Subscription-Key": "65e061ed57264a829e8f46433a3ffde3"
      },
      "schema": [
        {
          "type": "object",
          "name": "data",
          "sub": [
            {
              "type": "text",
              "name": "token_type"
            },
            {
              "type": "text",
              "name": "expires_in"
            },
            {
              "type": "text",
              "name": "ext_expires_in"
            },
            {
              "type": "text",
              "name": "expires_on"
            },
            {
              "type": "text",
              "name": "not_before"
            },
            {
              "type": "text",
              "name": "resource"
            },
            {
              "type": "text",
              "name": "access_token"
            }
          ]
        },
        {
          "type": "object",
          "name": "headers",
          "sub": [
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
              "name": "expires"
            },
            {
              "type": "text",
              "name": "p3p"
            },
            {
              "type": "text",
              "name": "pragma"
            },
            {
              "type": "text",
              "name": "referrer-policy"
            },
            {
              "type": "text",
              "name": "request-context"
            },
            {
              "type": "text",
              "name": "strict-transport-security"
            },
            {
              "type": "text",
              "name": "x-content-type-options"
            },
            {
              "type": "text",
              "name": "x-ms-ests-server"
            },
            {
              "type": "text",
              "name": "x-ms-request-id"
            },
            {
              "type": "text",
              "name": "x-xss-protection"
            }
          ]
        }
      ]
    },
    "output": false,
    "meta": [
      {
        "type": "object",
        "name": "data",
        "sub": [
          {
            "type": "text",
            "name": "token_type"
          },
          {
            "type": "text",
            "name": "expires_in"
          },
          {
            "type": "text",
            "name": "ext_expires_in"
          },
          {
            "type": "text",
            "name": "expires_on"
          },
          {
            "type": "text",
            "name": "not_before"
          },
          {
            "type": "text",
            "name": "resource"
          },
          {
            "type": "text",
            "name": "access_token"
          }
        ]
      },
      {
        "type": "object",
        "name": "headers",
        "sub": [
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
            "name": "expires"
          },
          {
            "type": "text",
            "name": "p3p"
          },
          {
            "type": "text",
            "name": "pragma"
          },
          {
            "type": "text",
            "name": "referrer-policy"
          },
          {
            "type": "text",
            "name": "request-context"
          },
          {
            "type": "text",
            "name": "strict-transport-security"
          },
          {
            "type": "text",
            "name": "x-content-type-options"
          },
          {
            "type": "text",
            "name": "x-ms-ests-server"
          },
          {
            "type": "text",
            "name": "x-ms-request-id"
          },
          {
            "type": "text",
            "name": "x-xss-protection"
          }
        ]
      }
    ],
    "outputType": "object"
  },
  {
    "name": "Vipps_make_payment_request",
    "module": "api",
    "action": "send",
    "options": {
      "url": "https://apitest.vipps.no/ecomm/v2/payments",
      "method": "POST",
      "dataType": "json",
      "headers": {
        "Authorization": "{{vipps_auth_token_request.data.access_token}}",
        "Content-Type": "application/json",
        "Ocp-Apim-Subscription-Key": "65e061ed57264a829e8f46433a3ffde3"
      },
      "schema": [
        {
          "type": "array",
          "name": "data",
          "sub": [
            {
              "type": "text",
              "name": "errorMessage"
            },
            {
              "type": "text",
              "name": "orderId"
            },
            {
              "type": "text",
              "name": "url"
            }
          ]
        },
        {
          "type": "object",
          "name": "headers"
        }
      ],
      "data": {
        "merchantInfo": {
          "callbackPrefix": "https://webshop.pcin.no",
          "fallBack": "https://webshop.pcin.no",
          "merchantSerialNumber": 213800
        },
        "transaction": {
          "amount": 100,
          "orderId": "NEED_CREATE_TIME1970_in_seconds_or_other_not_repetative_combination_numbers",
          "transactionText": "product"
        }
      }
    },
    "output": false,
    "meta": [
      {
        "type": "array",
        "name": "data",
        "sub": [
          {
            "type": "text",
            "name": "errorMessage"
          },
          {
            "type": "text",
            "name": "orderId"
          },
          {
            "type": "text",
            "name": "url"
          }
        ]
      },
      {
        "type": "object",
        "name": "headers"
      }
    ],
    "outputType": "object"
  },
  {
    "name": "Check_order_detales",
    "module": "api",
    "action": "send",
    "options": {
      "url": "{{'https://apitest.vipps.no/ecomm/v2/payments/'+Vipps_make_payment_request.data.orderId+'/details'}}",
      "headers": {
        "Authorization": "{{vipps_auth_token_request.data.access_token}}",
        "Content-Type": "application/json",
        "Ocp-Apim-Subscription-Key": "65e061ed57264a829e8f46433a3ffde3"
      }
    },
    "output": true
  }
]
JSON
);
?>