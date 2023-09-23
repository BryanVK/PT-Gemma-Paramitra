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
        <img src="img/USF-300.png" class="w-64" alt="">
        <div class="absolute left-[35%] right-16 hidden py-5 text-center text-black md:block">
            <h5 class="text-blue-900 font-bold absolute top-0 hidden text-center md:block text-3xl">USF-300 – Banknote Sorter</h5>
            <p class="text-lg font-normal mt-10 text-justify">Banknote handling machines must deliver both high efficiency combined with speed and accuracy. Glory’s USF-300 offers high-performance sensors for fitness sorting and superb counterfeit detection, while processing at a remarkably high speed of up to 720 notes per minute
              Glory’s USF-300 currency sorter improves cash management efficiency by recycling the banknotes in the branch, as well as currency chests, and reduces workload while achieving high accuracy and efficient productivity. A 3-pocket desktop sorter, which can meet all the demands of a modern banking operation, the USF-300 is suitable for multiple applications and environments and allows enhanced fitness sorting productivity, even in locations where space is at a premium.</p>
            <div class="content-start mt-6 p-2 w-60 font-semibold text-white bg-blue-900 duration-500 hover:opacity-80 hover:shadow-lg rounded-xl">
                <button>RENT NOW</button>
            </div>
            
        </div>
    </div>
    
    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-56 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-3xl font-bold flex text-center">Spesification</h1>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-9 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Denomination sorting</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">mixed banknotes are sorted by denomination to dedicated stackers.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-9 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Orientation sorting</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">the mixed banknotes are sorted by direction, such as face up/down and portrait up/down.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-9 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Fitness sorting</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">banknotes are sorted by quality/fitness, detecting folded corners, holes, soil, tears and tape as unfit notes.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-9 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Authentication</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">a range of advanced banknote scanning technologies for accurate and reliable counterfeit detection.</p>
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