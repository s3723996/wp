<html>
<head>
  <title>My Favorite Bookmarks</title>
</head>

<body>
<?php
//include the function to clean data

//create an array for errors
$errors=array();
//start cleaning the data

//set an array to hold valid choice values

//main logic of what to do when



//--------begin functions--------------
function validate($description, $bookmark){
  global $errors;
  if($description=="")
    $errors[0]= "You must fill in a description.";
  if($bookmark=="")
    $errors[1]= "You must fill in a bookmark. ";

//see if there are errors
$size = count($errors);
	if($size > 0)
  	  addForm($description, $bookmark, $errors);
  	else
  	  addBookmark($description, $bookmark);
}//end validate

function addBookmark(){
	// include header file
	include "header.html";

	//open textfile and write data to file
	print "adding bookmark function";

	//include html footer file
	include "footer.html";
}//end addBookmark

function addForm($description, $bookmark, $errors){
	// include header file
	$self = $_SERVER['PHP_SELF'];
	include "header.html";
print <<<HERE
	<form method="post" action="$self">
	<p> Enter a new bookmark to add: </p>
	<p>Description: <input name="description" type="text" id="description" size="80" value="$description" />$errors[0]
	<br />
	URL: <input name="bookmark" type="text" id="bookmark" size="80" value="$bookmark" />$errors[1]
	</p>
	<p>
	<input name="choice" type="submit" id="choice" value="Add Bookmark" />
	</p>
	</form>
HERE;
	//include html footer file
	include "footer.html";
}//end addForm

function displayForm(){
	// include header file

	//include html footer file

} //end displayForm

function showBookmarks(){
	// include header file
	include "header.html";

	//open the bookmarks file, read in and display
	print "displaying bookmark function";
	print "<table><tr><th width=\"45%\">Description</th>
            <th width=\"55%\">URL</th></tr>";

	//include html footer file
	include "footer.html";
}//end showBookmarks



?>

</body>
</html>
