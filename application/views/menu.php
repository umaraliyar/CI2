<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Menus Tests</title>

    <link rel="stylesheet" href="../../../../build/base.css">
    <link rel="stylesheet" href="../../../../build/buttons.css">
    <link rel="stylesheet" href="../../../../build/menus.css">

    <style>
        #menu-1 {
            border: 1px solid;
        }

        #menu-1 li a {
            padding: 10px 20px;
            background:  rgb(150, 209, 255);
        }
    </style>
</head>

<body>
    <h1>Menus Tests</h1>

    <h2>Horizontal Menu</h2>

    <div class="pure-menu pure-menu-open pure-menu-horizontal">
        <a href="#" class="pure-menu-heading">Site Title</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="pure-menu-selected"><a href="#">Flickr</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Finance</a></li>
            <li class="pure-menu-disabled"><a href="#">Disabled</a></li>
        </ul>
    </div>

    <h2>Horizontal Menu (Custom)</h2>

    <div id="menu-1" class="pure-menu pure-menu-open pure-menu-horizontal">
        <a href="#" class="pure-menu-heading">Site Title</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="pure-menu-selected"><a href="#">Flickr</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Finance</a></li>
            <li class="pure-menu-disabled"><a href="#">Disabled</a></li>
        </ul>
    </div>

    <h2>Vertical Menu</h2>

    <div class="pure-menu pure-menu-open">
        <a href="#" class="pure-menu-heading">Site Title</a>
        <ul>
            <li class="pure-menu-selected"><a href="#">Home</a></li>
            <li><a href="#">Flickr</a></li>
            <li><a href="#">Messenger</a></li>
            <li class="pure-menu-heading">Yahoo! Sites</li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Finance</a></li>
            <li class="pure-menu-disabled"><a href="#">Disabled</a></li>
        </ul>
    </div>

    <div class="pure-menu pure-menu-open">
        <ul>
            <li class="pure-menu-heading">Site Title</li>
            <li class="pure-menu-selected"><a href="#">Home</a></li>
            <li><a href="#">Flickr</a></li>
            <li><a href="#">Messenger</a></li>
            <li class="pure-menu-heading">Yahoo! Sites</li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Finance</a></li>
            <li class="pure-menu-disabled"><a href="#">Disabled</a></li>
        </ul>
    </div>


    <h2>Add Dropdowns to Menus</h2>

    <p>
        Adding dropdowns to menus requires the use of JavaScript. The <code>Y.Menu</code> module adds dropdown functionality and the ability to create JavaScript menus. It uses <code>csslist</code> to style these menus, so they look identical.
    </p>

    <div id="horizontal-menu">
        <a href="#" class="pure-menu-heading">Site Title</a>
        <ul id="std-menu-items">
            <li class="pure-menu-selected"><a href="#">Flickr</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Finance</a></li>
            <li class="pure-menu-separator"></li>
            <li>
                <a href="#">Other</a>
                <ul>
                    <li class="pure-menu-heading">More from Yahoo!</li>
                    <li class="pure-menu-separator"></li>
                    <li><a href="#">Autos</a></li>
                    <li><a href="#">Flickr</a></li>
                    <li><a href="#">Answers</a></li>
                    <li>
                        <a href="#">Even More</a>
                        <ul>
                            <li><a href="#">Horoscopes</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">OMG</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>


    <h2>Fixed Menus</h2>

    <p>
        Fixed menus can be created by adding the <code>pure-menu-fixed</code> class name to the wrapper. This will fix a menu to the top of the page.
    </p>

    <p>
        <button class="pure-button" id="showFixedMenuBtn">Toggle Fixed Menu</button>
    </p>

    <div id="fixed-menu" class="pure-menu pure-menu-horizontal pure-menu-fixed">
        <ul>
            <li class="pure-menu-selected"><a href="#">Flickr</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Finance</a></li>
        </ul>
    </div>

    <h2>Paginator</h2>

    <ul class="pure-paginator">
        <li><a class="pure-button prev" href="#">&#171;</a></li>
        <li><a class="pure-button" href="#">1</a></li>
        <li><a class="pure-button pure-button-active" href="#">2</a></li>
        <li><a class="pure-button" href="#">3</a></li>
        <li><a class="pure-button" href="#">4</a></li>
        <li><a class="pure-button" href="#">5</a></li>
        <li><a class="pure-button next" href="#">&#187;</a></li>
    </ul>


    <script src="http://yui.yahooapis.com/3.12.0/build/yui/yui-min.js"></script>
    <script>
        var Y = YUI({
            fetchCSS: false,
            classNamePrefix: 'pure'
        }).use('gallery-sm-menu', 'event-tap', 'node-base', function (Y) {

            var horizontalMenu = new Y.Menu({
                container         : '#horizontal-menu',
                sourceNode        : '#std-menu-items',
                orientation       : 'horizontal',
                hideOnOutsideClick: false
            });

            horizontalMenu.render();
            horizontalMenu.show();

            Y.one('#showFixedMenuBtn').on('tap', function (e) {
                Y.one('#fixed-menu').toggleClass('pure-menu-open');
            });

        });
    </script>
</body>
</html>