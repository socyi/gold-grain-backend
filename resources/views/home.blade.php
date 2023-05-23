<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Gold Grain
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">

    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    
  </head>
  <body class="leading-normal tracking-normal" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->  
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <img src="images/logo.png" alt="Logo" class="h-20 w-20">
        </div>
      

        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>

        <div class="w-full lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <div class="lg:flex lg:flex-col lg:items-end">
            <div class="lg:flex lg:items-center">
              <div class="mr-1">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">info@comany.com</a>
              </div>
              <div class="mr-1">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">EN</a>
              </div>
              <div class="mr-1">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">GR</a>
              </div>
            </div>
            <ul class="lg:flex list-reset lg:justify-end flex-1 items-center">
              <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#about">About Us</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#products">Products</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#services">Services</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="border-b border-yellow-100" />
    </nav>
  
    <div class="pt-24 mt-4">
      <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <img src="images/image1.png" alt="Background">
      </div>
    </div>
 
      <!-- About Us -->
      <div  class="container mx-auto flex flex-wrap flex-col md:flex-row my-8">
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start md:text-left">
          <h1 id="about" class=" text-3xl font-bold leading-tight mb-4">
            ABOUT US
          </h1>
          <p class="leading-normal mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur risus eget urna efficitur, at vestibulum tortor rutrum. Vestibulum euismod neque eget justo posuere dapibus. Curabitur id quam leo. Sed feugiat, justo ac ultrices accumsan, nulla metus commodo justo, in pellentesque metus nunc in neque. Praesent blandit fringilla urna, sed tempus enim vestibulum in. Nulla sollicitudin elementum ipsum, sit amet facilisis velit mattis vel.
          </p>
          <p class="leading-normal mb-8">
            In id suscipit eros. Mauris tincidunt odio in sapien aliquet consectetur. Sed vel convallis nunc, eu viverra mauris. Quisque egestas, nisi a vulputate fringilla, ligula tortor interdum elit, id dignissim velit erat vitae urna. Cras hendrerit hendrerit nisl at pharetra. Fusce vulputate neque vitae magna cursus fermentum.
          </p>
          <p class="leading-normal mb-8">
            Phasellus eget neque in velit rhoncus scelerisque. Nulla facilisi. Nullam varius nulla in justo cursus, ut feugiat sem rutrum. Vivamus tincidunt finibus ipsum, id malesuada metus dignissim eu. Aenean quis elit eu nulla tincidunt posuere. Integer sodales magna id eros auctor, id lacinia eros tincidunt. Duis eu feugiat ex, eu hendrerit mi.
          </p>
          
        </div>
        <div class="w-full md:w-3/5">
          <img class="md:w-4/5" src="images/image2.png" />
        </div>
      </div>
      <!-- services -->
     
      <div  id="services" class ="container mx-auto my-8 bg-green-50 p-4">
        <h1 class="text-3xl font-bold leading-tight mb-4">
          SERVICES
        </h1>
        <div class="grid grid-cols-3 gap-4 mb-4">
          <div class="col-span-1 flex items-center justify-start">
            <img src="images/icon1.svg" class="w-1/3 h-1/2" alt="icon thumb">
          </div>
          <div class="col-span-1 sm:col-span-1 flex items-center justify-center">
            <div class="text-4xl font-bold">
              <span class="hidden sm:inline">. . . . . . . . . . . . .</span>
              <span class="inline sm:hidden">. . . . .</span>
            </div>
          </div>
          <div class="col-span-1 flex items-center justify-end">
            <img src="images/icon2.svg" class="w-1/3 h-1/2" alt="icon tree">
          </div>
     
        </div>
      
      
      
        <div class="grid grid-cols-3 gap-4">
          <div>
            <ul class=" ml-3">
              <li class="mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </li>
              <li class="mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </li>
              <li class="mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </li>
            
            </ul>
          </div>
          <div>
            <ul class="list-disc ml-4">
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
            </ul>
          </div>
          <div>
            <ul class="list-disc ml-4">
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
              <li class="mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </li>
            </ul>
          </div>
        </div>
        </div>
        

        <div class="container mx-auto my-8 p-4">
          <h1 id="products" class="text-3xl font-bold leading-tight mb-8">
            PRODUCTS
          </h1>  
       
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border border-gray-100 aspect-w-1 aspect-h-1">
              <div class="flex flex-col justify-center items-center h-full">
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="lorem">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

              </div>
            </div>
            <div class="border border-gray-100 aspect-w-1 aspect-h-1">
              <div class="flex flex-col justify-center items-center h-full">
                <div class="flex justify-center opacity-50">
                  <img src="images/wheat.jpg" class="object-cover object-center h-full w-full" alt="barley">
                </div>
                <h3 class="text-center font-bold">Wheat</h3>
              </div>
            </div>

            <div class="border border-gray-100 aspect-w-1 aspect-h-1">
              <div class="flex flex-col justify-center items-center h-full">
                <div class="flex justify-center">
                  <img src="images/barley.jpg" class="object-cover object-center h-full w-full" alt="barley">
                </div>
                <h3 class="text-center font-bold">Barley</h3>
              </div>
            </div>
            <div class="border border-gray-100 aspect-w-1 aspect-h-1">
              <div class="flex flex-col justify-center items-center h-full">
                <div class="flex justify-center">
                  <img src="images/rye.jpg" class="object-cover object-center h-full w-full" alt="rye">
                </div>
                <h3 class="text-center font-bold">Rye</h3>
              </div>
            </div>
            <div class="border border-gray-100 aspect-w-1 aspect-h-1">
              <div class="flex flex-col justify-center items-center h-full">
                <div class="flex justify-center">
                  <img src="images/beans.jpg" class="object-cover object-center h-full w-full" alt="beans">
                </div>
                <h3 class="text-center font-bold">Beans</h3>
              </div>
            </div>
            <div class="border border-gray-100 aspect-w-1 aspect-h-1">
              <div class="flex flex-col justify-center items-center h-full">
                <div class="flex justify-center">
                  <img src="images/peas.jpg" class="object-cover object-center h-full w-full" alt="peas">
                </div>
                <h3 class="text-center font-bold">Peas</h3>
              </div>
            </div>
          </div>
          

          
        </div>
            

 <!-- scripts -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
     

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {

          if (checkParent(target, navMenu)) {
  
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
    
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
