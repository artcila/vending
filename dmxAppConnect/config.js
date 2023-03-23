dmx.config({
  "ProductPage": {
    "Show_all_products": [
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
      },
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
                "name": "name"
              },
              {
                "type": "text",
                "name": "price"
              },
              {
                "type": "text",
                "name": "stock"
              },
              {
                "type": "text",
                "name": "image"
              }
            ]
          }
        ]
      }
    ],
    "Show_all_products_Vend": [
      {
        "type": "text",
        "name": "data"
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
    "repeat1": {
      "meta": null,
      "outputType": "text"
    },
    "masonry1": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "price"
        }
      ],
      "outputType": "array"
    },
    "repeat2": {
      "meta": null,
      "outputType": "text"
    }
  }
});
