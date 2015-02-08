<?php
//LAB01 - first version of php f2c calculator

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
/*creating constant value for file name to insert in form action="" for 
constant define name (THIS_PAGE), comma, and then constant's value*/
//echo basename($_SERVER['PHP_SELF']);
//die;  identifies current file and location
//print THIS_PAGE

?>
<style>
* {
padding: 0;
margin: 0;
}

body  {
	width: 100%;
	font-size: 100%;
	font-family: Arial, Helvetica, sans-serif;
	background-color: #000;
}

#top-band  {
	color: #fff;
	background: #000;
	padding: 20px 0 0 2%;
	border-bottom: 3px solid orange;
}

#center-band  {
	color: #fff;
	background: #d83f3f;
	padding: 20px 0 0 2%;
	border-bottom: 3px solid orange;	
}

#bottom-band  {
	height: 140px;
	color: #fff;
	background: #000;
	padding: 20px 0 0 2%;	
}

form  {
	padding:  10px 0 10px 2%;
	margin: auto;
}

#oreo  {
	margin-left: 10%;
	margin-bottom: 15px;
	text-size: 1.33em;
	font-weight: bold;
}	

button  {
	color: #444;
	border: 1px solid #777;
	height: 29px;
	width: 200px;
	font-size: 1em;
	font-weight: bold;
}

li{
	list-style-type: none;
}
	
input  {
	height: 28px;
	margin-bottom: .25em;
}

input[type="text"]{
	width: 200px;
	margin-top: 5px;
}

input[type="checkbox"]{
    vertical-align: middle;
}

.checkbox-box  {
	margin: .5em 0 0 5%;
}

.checkbox-text  {
	display: inline;
	margin: 0 0 1em 1%;
}

.contact-feedback {
}

.contact-table{
	margin: auto;
}

h1 {
	font-family: Arial;
	width: 100%;
}

h2 {
	font-family: Arial;
	max-width: 60%;
}	
	
h3 {
	font-family: Arial;
	font-size: 1.2em;
	color: #fff;
	max-width: 60%;
}

#credits  {
	font-style: italic:
}

.result  {
	margin-top: 30px;
	margin-left: 2%;
}

</style>

<html>
	<body>
<div id="top-band">	
	<h1>Monday Sundae!!</h1>
	<h4 id="credits">ITC250 Winter 2015 Lab02</h4>
	<h2>Choose toppings for your sundae!</h2><br>

</div><!--#top-band-->
<div id="center-band">	


<?php


if(isset($_POST['submit']))
	{//if there is something submitted . .

				echo '<pre>';//xes out all formatting
				var_dump($_POST);//check for any post data
				echo '<pre>';
				
		if (is_array($_POST['choice']))
		{
		echo 'You chose ';
		echo (['choice']) .', ';				
			foreach($_POST[choice])
			{
				echo (['choice']) .', ';
				if(prev(end(['choice'])))
				{
				echo '(['choice']) and ';
				}
				else if (end(['choice']))
				{
				echo (end(['choice'])).'.';
				}
			}
		}
		else
			{
			echo 'You dint chooz no stinkin\' toppings! But you clicked the button!';
			echo 'Watzamattawitchu? You gotta problem?';
			}

				
	}
	
	
	else
    {//else show the form
    echo
    '
	<div class="checkbox-box">
		<h4>
			<form action=" '. THIS_PAGE .' " method="post">
			
				<h3>Choose your toppings:</h3> <br> 
				
					<ul id="list-toppings" >
					<li><label>
						<input type="checkbox" name="choice[]" value="chocolate" checked="checked" />
							<div class="checkbox-text">
								Chocolate Sauce
							</div><!--.checkbox-text-->
					</label></li>
					<li><label>
						<input type="checkbox" name="choice[]" value="peanuts" checked="unchecked" />
							<div class="checkbox-text">
								Peanuts
							</div><!--.checkbox-text-->
					</label</li>
					<li><label>
						<input type="checkbox" name="choice[]" value="oreochunks" checked="unchecked" />
							<div class="checkbox-text">
								Oreo Chunks
							</div><!--.checkbox-text-->
					</label></li>
					<li><label>
						<input type="checkbox" name="choice[]" value="caramel" checked="unchecked" />
							<div class="checkbox-text">
								Caramel Sauce
							</div><!--.checkbox-text-->
					</label></li>
					<li><label>
						<input type="checkbox" name="choice[]" value="mnms" checked="unchecked" />
							<div class="checkbox-text">
								M&Ms
							</div><!--.checkbox-text-->
					</label></li>
					<li><label>
						<input type="checkbox" name="choice[]" value="heath" checked="unchecked" />
							<div class="checkbox-text">
								Heathbar Chunks
							</div><!--.checkbox-text-->
					</label></li>
					<br>
					<input type="submit"  name="submit" value="Submit your toppings!" >
					
			</form>	
		</h4>
	

	</div><!--.checkbox-box-->

	</div><!--#center-band-->
	
	
	
	<div id="bottom-band">
		<h3>We hope you enjoy your sundae with all the yummy toppings! </h3><h4>(You better have toppings, or else we will give you crap about how boring you are.)</h4>
	</div><!--#bottom-band-->
	'
	;
	}

?>

	</body>
</html>