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
table { 
color: #333;
width: 90%; 
border-collapse: 
collapse; border-spacing: 0; 
border:none;
padding:5px;

}

td, th { 

height: 40px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
border: 1px solid #ddd;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: inset 0 1px 0 #ffffff;
-moz-box-shadow: inset 0 1px 0 #ffffff;
box-shadow: inset 0 1px 0 #ffffff; /* No more visible border */
background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(0,0,0,0.1)));
background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);  /* Darken header a bit */
font-weight:normal;
}

td {
background: #FAFAFA;
text-align: center;
height: 40px;
font-weight:lighter;
}

/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! */

.bgAshColor{
background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(0,0,0,0.1)));
background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(0,0,0,0.1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#1a000000',GradientType=0 );
vertical-align:middle;
border: 1px solid #ddd;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: inset 0 1px 0 #ffffff;
-moz-box-shadow: inset 0 1px 0 #ffffff;
box-shadow: inset 0 1px 0 #ffffff;
padding-left:5px;
padding:5px;
}
.deleteTD{
font-family:Arial, Helvetica, sans-serif;
font-weight:bold;

text-align:center;

}
.deleteTD a{
text-decoration:none;
color:#FF0000;
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
			
			//Table Search
    
    $("#search").keyup(function(){
    var value = this.value.toLowerCase().trim();
    
    $("#result tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
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




	<div class="pure-g-r" style="margin-top:15px;">	
		<div class="pure-u-1-3">POS</div>
		<div class="pure-u-2-3" style="text-align:right;float:right;">   <form class="pure-form pure-form-inline"><input type="text" placeholder="Total Items"><input type="text" placeholder="Grand Total"><input type="submit" class="pure-button pure-button-primary" value="Bill" /></form>
		</div>
	</div>
<hr/>
    <form class="pure-form pure-form-stacked">
        <fieldset>
            

            <div class="pure-g-r">
                <div class="pure-u-1-5">
                    <label>Item Code</label>
                    
                    <select class="pure-input-medium">
                        <option>AL-123-456-123-456</option>
                        <option>CA-123-456-123-456</option>
                        <option>IL-123-456</option>
                        <option>MD-123-456</option>
                        <option>NY-123-456</option>
                    </select>
                </div>
                <div class="pure-u-1-5">
                    <label>Qty</label>
                    <input type="text">
                </div>
                <div class="pure-u-1-5">
                    <label>Unit Price</label>
                    <input type="text" required>
                </div>
                <div class="pure-u-1-5">
                    <label>Total</label>
                    <input type="text">
                </div>
                <div class="pure-u-1-5">
                    <label>Tax</label>
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
                <input type="checkbox"> Any Options
            </label>

           <input type="button" class="pure-button pure-button-primary" value="Add" />
           
        </fieldset>
    </form>

<hr/>
<div class="pure-g-r">
	<div class="pure-u-4-5">
	</div>
	<div class="pure-u-1-5">
	<form class="pure-form pure-form-stacked">
		<input type="text" placeholder="Search Here" id="search">
	</form>	
	</div>
</div>
<table style="margin:0 auto;" id="result">
<tr>
  <th>Item Code</th>
  <th>Qty</th> 
  <th>Price</th>
  <th>Delete</th>
</tr>
<tr>
  <td>Eve</td>
  <td>Jackson</td> 
  <td>91</td>
   <td class="deleteTD"><a href="#">X</a></td>
</tr>
<tr>
  <td>Eve</td>
  <td>Jackson</td> 
  <td>92</td>
   <td class="deleteTD"><a href="#">X</a></td>
</tr>
<tr>
  <td>Eve</td>
  <td>Jackson</td> 
  <td>93</td>
   <td class="deleteTD"><a href="#">X</a></td>
</tr>
<tr>
  <td>Eve</td>
  <td>Jackson</td> 
  <td>94</td>
   <td class="deleteTD"><a href="#">X</a></td>
</tr>
</table>
   

    
	</div>
</div>


</body>
</html>