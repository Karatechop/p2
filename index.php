<!DOCTYPE html>
<html lang="en">
<head>

<title>Boris Rugel | xkcd pwd generator</title>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	
	<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	
	<?php require "logic.php"; ?>
	
	
</head>

<body>

<div id="top" class="container">

	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-success">HES CSCI E-15 Dynamic Web Applications fall 2014 Project #2 created by Boris Rugel.</h4>
		</div>
	</div>

	



<div class="jumbotron">
	
	<h1>xkcd Password Generator</h1>
	<p>This application helps you create easy to remember, easy to type and secure enough passwords for everyday use</p>
  
 
	<p><a href="#learn" class="btn btn-warning btn-lg">Learn more</a>
	<a href="#password" class="btn btn-danger btn-lg">Create password</a>
	<a href="#disclaimer" class="btn btn-info btn-lg">Read disclaimer</a></p>

</div>

<!-- Password output-->
<div class="row">


	<div class="col-sm-6">
		
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Hooray! Your brand new passwords!</h3>
		</div>
	
		<div class="panel-body">
			<div class="alert alert-dismissable alert-success">
			
			<?= $password_1 ?>
   
			</div>
			
			<br>
			
			
			<div class="alert alert-dismissable alert-success">
			
			<?= $password_2 ?>
   
			</div>
		</div>
		</div>
	</div>
  	

<!-- Password form -->	
	<div id="password" class="col-sm-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Create your xkcd password</h3>
			</div>
		
			<div class="panel-body">
			
			<form class="form-horizontal" name="password" action="index.php" method="GET">
			<fieldset>
	   
			<div class="form-group">
	      
			<label for="number_of_words" class="col-lg-5 control-label">Number of words</label>
			<div class="col-lg-7">
			<select class="form-control" name="number_of_words" id="number_of_words">
				<option <?= $selected[1]?> >1</option>
				<option <?= $selected[2]?> >2</option>
				<option <?= $selected[3]?> >3</option>
				<option <?= $selected[4]?> >4</option>
				<option <?= $selected[5]?> >5</option>
				<option <?= $selected[6]?> >6</option>
				<option <?= $selected[7]?> >7</option>
				<option <?= $selected[8]?> >8</option>
				<option <?= $selected[9]?> >9</option>
				<option <?= $selected[10]?> >10</option>
			</select>
			</div>
			
			<br>
			<br>
		       
			<label for="include_numbers" class="col-lg-5 control-label">Include numbers</label>
			<div class="col-lg-7">
				<select class="form-control" name="include_numbers" id="include_numbers">
				<option <?= $num_selected[0]?> >0</option>
				<option <?= $num_selected[1]?> >1</option>
				<option <?= $num_selected[2]?> >2</option>
				<option <?= $num_selected[3]?> >3</option>
				</select>
			</div>
			<br>
			<br>
       
		       	<label for="include_symbols" class="col-lg-5 control-label">Include symbols</label>
		       	<div class="col-lg-7">
			<select class="form-control" name="include_symbols" id="include_symbols">
				<option <?= $sym_selected[0]?> >0</option>
				<option <?= $sym_selected[1]?> >1</option>
				<option <?= $sym_selected[2]?> >2</option>
				<option <?= $sym_selected[3]?> >3</option>
			</select>
			</div>
			<br>
			<br>
			
			<label for="separator" class="col-lg-5 control-label">Choose separator</label>
			<div class="col-lg-7">
			<select class="form-control" name="separator" id="separator">
				<option <?= $sep_selected["space"]?> >space</option>
				<option <?= $sep_selected["-"]?> >-</option>
			</select>
			
			</div>
       
			</div>
  
			<div class="form-group">
			<div class="col-lg-12 col-lg-offset-5">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				<button type="button" id="help" class="btn btn-default" data-toggle="modal" data-target="#Help">Help</button>
			
			</div>
			</div>
			
			</fieldset>
			</form>
		
			</div>	
	
		</div>
	</div>

</div>

<!-- Help modal -->

	<div class="modal fade" id="Help" tabindex="-1" role="dialog" aria-labelledby="HelpLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="HelpLabel">This form allows you to select input values that will influence password generation</h4>
			</div>
			<div class="modal-body">

				<p><strong>Number of words</strong> -> select how many words would you like to have in your password.</p>
				<p><strong>Include numbers</strong> -> select how many numbers would you like to attach after last word.</p>
					<ul>
					<li>Select 0 for no number at all.</li>
					<li>Select 1 and a random number from 0 to 9 will appear after last word.</li>
					<li>Select 2 and a random number from 10 to 99 will appear after last word.</li>
					<li>Select 3 and a random number from 100 to 999 will appear after last word.</li>
					</ul>
				<p><strong>Include symbols</strong> -> select how many symbols would you like to attach after last number. Select 0 for no symbols</p>
				<p><strong>Choose separator</strong> -> select a symbol that will separate words, numbers and symbols. This password generator will insert one separator after each word and one (depending on your selection) between all numbers and all symbols.</p> 

			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Ok, got it!</button>
			</div>
			</div>
		</div>
	</div>	

