<!DOCTYPE html>
<html lang="en">
<head>
	
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Welcome to Umar's CodeIgniter</title>
	<link href="<?php echo base_url();?>css/pure-min.css" type="text/css" rel="stylesheet"/>
	<link href="<?php echo base_url();?>css/menu.css" type="text/css" rel="stylesheet"/>
	
<style>
#container{
width:100%;
padding:0;
}
#wrapper{
width:96%;
margin:0 auto;


}
.pure-menu{
position:fixed;
width:100%;
 top: 0;
    left: 0;
    border-top: 5px solid #a1cb2f;
	
z-index:999999;

}
</style>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
	
</head>
<body>
<div id="container">
<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="#">Home</a></li>
			<li><a href="#">How-to</a></li>
			<li><a href="#">Icons</a></li>
			<li><a href="#">Design</a></li>
			<li><a href="#">Web 2.0</a></li>
			<li><a href="#">Tools</a></li>	
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
	
<!-- Forms -->
<div id="wrapper">
<h1>Forms Tests</h1>

    <h2>Default Form</h2>

    <form class="pure-form">
        <fieldset>
            <legend>A default inline form.</legend>

            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">

            <label>
                <input type="checkbox"> Remember me
            </label>

            <button type="submit" class="pure-button">Sign in</button>
        </fieldset>
    </form>


    <h2>Multi-Column Form with Grids</h2>

    <form class="pure-form pure-form-stacked">
        <fieldset>
            <legend>Legend</legend>

            <div class="pure-g-r">
                <div class="pure-u-1-3">
                    <label>First Name</label>
                    <input type="text">
                </div>
                <div class="pure-u-1-3">
                    <label>Password</label>
                    <input type="password">
                </div>
                <div class="pure-u-1-3">
                    <label>E-Mail</label>
                    <input type="email" required>
                </div>
                <div class="pure-u-1-3">
                    <label>City</label>
                    <input type="text">
                </div>
                <div class="pure-u-1-3">
                    <label>State</label>
                    <select class="pure-input-medium">
                        <option>AL</option>
                        <option>CA</option>
                        <option>IL</option>
                        <option>MD</option>
                        <option>NY</option>
                    </select>
                </div>
            </div>

            <label class="pure-checkbox">
                <input type="checkbox"> I've read the terms and conditions
            </label>

            <button type="submit" class="pure-button">Submit</button>
            <button type="reset" class="pure-button">Reset</button>
        </fieldset>
    </form>


    <h2>Stacked Form</h2>

    <form class="pure-form pure-form-stacked">
        <fieldset>
            <legend>Legend</legend>

            <label>First Name</label>
            <input type="text">

            <label>Password</label>
            <input type="password">

            <label>E-Mail</label>
            <input type="email" required>
            <aside class="pure-help-inline">This is a required field.</aside>

            <label>City</label>
            <input type="text">
            <aside class="pure-form-message">This is another required field.</aside>

            <label>State</label>
            <select class="pure-input-medium">
                <option>AL</option>
                <option>CA</option>
                <option>IL</option>
                <option>MD</option>
                <option>NY</option>
            </select>

            <label class="pure-checkbox">
                <input type="checkbox"> I've read the terms and conditions
            </label>

            <button type="submit" class="pure-button notice">Submit</button>
            <button type="reset" class="pure-button">Reset</button>
        </fieldset>
    </form>


    <h2>Aligned Form</h2>

    <form class="pure-form pure-form-aligned">
        <fieldset>
            <div class="pure-control-group">
                <label>Username</label>
                <input type="text" placeholder="Username">
                <aside class="pure-form-message-inline">This is a <code>pure-form-message-inline</code> field.</aside>
            </div>

            <div class="pure-control-group">
                <label>Password</label>
                <input type="password" placeholder="Password">
                <aside class="pure-help-inline">This is a <code>pure-help-inline</code> field. Deprecated.</aside>
            </div>

            <div class="pure-control-group">
                <label>Email Address</label>
                <input type="text" placeholder="Email Address">
            </div>

            <div class="pure-control-group">
                <label>Here's a button</label>
                <input type="button" value="Button" class="pure-button">
            </div>

            <div class="pure-control-group">
                <label>Supercalifragilistic Label</label>
                <input type="text" placeholder="Enter something here...">
            </div>

            <div class="pure-controls">
                <label class="pure-checkbox">
                    <input type="checkbox"> Remember Me
                </label>

                <button type="submit" class="pure-button">Submit</button>
            </div>
        </fieldset>
    </form>


    <h2>Grouped Inputs</h2>

    <form class="pure-form">
        <fieldset class="pure-group">
            <input type="text" class="pure-input-1-3" placeholder="Username">
            <input type="text" class="pure-input-1-3" placeholder="Password">
            <input type="text" class="pure-input-1-3" placeholder="Email">
        </fieldset>

        <fieldset class="pure-group">
            <input type="text" class="pure-input-1-3" placeholder="Another Group">
            <input type="text" class="pure-input-1-3" placeholder="More Stuff">
            <button type="submit" class="pure-button pure-input-1-3">Sign in</button>
        </fieldset>
    </form>


    <h2>Input Sizing</h2>

    <form class="pure-form">
        <input class="pure-input-1" type="text" placeholder=".pure-input-1"><br/>
        <input class="pure-input-2-3" type="text" placeholder=".pure-input-2-3"><br/>
        <input class="pure-input-1-2" type="text" placeholder=".pure-input-1-2"><br/>
        <input class="pure-input-1-3" type="text" placeholder=".pure-input-1-3"><br/>
        <input class="pure-input-1-4" type="text" placeholder=".pure-input-1-4"><br/>
    </form>


    <form class="pure-form">
        <div class="pure-g">
            <div class="pure-u-1-4">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-4">
            </div>

            <div class="pure-u-3-4">
                <input class="pure-input-1" type="text" placeholder=".pure-u-3-4">
            </div>
        </div>

        <div class="pure-g">
            <div class="pure-u-1-2">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-2">
            </div>

            <div class="pure-u-1-2">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-2">
            </div>
        </div>

        <div class="pure-g">
            <div class="pure-u-1-8">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-8">
            </div>

            <div class="pure-u-1-8">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-8">
            </div>

            <div class="pure-u-1-4">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-4">
            </div>

            <div class="pure-u-1-2">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-2">
            </div>
        </div>

        <div class="pure-g">
            <div class="pure-u-1-5">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1-5">
            </div>

            <div class="pure-u-2-5">
                <input class="pure-input-1" type="text" placeholder=".pure-u-2-5">
            </div>

            <div class="pure-u-2-5">
                <input class="pure-input-1" type="text" placeholder=".pure-u-2-5">
            </div>

            <div class="pure-u-1">
                <input class="pure-input-1" type="text" placeholder=".pure-u-1">
            </div>
        </div>
    </form>


    <h2>Invalid Inputs</h2>

    <form class="pure-form">
        <input type="email" placeholder="Requires an email" required>
    </form>


    <h2>Disabled Inputs</h2>

    <form class="pure-form">
        <input class="pure-input-xlarge" type="text" placeholder="Disabled input here..." value="Foo bar baz" disabled>
    </form>


    <h2>Readonly Inputs</h2>

    <form class="pure-form">
        <input class="pure-input-xlarge" type="text" placeholder="Readonly input here..." value="Foo bar baz" readonly>
    </form>


    <h2>Rounded Form</h2>

    <form class="pure-form pure-form-stacked">
        <label>Subject</label>
        <input type="text" class="pure-input-rounded" placeholder="Subject" />

        <label>Message</label>
        <textarea class="pure-input-rounded" rows="5" cols="40" placeholder="Message..."></textarea>

        <button type="submit" class="pure-button pure-input-rounded">Search</button>
        <input type="reset" class="pure-button pure-input-rounded" value="Reset" />
    </form>


    <h2>Selects</h2>

    <form class="pure-form">
        <select class="pure-input-medium">
            <option>Brazil</option>
            <option>Canada</option>
            <option>United States</option>
            <option>United Kingdom</option>
            <option>Venezuela</option>
        </select>

        <select multiple="multiple" class="pure-input-large">
            <option>Brazil</option>
            <option>Canada</option>
            <option>United States</option>
            <option>United Kingdom</option>
            <option>Venezuela</option>
        </select>
    </form>


    <h2>Checkboxes and Radios</h2>

    <form class="pure-form">
        <label class="pure-checkbox">
            <input type="checkbox" value="">
            Here's option one.
        </label>

        <label class="pure-radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Here's a radio button. You can choose this one...
        </label>

        <label class="pure-radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            ...Or this one!
        </label>
    </form>


    <h2>Help text</h2>

    <form class="pure-form pure-form-stacked">
        <fieldset>
            <label>Last Name</label>
            <input type="text" />
            <aside class="pure-form-message">Block help text</aside>
        </fieldset>
    </form>


    <h2>Buttons</h2>

    <form class="pure-form">
        <a class="pure-button pure-button-primary">Anchor</a>
        <button class="pure-button pure-button-primary">Button</button>
        <input type="submit" class="pure-button pure-button-primary" value="Submit" />
        <input type="button" class="pure-button pure-button-primary" value="Input Button" />
        <input type="reset" class="pure-button pure-button-primary" value="Reset" />
    </form>	
	</div>
</div>


</body>
</html>