<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View</title>
  <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
</head>



<body>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
      <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
        <div class="mb-20">
          <h1 class="text-2xl font-semibold">{{ $post->title }}</h1>
        </div>
  
        <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <div>
              <div class="flex items-center mb-4 space-x-2">
                <span class="text-xs text-gray-500">{{ $post->created_at->format('d/m/Y') }}</span>
                
              </div>
              <div class="text-base text-gray-700">
                {!! nl2br(e($post->content)) !!}
              </div>


              @if ($post->image)
                <div class="mt-4">
                    <img src="{{ asset('/storage/app/' . $post->image) }}" alt="Post Image" class="max-w-full">
                </div>
            @endif
            </div>
        </div class="mt-20">
     
      </div>
      <div>
        <a href="{{ route('postlist') }}"
        class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
        Cancel
    </a>
      </div>
    </div>

    
  </body>
  
</html>
