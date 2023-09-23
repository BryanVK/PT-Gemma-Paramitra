<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="./dist/output.css">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
</head>
<body>
    {{-- ini header --}}
    <header >
        <img class="" src="./src/highlight1.png" alt="">
          <nav class="h-[70px] w-full bg-white bg-opacity-20 shadow mx-auto flex  items-center justify-between p-6 lg:px-8" >
            <div class="flex lg:flex-1">
              <a href="#" class="-m-1.5 p-1.5 w-auto">
                <span class="sr-only">Your Company</span>
                <img class="h-11 w-auto" src="img/logo.png" alt="">
              </a>
            </div>
            <div class="flex font-semibold text-[15px]">
              <a href="home" class="rounded-lg hover:text-white hover:bg-blue-800 duration-500 ">
                <p class="m-4">Home</p>
              </a>
              <a href="home#aboutUs" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
                <p class="m-4">About Us</p>
              </a>
              <a href="home#client" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
                <p class="m-4">Our Clients</p>
              </a>
              <a href="home#contact" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
                <p class="m-4">Contact Us</p>
              </a>
              <a href="product" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
                <p class="m-4">Products</p>
              </a>
              <a href="services" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
                <p class="m-4">Services</p>
              </a>
              <a href="rental" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
                <p class="m-4">Rental</p>
              </a>
            </div>
            <div class="flex">
              <button type="button" class="m-3 inline-flex items-center justify-center rounded-md text-gray-700">
                <span class="sr-only">Open main menu</span>
                <a href="#" class="">
                  <img class="h-4 w-4 inline-flex items-center justify-center" src="img/search.png" alt="search">
                </a>
              </button>
            </div>
            <div class="flex lg:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
          </nav>
      </header>
      
    <div class="m-16 flex">
        <img src="img/GFB-800.png" class="w-64" alt="">
        <div class="absolute left-[35%] right-16 hidden py-5 text-center text-black md:block">
            <h5 class="text-blue-900 font-bold absolute top-0 hidden text-center md:block text-3xl">GFB-800 – Series Note Counters</h5>
            <p class="text-lg font-normal mt-10 text-justify">The GFB-800/900 is a high quality banknote counter with Glory’s MCCD system to protect against counterfeits. All the MCCDs (Multiple Currency Counterfeit Detector) used in our banknote counters have been developed by Glory. Although many of these outstanding technologies lie deep inside our devices, where they are not readily visible, be assured that each GFB is supported by an abundance of advanced Glory technologies.</p>
            <div class="content-start mt-6 p-2 w-60 font-semibold text-white bg-blue-900 duration-500 hover:opacity-80 hover:shadow-lg rounded-xl">
                <button>MINTA PENAWARAN</button>
            </div>
            
        </div>
    </div>
    
    <div>
      
    </div>
    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-26 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-3xl font-bold flex text-center">Spesification</h1>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-9 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Speed and efficiency that contribute to smooth business operations</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Glory GFB banknote counters achieve a high counting speed of 1800 notes per minute, one of the fastest in the world for a device in this class. Glory’s acclaimed technologies overcome the possibility of increased errors and miss-count rates that often accompany increased speed, making it possible to achieve a counting speed unmatched by conventional counters. Glory’s GFBs can also be set to counting speeds of 1500, 1000 and 500 notes per minute.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-36 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Batch operations – fast, efficient banknote bundling</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Glory GFBs are equipped with automatic batch functions, and preset keys can be used to quickly select batch sizes of 10, 20, 25, 50 and 100 notes. The counter’s numeric keypad can also be used to manually set the batch capacity from 1 to 999.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-24 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Intuitive functions and speedy operation</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">A simple and intuitive display panel, ensures ease of use by the operator. With selectable auto-start function, banknotes can be placed in the counter’s hopper and note counting beings automatically and the simultaneously are checked for authenticity. When counted, notes are removed from the stacker and the note counter automatically resets itself for the next operation.</p>
    </div>
      
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
      });
    </script>
    <script>
      CKEDITOR.replace( 'content' );
  </script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</body>
</html>