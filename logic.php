<?php 

//-------------------------Define default values---------------------------------

if (empty($_GET)) {
$number_of_words = 4;
$include_numbers = 2;
$include_symbols = 2;
$separator = "-";
} else {
$number_of_words = $_GET['number_of_words'];
$include_numbers = $_GET['include_numbers'];
$include_symbols = $_GET['include_symbols'];
$separator = $_GET['separator'];	
};


//-------------------Selected values persist through form submissions---------------------------------

//-----------------------Words-------------------------------------------------
$word_number_selected = Array();
for ($i=0; $i<11; $i++) {
	array_push($word_number_selected, "word_number_selected".$i);
};


$word_number_selected = array_flip ($word_number_selected);


$selected = Array();
foreach ($word_number_selected as $key => $value)
	
	if ($word_number_selected[$key] == $number_of_words) {
	$selected[$value] = 'selected="selected"';
	} else {
	$selected[$value] = "";
	};

//-----------------------Numbers-------------------------------------------------
$numbers_number_selected = Array();
for ($i=0; $i<6; $i++) {
	array_push($numbers_number_selected, "numbers_number_selected".$i);
};


$numbers_number_selected = array_flip ($numbers_number_selected);


$num_selected = Array();
foreach ($numbers_number_selected as $key => $value)
	
	if ($numbers_number_selected[$key] == $include_numbers) {
	$num_selected[$value] = 'selected="selected"';
	} else {
	$num_selected[$value] = "";
	};

//-----------------------Symbols-------------------------------------------------
$symbols_number_selected = Array();
for ($i=0; $i<6; $i++) {
	array_push($symbols_number_selected, "symbols_number_selected".$i);
};


$symbols_number_selected = array_flip ($symbols_number_selected);


$sym_selected = Array();
foreach ($symbols_number_selected as $key => $value)
	
	if ($symbols_number_selected[$key] == $include_symbols) {
	$sym_selected[$value] = 'selected="selected"';
	} else {
	$sym_selected[$value] = "";
	};

//-----------------------------Separators---------------------------------------
$separator_list = Array("space", "-");

$sep_selected = Array();
foreach ($separator_list as $key => $value)
	
	if ($separator_list[$key] == $separator) {
	$sep_selected[$value] = 'selected="selected"';
	} else {
	$sep_selected[$value] = "";
	};

//------------------------------------------------------------------------------

//---------------------------Define source arrays-------------------------------
$word_list = Array("alpha", "right", "moose", "blatant", "longitude", "spammers",
	"flood", "sneaky", "daniel", "juggling", "stomp");
$symbol_list = Array("!", "#", "%", "^", "&amp;", "+" , "_", "@", "*");
// $separator_list already defined in form values persistance part

//---------------------------Check variables for errors-------------------------
if ($number_of_words < 1 or $number_of_words > 10) {
	$number_of_words = 4;
}  elseif (!(is_numeric($number_of_words))){
	$number_of_words = 2;
};
 
if ($include_numbers < 0 or $include_numbers > 3) {
	$include_numbers = 2;
}  elseif (!(is_numeric($include_numbers))){
	$include_numbers = 2;
};


if ($include_symbols < 0 or $include_symbols > 3) {
	$include_symbols = 2;
} elseif (!(is_numeric($include_symbols))){
	$include_symbols = 2;
};	

if (!(in_array($separator, $separator_list, true))) { 
	$separator = "@";
	};	

//---------------------------Create password------------------------------------
//---------------------------PWD words------------------------------------------
if ($separator == "space") {
	$separator = " ";
}; 


$words_1 = Array();
$words_2 = Array();

$words_numberofwords  = 0;
while ($words_numberofwords <= $number_of_words-1) {
	
	$words_candidate = $word_list[array_rand($word_list)];
	
	if (in_array($words_candidate, $words_1, true)== FALSE) {
	array_push($words_1, $words_candidate);
	
		$words_numberofwords ++;
		};
};
$words_numberofwords  = 0;
while ($words_numberofwords <= $number_of_words-1) {
	
	$words_candidate = $word_list[array_rand($word_list)];
	
	if (in_array($words_candidate, $words_2, true)== FALSE) {
	array_push($words_2, $words_candidate);
	
		$words_numberofwords ++;
		};
};

$words_chain_1 = "";
for ($i=0; $i< count($words_1); $i++) {
	$words_chain_1 = $words_chain_1.$separator.$words_1[$i];	
}
$words_chain_1 = substr($words_chain_1, 1);

$words_chain_2 = "";
for ($i=0; $i< count($words_2); $i++) {
	$words_chain_2 = $words_chain_2.$separator.$words_2[$i];	
}
$words_chain_2 = substr($words_chain_2, 1);

//----------------------------PWD numbers---------------------------------------

if ($include_numbers == 0) {
$number_1 = "";
$number_2 = "";
} elseif 
	($include_numbers == 1) {
$number_1 = $separator.rand(0,9);
$number_2 = $separator.rand(0,9);
} elseif 
	($include_numbers == 2) {
$number_1 = $separator.rand(10,99);
$number_2 = $separator.rand(10,99);
} elseif 
	($include_numbers == 3) {
$number_1 = $separator.rand(100,999);
$number_2 = $separator.rand(100,999);
};




//------------------------PWD symbols-------------------------------------------

$symbols_1 = Array();
$symbols_2 = Array();

$symbols_numberofsymbols = 0;
while ($symbols_numberofsymbols <= $include_symbols-1) {
	
	$symbols_candidate = $symbol_list[array_rand($symbol_list)];
	
	if (in_array($symbols_candidate, $symbols_1, true)== FALSE) {
	array_push($symbols_1, $symbols_candidate);
	
		$symbols_numberofsymbols ++;
		};
};

$symbols_numberofsymbols = 0;
while ($symbols_numberofsymbols <= $include_symbols-1) {
	
	$symbols_candidate = $symbol_list[array_rand($symbol_list)];
	
	if (in_array($symbols_candidate, $symbols_2, true)== FALSE) {
	array_push($symbols_2, $symbols_candidate);
	
		$symbols_numberofsymbols ++;
		};
};

$symbols_chain_1 = "";
for ($i=0; $i< count($symbols_1); $i++) {
	$symbols_chain_1 = $symbols_chain_1.$symbols_1[$i];	
}

$symbols_chain_2 = "";
for ($i=0; $i< count($symbols_2); $i++) {
	$symbols_chain_2 = $symbols_chain_2.$symbols_2[$i];	
}


//-----------------------------PASSWORD-----------------------------------------


if  ($include_numbers > 0  && $include_symbols > 0) {
$password_1 = strtoupper($words_chain_1.$number_1.$separator.$symbols_chain_1);
$password_2 = strtoupper($words_chain_2.$number_2.$separator.$symbols_chain_2);
} elseif  ($include_numbers == 0  && $include_symbols > 0) {
$password_1 = strtoupper($words_chain_1.$separator.$symbols_chain_1);
$password_2 = strtoupper($words_chain_2.$separator.$symbols_chain_2);
} elseif  ($include_numbers > 0  && $include_symbols == 0) {
$password_1 = strtoupper($words_chain_1.$number_1);
$password_2 = strtoupper($words_chain_2.$number_2);
} elseif  ($include_numbers == 0  && $include_symbols == 0) {
$password_1 = strtoupper($words_chain_1);
$password_2 = strtoupper($words_chain_2);
};