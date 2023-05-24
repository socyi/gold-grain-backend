
The user can access the home page and the posting list only by registering or signing in.
They can create, view , update or delete posts.
They can view the static home page.

When viewing posts, the images of the post are not visible.

example:
storage\app\images\63oNpqWZygmywgKOEWWiboWyd9ujw16sa3fSNVLi.jpg -> path with image
code to show image: img src="{{ asset('/storage/app/' . $post->image) }}
$post->image: contains 'image/imagename'

Possible issue due to security/permissions.

APIs:

// Get a post by ID
URL: http://127.0.0.1:8000/api/posts/{id}
Method: GET

// Create a post
URL: http://127.0.0.1:8000/api/posts
Method: POST

// Update a post
URL: http://127.0.0.1:8000/api/posts/{id}
Method: PUT

// Delete a post
URL: http://127.0.0.1:8000/api/posts/{id}
Method: DELETE

Get and Post are tested and working, Put and Delete possibly require Postman configuration.


I didn't use a WYSIWYG editor for the Posts creation.
I didn't implement a status field for the posts, as I didn't understand how it's meant to work.
2FA was not implemented.
Web Crawler was not implemented.
	
