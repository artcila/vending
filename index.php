<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js" integrity="sha256-VrmtNHAdGzjNsUNtWYG55xxE9xDTz4gF63x/prKXKH0=" crossorigin="anonymous"></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxMasonry/dmxMasonry.js" defer></script>

    <script src="dmxAppConnect/dmxTyped/dmxTyped.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/typed.min.js" defer></script>
</head>

<body is="dmx-app" id="ProductPage">


    <dmx-serverconnect id="Vending_show_all_products" url="dmxConnect/api/VENDING_MACHINE/Show_all_products.php"></dmx-serverconnect>
    <dmx-serverconnect id="ButtonClick_vipps_process_start" url="dmxConnect/api/VIPPS/New%20File.php"></dmx-serverconnect>
    <div class="container">


    </div>
    <div class="container wappler-block pt-4 pb-4 style4">

        <div class="row style3" is="dmx-masonry" id="masonry1" columns-sm="3" columns-lg="4" columns-xl="5" columns-md="4" columns="2" dmx-bind:repeat="Vending_show_all_products.data.fetch_products.data.data">
            <div class="offset-md-0 col-md-4 col-sm-5 mh-100 style2 col-4" dmx-on:click="ButtonClick_vipps_process_start.load({})">
                <dmx-value id="var1" dmx-bind:value="data[0].id" dmx-on:updated="" onupdated=""></dmx-value>


                <div class="d-block mh-100 style1" dmx-text="name"></div>
                <img dmx-bind:src="image" height="150" class="mh-100">
                <p dmx-text="price">A nice paragraph</p>


            </div>
        </div>
    </div>



    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>