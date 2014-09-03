<?php
//var_dump($_POST);
// var_dump($_GET);

?>
<body>
<form method="POST">
    <p>
	    <label for="username">Username</label>
	    <input id="username" name="username" type="text">
    </p>

    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>

    <p>
        <input type="submit">
    </p>

</form>

<h3>Compose an Email</h3>
<form> 
	<textarea id="email_body" name="email_body" rows="5" cols="40"></textarea>

	<p>
		<label for="email">Email</label>
	 	
	</P>
</form>

<form method="POST">

		<h2>Select Testing</h2>

		<p><h2>1. Does the Sun rise in the East?</h2></P>
<label>
	    <input type="checkbox" id="q1a" name="q1" value="Yes"checked>
	    Yes
	    <input type="checkbox" id="q1a" name="q1" value="No" checked>
	    No
</label>

	<p>
		<input type="submit" value="Submit">
	</p>

</form>	








<form>

	<h2> 2. Multiple Choice Test</h2>

	<p> What is the capitol of Venezuela? </p>

	<label>
	    <input type="checkbox" id="q1a" name="q1" value="Bogata">
	    Bogata

	</label>
	<label>
	    <input type="checkbox" id="q1b" name="q1" value="Caracas">
	    Caracas
	</label>
	<label>
	    <input type="checkbox" id="q1c" name="q1" value="Lima">
	    Lima
	</label>
	<label>
	    <input type="checkbox" id="q1d" name="q1" value="san antonio">
	    San Antonio
	</label>
</form>

<form>
<p> <h2>3. Where is Yellowstone Park located?</h2> </p>

	<label>
	    <input type="checkbox" id="q1a" name="q1" value="Montana">
	    Montana
	</label>
	<label>
	    <input type="checkbox" id="q1b" name="q1" value="Idaho">
	    Idaha
	</label>
	<label>
	    <input type="checkbox" id="q1c" name="q1" value="California">
	    California
	</label>
	<label>
	    <input type="checkbox" id="q1d" name="q1" value="san antonio">
	    San Antonio
	</label>
</form>
<form>

<label for="Countries"> <h2>4. What countries have you been to?</h2></label>
<select id="Countries" name="Countries[]" multiple>
    <option value="Philippines">Philippines</option>
    <option value="Spain">Spain</option>
    <option value="Hungary">Hungary</option>
</select>



	<p>
		<input type="submit" value= "Send">
	</p>

</form>

<form>
		<h2>Select Testing</h2>

		<p><h2>1. Does the Sun rise in the East?</h2></P>
<label>
	    <input type="checkbox" id="q1a" name="q1" value="Yes">
	    Yes
	    <input type="checkbox" id="q1a" name="q1" value="No" checked>
	    No
</label>

	<p>
		<input type="submit" value="Submit">

	</p>
       






</body>


</form>







