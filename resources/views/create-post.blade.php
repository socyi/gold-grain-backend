<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind CSS Create Post UI with form plugins</title>
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
    
  </head>

  <body>
    <!-- Create Post -->
    <div>
      <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
              Create Post
            </h1>
          </div>

          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form action="{{ route('create-post') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Title
                </label>

                <input
                  class="form-control block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="title" id="title" placeholder="180" />
              </div>

              <!-- Description -->
              <div class="mt-4">
                <label class="block text-sm font-bold text-gray-700" for="content">
                  Content
                </label>
                <textarea name="content" id="content"
                  class="form-control block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  rows="4" placeholder="400"></textarea>
              </div>
             <!--Image-->
             <div class="mt-4">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control-file">
              </div>

              <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                  class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-yellow-500 hover:bg-yellow-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Save
                </button>
                <button type="submit"
                  class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Cancel
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="{{ asset('path/to/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea#content',
        plugins: 'image',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | image',
        height: 300,
        images_upload_url: '/upload-image', // The URL to upload the image
        images_upload_handler: function (blobInfo, success, failure) {
            // Custom logic to handle image upload, e.g., using Ajax
        }
    });
</script>

</html>


