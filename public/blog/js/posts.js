var posts = [

    {
    	'date' : '08/6/14',
    	'title': 'No depth to Low',
      'content': 'How ',
    	'image': ''
    },

    {
        'date' : '12/14/14',
        'title': 'This is another post.',
      'content': 'HELP2',
        'image': ''
    }
    // {
    //     'date'   :''
    //     'title'  :''
    //     'content':''
    //     'image'  :''
    // }

    ];

console.log(posts);

// var postsDiv = document.getElementById("posts");
    //postsDiv.innerHTML = '<p> This is a paragraph </p>';
    //postsDiv.innerHTML += '<p> ' + posts[0].date + ' </p>';
    

    // Configure a foreach loop, to update the postsDiv with your JS objects above.

    // posts.forEach(function(post, index) {
    //     console.log("Post Date: " + post.date + (index+1));
    //     console.log("Title: " + post.title); 
    //     console.log("Content: " + post.content);
    //     console.log("Image: " + post.image);
    //     console.log("___________________________");
    //                      //end loop here
    // });

    // posts.forEach(function(post, index) {
    //     //postsDiv.innerHTML += "<h2>Post Date: " + post.date + (index+1) + "</h2>";
    //     console.log("Title: " + post.title); 
    //     console.log("Content: " + post.content);
    //     console.log("Image: " + post.image);
    //     console.log("___________________________");
    //                      //end loop here
    // });
     

    var postCont = document.getElementById("headings");
        console.log(postCont);
        postCont.innerHTML = '';
        posts.forEach(function(post, index) {
            postCont.innerHTML += '<div class="col-md-4">';
            postCont.innerHTML += '<h2>' + post.title + '</h2>';
            postCont.innerHTML += '<p>' + post.content + '</p>';
            postCont.innerHTML += '<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>';
            postCont.innerHTML += '<h5>Written On: ' + post.date + (index+1) + '</h5>';
            postCont.innerHTML += '</div>';
            //console.log("Image: " + post.image);
        });

        postCont.innerHTML += '</div>';










