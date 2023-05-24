<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Posts</title>
  <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
</head>

<body>

  <!-- Index Post -->
  <div class="container max-w-7xl mx-auto mt-8">
    <div class="mb-4">
      <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">Posts Lists</h1>
      <div class="flex justify-end">
        <a href="{{ route('create-post') }}"
          class="px-4 py-2 rounded-md bg-yellow-500 text-sky-100 hover:bg-yellow-600">Create Post</a>
      </div>
    </div>
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full">
            <thead>
              <tr>
                <th
                  class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  ID</th>
                <th
                  class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  Title</th>
                <th
                  class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  Created_At</th>
                <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                  Action</th>
              </tr>
            </thead>

            <tbody class="bg-white">
              @foreach ($posts as $post)
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <div class="flex items-center">
                    {{ $post->id }}
                  </div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <div class="text-sm leading-5 text-gray-900">{{ $post->title }}</div>
                </td>

                <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                  <span>{{ $post->created_at }}</span>
                </td>
    
                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200">
                  <a href="{{ route('view-post', ['id' => $post->id]) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                </td>
    
                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200">
                  <a href="{{ route('edit-post', ['post' => $post]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              
    
                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200">
                  <form action="{{ route('delete-post', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                  </form>
                </td>
              
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        
      </div>



      <div class="mt-4 flex gap-4">
        <!-- Logout button -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </form>
    
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Home
        </a>
    </div>
    
  </div>
    