<!-- Disclaimer -->
<div class="row">
  		
  	<div id="disclaimer" class="col-sm-6">
  		
  	<div class="panel panel-info">
  		<div class="panel-heading">
  			<h3 class="panel-title">Disclaimer</h3>
  		</div>
  	
  		<div class="panel-body">
  			<p>Please bear in mind that I have developed this application as an exercise with a purpose of learning pHp. This is more a proof of concept then a real application, use it at your own risk. Although it does generate memorable and secure enough passwords for a common internet user, you might still want to check some password generators developed by trained professionals. You can find several links below.</p>
			
  			<p>
  			<a href="http://world.std.com/~reinhold/diceware.html">Diceware method</a> - a simple offline method for generating highly secure passwords. <br>
			<a href="http://www.fourmilab.ch/javascrypt/pass_phrase.html"> Pass frase generator</a> - on-line application by John Walker.<br>
			<a href="http://jpgen.joelwalters.com/"> Joel's Password Generator v3.8</a> - on-line application by Joel Walters.<br>
			You can get a sence of your password's strength using the <a href="https://www.grc.com/haystack.htm">"Haystack"</a> application by Gibson Research Corporation.
  			</p>
		</div>	
	</div>		

	</div>
  	
<!-- About xkcd pwd -->
	
	<div class="col-sm-6">
		
		<div id="learn" class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">What is an "xkcd password" and why use it?</h3>
			</div>
	
			<div class="panel-body">
				<p>This password generator is inspired by a popular on-line comic that graphically describes how long memorable passphrases are a better option than alien looking seemingly random passwords we have been taught we should use.</p>
				<img src=img/xkcd.jpg alt="xkcd password">
				<p>You can find the original comic <a href = http://xkcd.com/936/> here</a></p>
				<p>For better understanding of this comic I suggest you read the first part of explanation article provided by <a href = http://www.explainxkcd.com/wiki/index.php/936:_Password_Strength>explainxkcd.com</a> :</p>
				<p>"This comic is saying that the password in the top frames "Tr0ub4dor&amp;3" is easier for password cracking software to guess because it has less entropy than "correcthorsebatterystaple" and also more difficult for a human to remember, leading to insecure practices like writing the password down on a post-it attached to the monitor.</p>
				<p>In simple cases the entropy of a password is calculated as a^b where a is the number of allowed symbols and b is its length. A dictionary word (however long) has an entropy of around 65000, i.e. 16 bits. A truly random string of length 11 (not like "Tr0ub4dor&amp;3", but more like "J4I/tyJ&amp;Acy") has 94^11 = 72.1 bits. However the comic shows that "Tr0ub4dor&amp;3" has only 28 bits of entropy. Another way of selecting a password is to have 2048 "symbols" (common words) and select only 4 of those symbols. 2048^4 = 44 bits, much better than 28.</p>
				<p>It is absolutely true that people make passwords hard to remember because they think they are "safer", and it is certainly true that length, all other things being equal, tends to make for very strong passwords and this can confirmed by using rumkin.com's password strength checker. Even if the individual characters are all limited to [a-z], the exponent implied in "we added another lowercase character, so multiply by 26 again" tends to dominate the results.</p>
				<p>In addition to being easier to remember, long strings of lowercase characters are also easier to type on smartphones and soft keyboards.</p>
				<p>xkcd's password generation scheme requires the user to have a list of 2048 common words (log2(2048) = 11). For any attack we must assume that the attacker knows our password generation algorithm, but not the exact password. In this case the attacker knows the 2048 words, and knows that we selected 4 words, but not which words. The number of combinations of 4 words from this list of words is (211)4 = 244 bits. For comparison, the entropy offered by Diceware's 7776 word list is 13 bits per word. If the attacker doesn't know the algorithm used, and only knows that lowercase letters are selected, the "common words" password would take even longer to crack than depicted. 25 random lowercase characters would have 117 bits of entropy, vs 44 bits for the common words list.</p>
				<p>Steve Gibson from the Security Now podcast did a lot of work in this arena and found that the password D0g..................... (24 characters long) is stronger than PrXyc.N(n4k77#L!eVdAfp9 (23 characters long) because both have at least one uppercase letter, lowercase letter, number, and "special" character, so length trumps perceived complexity. Steve Gibson makes this very clear in his password haystack reference guide and tester:</p>
				<p><strong>"Once an exhaustive password search begins, the most important factor is password length!"</strong></p>
				<p>The important thing to take away from this comic is that longer passwords are better because each additional character adds much more time to the breaking of the password. That's what Randall is trying to get through here. Complexity does not matter unless you have length in passwords. Complexity is more difficult for humans to remember, but length is not."</p>
				<p>If hungry for more, you can continue reading <a href = http://www.explainxkcd.com/wiki/index.php/936:_Password_Strength>here</a></p>
				
				
			</div>
			
		</div>
	</div>
</div>
<!-- Footer -->
<footer>
	<div class="row">
		<div class="col-lg-12">	
			<ul class="list-unstyled">
				<li class="pull-left">This project on <a href="https://github.com/Karatechop/p2">GitHub</a>				
				<li class="pull-right"><a href="#top">Back to top</a></li>
			</ul>
		</div>
        </div>
        

	<div class="row">
		<div class="col-lg-12">
		<div class="well">
          
			<ul class="list-unstyled">
				<li class="pull-left">Other projects: <a href="http://p3.borisrugel.com">	P3</a> , <a href="http://p4.borisrugel.com">P4</a></li>
				
				<li class="pull-right">Developed by:  <a href="http://p1.borisrugel.com">Boris Rugel</a>  2014 &copy;</li>
             		</ul>
		</div>
		</div>
        </div>

</footer>
	

</div>

</body>