<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Post</title>
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>

</head>

<body>
    <!-- Edit Post -->
    <div>
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                        Edit Post
                    </h1>
                </div>

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form action="{{ route('update-post', ['post' => $post]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Title
                            </label>

                            <input
                                class="form-control block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="title" id="title" value="{{ $post->title }}" required />
                        </div>

                        <!-- Content -->
                        <div class="mt-4">
                            <label class="block text-sm font-bold text-gray-700" for="content">
                                Content
                            </label>
                            <textarea name="content" id="content"
                                class="form-control block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                rows="4" required>{{ $post->content }}</textarea>
                        </div>

                        <!-- Image -->
                        <div class="mt-4">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <button type="submit"
                                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-yellow-500 hover:bg-yellow-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Save
                            </button>
                            <a href="{{ route('postlist') }}"
                                class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
