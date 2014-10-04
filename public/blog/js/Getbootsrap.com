Getbootsrap.com
pick template
or bootswatch
create local template blog.html
load moment.js file
load your own javascript file for your js code
post json should follow format:



var post [
{
	'date'
	'title'
	'content'
	'image'
},
{
	'date'
	'title'
	'content'
	'image'

},


];
