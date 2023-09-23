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
        <img src="img/GFS-100.png" class="w-64" alt="">
        <div class="absolute left-[35%] right-16 hidden py-5 text-center text-black md:block">
            <h5 class="text-blue-900 font-bold absolute top-0 hidden text-center md:block text-3xl">GFS-100 Series – Banknote Counter</h5>
            <p class="text-lg font-normal mt-10 text-justify">The GFS-100 series offers a level of authentication that is best-in-class for bank teller counter applications, and provides one of the best front line forgery protection solutions on the market. It can not only help improve the productivity of banks and other financial institutions, but at a higher level, can also help to maintain the integrity of national currencies through the identification of counterfeit banknotes.</p>
            <div class="content-start mt-6 p-2 w-60 font-semibold text-white bg-blue-900 duration-500 hover:opacity-80 hover:shadow-lg rounded-xl">
                <button>MINTA PENAWARAN</button>
            </div>
            
        </div>
    </div>
    
    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-26 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-3xl font-bold flex text-center">Spesification</h1>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-9 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Glory’s unique note scanning technologies</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The GFS-100 series offers efficient performance with maximum levels of recognition and authentication. The CIS (contact image sensor) full banknote image scanning technology provides full face scan of both sides of each banknote, multiple image technology using multiple sensors, highest levels of resolution, glory’s technology allows the simplest yet most effective method of achieving the maximum levels of recognition and authentication whilst ensuring reliable and efficient performance.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-32 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Noise and dust proof shutter</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal"> As each count is started a protective shutter automatically closes, covering the note output hopper. This helps to decrease the level of noise and dust emitted by the unit, ensuring safe and comfortable operation for the user.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-20 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Easy access note transport path</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The GFS has been designed to allow easy access to the entire note transport path, thus ensuring easy recovery from a jam and minimal downtime. The design also allows</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-20 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Utilising the latest banknote recognition technologies</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Glory continuously strives for improved authentication and recognition technologies through banknote data updates from every corner of the globe. Our worldwide installed base varies from simple piece counters to multiple pocket sorters, banknote recyclers and deposit modules for ATMs. Banknote data collected from each type of machine is analysed and evaluated at Glory’s headquarters and used in our program of continuous improvement.</p>
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