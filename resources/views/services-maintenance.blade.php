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
  <header class="bg-white fixed top-0 z-50 w-full shadow-md" >
    <img class="" src="./src/highlight1.png" alt="">
      <nav class="h-[70px] w-full bg-white bg-opacity-20 shadow mx-auto flex  items-center justify-between p-6 lg:px-8" >
        <div class="flex lg:flex-1">
          <a href="home" class="-m-1.5 p-1.5 w-auto">
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
          <a href="services-maintenance" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
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

      
  <div  class="relative w-full bg-black md:h-72 mt-16">
    <div class="relative h-46 overflow-hidden md:h-72">
        <div class=" duration-700 ease-in-out ">
          <img src="img/maintenance.png" class="opacity-80 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <div class="relative mt-9 flex py-5 text-center items-center text-white md:block">
        <h5 class="font-bold flex relative top-0 text-center text-white md:block text-3xl">SERVICES</h5>
        <div class="relative flex items-center justify-center">
            <div class="px-3 py-2 w-60 text-black hover:text-white rounded-xl mx-9 mt-20 bg-blue-300 hover:bg-blue-200 hover:duration-300">
              <a href="services-maintenance">
                <p class="font-bold text-xl text-black ">Maintenance</p>
              </a>
            </div>
            <div class="px-3 py-2 w-60 text-black  rounded-xl mx-9 mt-20 bg-white hover:bg-blue-300 hover:duration-300">
                <a href="services-service">
                  <p class=" font-medium text-xl">Service</p>
                </a>
            </div>
          </div>
        </div>
    </div>
  </div>
      <!-- Carousel wrapper -->
  <div class="relative h-56 overflow-hidden md:h-96">
      <!-- Item 1 -->
    <div class=" duration-700 ease-in-out" data-carousel-item="active">
      <div id="maintenance" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-12 m-15 pb-16">
        <h1 class=" top-0 absolute text-blue-800 self-center text-3xl font-bold flex text-center">Maintenance</h1>
        <p class=" left-0 top-[66px] absolute text-justify text-black text-lg font-normal">PT. Gemma Paramitra, headquartered in Jakarta, Indonesia, is a leading player in providing comprehensive solutions of money handling machines and systems. Since established, our unified sales and service force had been focusing on sales and services of Glory products, the world’s expert in Cash Management. We are backed with dedicated people who pioneered the product development in Indonesia since 1979. Since appointed as Glory’s distributor in Indonesia, PT. Gemma Paramitra has been growing tremendously. Equipped with strong understanding on the market, PT. Gemma Paramitra continue to serve our customers with innovative and robust products to meet the ever changing demand of financial industry.</p>
        <div class="flex mt-56">
          <a href="#" type="submit" class="w-52 mt-12 2 text-center text-lg font-semibold text-white bg-blue-900 py-2 duration-500 hover:opacity-80 hover:shadow-lg rounded-2xl mb-4">Book Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-3"></div>

  <footer class="bg-blue-900 w-full mt-28 pt-24 pb-12">
    <div class="container ml-5 ">
        <div class="flex flex-wrap ">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2">
                <h2 class="font-bold text-2xl text-white mb-5">PT. GEMMA PARAMITRA</h2>
                <h3 class="font-bold text-xl mb-2 text-white">Contact Us</h3>
                <p>+62 21 632 2953 54</p>
                <p>gemmap@gemmaparamitra.com</p>
                <p>Jakarta</p>
            </div>

            <div class="w-full px-4 mb-12 md:w-1/2">
                <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                <ul class="text-slate-300 text-lg">
                    <li>
                        <a href="home" class="inline-block text-base hover:text-white mb-3">Home</a>
                    </li>
                    <li>
                        <a href="home#aboutUs" class="inline-block text-base hover:text-white mb-3">About Us</a>
                    </li>
                    <li>
                        <a href="home#contact" class="inline-block text-base hover:text-white mb-3">Contact Us</a>
                    </li>
                    <li>
                        <a href="product" class="inline-block text-base hover:text-white mb-3">Product</a>
                    </li>
                    <li>
                        <a href="services-maintenance" class="inline-block text-base hover:text-white mb-3">Services</a>
                    </li>
                    <li>
                        <a href="rental" class="inline-block text-base hover:text-white mb-3">Rental</a>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full pt-10 border-t border-white">
            <div class="w-full px-4 ">
                <p class="text-slate-300 flex items-center mt-3 justify-center ">© 2023 PT. GEMMA PARAMITRA</p>
        </div>
      </div>
    </div>
    </footer>      
  
  
</body>
</html>