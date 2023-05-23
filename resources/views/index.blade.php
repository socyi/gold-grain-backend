<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <meta name="author" content="">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #a0640a;
            background-image: linear-gradient(315deg, #a1a132 0%, #c07a19 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Gold Grain</h1>
        </a>
    </header>

    <div class="flex justify-between max-w-lg mx-auto my-10">
        <div class="bg-white w-1/2 rounded-lg shadow-2xl mr-4">
            <div class="mb-6">
                <section class="bg-gray-100 rounded p-4">
                    <h3 class="font-bold text-2xl">Register</h3>
                    <p class="text-gray-600 pt-2">Create a new account.</p>
                </section>
            </div>

            <div class="mb-6">
                <section class="bg-gray-100 rounded p-4">
                    <form class="flex flex-col" method="post" action="/register">
                        @csrf
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">User Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-yellow-600 transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                            <input type="text" name="email" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-yellow-600 transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                            <input type="password" name="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-yellow-600 transition duration-500 px-3 pb-3">
                        </div>
                        
                        <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" >Register</button>
                    </form>
                </section>
            </div>
        </div>

        <div class="bg-white w-1/2 rounded-lg shadow-2xl ml-4">
            <div class="mb-6">
                <section class="bg-gray-100 rounded p-4">
                    <h3 class="font-bold text-2xl">Sign in</h3>
                    <p class="text-gray-600 pt-2">Sign in to your account.</p>
                </section>
            </div>

            <div class="mb-6">
                <section class="bg-gray-100 rounded p-4">
                    <form class="flex flex-col" method="post" action="/login">
                        @csrf
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">User Name</label>
                            <input type="text" name="loginname" id="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-yellow-600 transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                            <input type="password" name="loginpassword" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-yellow-600 transition duration-500 px-3 pb-3">
                        </div>
                        
                        <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Sign In</button>
                    </form>
                </section>
            </div>
        </div>
    </div>

</body>
</html>
