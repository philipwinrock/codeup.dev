<?php

	define('FILENAME', 'data/mylist.txt');
	var_dump(FILENAME);
	var_dump($_POST);
	var_dump($_GET);

	function openFile($filename = FILENAME){
	    // THis function opens a file, and returns an array of items from that file.

	    //open list of things to do//
	    $handle = fopen($filename , 'r');
	    //read in entire file and remove any blank lines//
	    $content = trim(fread($handle , filesize($filename)));
	    //always close the file//
	    fclose($handle);
	    //split the contents of file into an array//
	    $list = explode("\n", $content);

	    // Returns a list of items in an array, from the filename specified.
	    return $list;

	}

	var_dump(openFile());

?>

<!DOCTYPE html>
<html>
    <head>
    	 
    <title>todo_list.php</title>
    <link rel="stylesheet" href="/css/site.css">

       
				<title>To do List</title>

	</head>

	<body>
		<h1>TO DO LIST</h1>
		
    	<ol>
<?php
	  	  		$items = ['Wash and wax the car.',
	  	  		 		  'Clean out the garage.' , 
	  	  		          'Get flea shampoo for dog.'];

	 			 foreach ($items as $key => $value) {
	 			 	echo ("<li>$value</li>");
	 			 }



?>
		</ol>
   
            


New Item



<form method="POST">
    <p>
	     <label for="username">AddToList</label>
	    <!-- <input id="addToList" name="addToList" type="text"> -->
 
  <textarea id="email_body" name="email_body" rows="5" cols="40"></textarea>

    </p>

    <p>
		 <input type="submit" value= "Send"></input>
	</p>



		

</form>

</body>











<!-- Create an external stylesheet and link it to your todo list page.
Add a style to change the color of the headers on your page and make them underlined.
Add a style to change the background color of the page.
Add a style to change the list-style to something other than the default.
Add a style to change the font for the entire page.
Continue experimenting with styles to increase the visual appeal of the todo list.
When complete, save your files, commit the files to your git repository, and push to GitHub.
 -->
<!-- within the file you just created, build an HTML document with a title of: "TODO List".
In the body of the document, place a heading that says: "TODO List".
Below the heading, place an unordered list with some sample to-do items.
Below the unordered list, create a form that contains the necessary inputs to add a TODO item to the list. Add a heading above the form describing the function of the form.
Test the form using RequestBin.
Save your HTML file, commit the file to your git repository, and push to GitHub.
 -->

     



</html> 