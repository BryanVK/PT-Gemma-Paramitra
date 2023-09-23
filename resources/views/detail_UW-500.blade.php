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
        <img src="img/UW-500.png" class="w-64" alt="">
        <div class="absolute left-[35%] right-16 hidden py-5 text-center text-black md:block">
            <h5 class="text-blue-900 font-bold absolute top-0 hidden text-center md:block text-3xl">UW-500/600 Multi-PocketDesktop Note Sorter</h5>
            <p class="text-lg font-normal mt-10 text-justify">The state-of-the-art Glory UW-500 and UW-600 were developed based on an in-depth analysis of banknote handling processes in order to lower the operator’s workload and further reduce overall processing time. They are equipped with a variety of new features, such as a multi-stacker system that improves sorting and separating performance, a twin reject stacker system that can hold more rejected notes, and a large-capacity hopper with an Assisted Feeding Mechanism.</p>
            <div class="content-start mt-6 p-2 w-60 font-semibold text-white bg-blue-900 duration-500 hover:opacity-80 hover:shadow-lg rounded-xl">
                <button>MINTA PENAWARAN</button>
            </div>
            
        </div>
    </div>
    
      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-24 m-15 pb-3">
        <h1 class="top-0 absolute text-blue-900 self-center text-3xl font-bold flex text-center">Spesification</h1>
      </div>

      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-10 m-15 pb-16">
        <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">High-tech recognition capability with superb authentication</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The UW-500/600 also offers outstanding cost-performance features at a high return on investment. They are Glory’s latest answer to the need for smoother, more efficient, continuous processing of large amounts of banknotes. The UW-500/600 will optimise your work processes and dramatically reduce costs.</p>
      </div>

      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-16 m-15 pb-16">
        <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Multi-stacker configurations for diverse sorting patterns with fewer re-sorting steps
        </h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The UW-500 is equipped with four stackers, and the UW-600 comes with eight stackers. This allows diverse sorting and arrangement patterns for each banknote setting operation, and reduces the number of re-sorting steps required by machines with fewer stackers.</p>
      </div>

      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-16 m-15 pb-16">
        <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Higher efficiency for continuous, large-volume processing</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The large-capacity hopper holds 1,000 banknotes. With the Assisted Feeding Mechanism, the hopper reliably feeds one note at a time to prevent jamming or high rejects due to double feeding. The open-type hopper provides visibility of the banknote feeding process so more notes can be added in continuous large-volume deposits.</p>
      </div>

      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-16 m-15 pb-16">
        <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Efficient processing</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The large-capacity hopper holds 1,000 banknotes. With the Assisted Feeding Mechanism, the hopper reliably feeds one note at a time to prevent jamming or high rejects due to double feeding. The open-type hopper provides visibility of the banknote feeding process so more notes can be added in continuous large-volume deposits.</p>
      </div>

      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-16 m-15 pb-16">
        <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Twin reject stacker system – less work for sorting rejected banknotes</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Two enlarged reject stackers, holding up to 150 banknotes each. Two enlarged reject stackers have greatly improved the UW’s “Non-Stop Operation” and allow suspected counterfeits to be diverted to a dedicated reject stacker, saving time when reconciling deposits. This reduces the amount of work normally required for sorting rejected banknotes.</p>
      </div>

      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-16 m-15 pb-16">
        <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Ease of use and operation</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The display features two side-by-side LCDs, one for displaying data and messages and the other for use as an illustrated system guide. Wide display screens substantially improve visibility.</p>
      </div>

      <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-9 m-15 pb-16">
        <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Easier maintenance – quick recovery reduces processing interruptions</h1>
        <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The system features a fully opening top that allows easy maintenance of the banknote transport section. Should banknotes or foreign objects jam in the counting or transport section, the wide-opening upper section of the main unit makes it easy to find and remove the jammed notes or foreign object.</p>
      </div>
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