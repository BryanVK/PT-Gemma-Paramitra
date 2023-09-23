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
        <img src="img/USF-100.png" class="w-64" alt="">
        <div class="absolute left-[35%] right-16 hidden py-5 text-center text-black md:block">
            <h5 class="text-blue-900 font-bold absolute top-0 hidden text-center md:block text-3xl">USF-100 – Banknote Sorter</h5>
            <p class="text-lg font-normal mt-10 text-justify">Glory’s USF-100 currency sorter improves cash management efficiency by recycling the banknotes in the branch and reduces workload while achieving high accuracy and efficient productivity. Recently, the demand has grown for more efficient cash management in branches, resulting in the installation of a banknote sorter at each branch. The USF-100 banknote sorter was developed to meet this demand for banknote recycling. The USF-100 is equipped with both the high performance and easy operability of its higher-end counterparts, such as the UW-500 and UW-600.</p>
            <div class="content-start mt-6 p-2 w-60 font-semibold text-white bg-blue-900 duration-500 hover:opacity-80 hover:shadow-lg rounded-xl">
                <button>MINTA PENAWARAN</button>
            </div>
            
        </div>
    </div>
    
    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-44 m-15 pb-10">
        <h1 class="top-0 absolute text-blue-900 self-center text-3xl font-bold flex text-center">Spesification</h1>
        <p class="pb-20 left-0 mt-8 absolute text-justify text-black text-lg font-normal"></p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x m-15 pb-10">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Next generation sensors with superb counterfeit detection</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Banknote handling machines must deliver both high efficiency combined with speed and accuracy. Glorys USF-100 offers next generation sensors for fitness sorting and superb counterfeit detection, while processing at a remarkably high speed of 650 notes per minute.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-20 m-15 pb-10">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Ease of use and operation</h1>
      <p class=" left-0 mt-3 absolute text-justify text-black text-lg font-normal">The USF-100s display features two side-by-side LCDs, one for displaying data and messages and the other for use as an illustrated system guide. Wide display screens substantially improve visibility.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-16 m-15 pb-10">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Efficient processing</h1>
      <p class="left-0 mt-3 absolute text-justify text-black text-lg font-normal">The large-capacity hopper holds 500 banknotes. Thanks to the Assisted Feeding Mechanism the hopper reliably feeds one note at a time to prevent jamming or high rejects due to double feeding. The open-type hopper provides visibility of the banknote feeding process so more banknotes can be added in continuous large-volume deposits.</p>
    </div>
    

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-20 m-15 pb-10">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Easier maintenance</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The USF-100 features a fully opening top that allows easy maintenance of the banknote transport section. Should banknotes or foreign objects jam in the counting or transport section, the wide-opening upper section of the main unit makes it easy to find and remove the jammed object.</p>
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