<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rental</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="./dist/output.css">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
</head>
<body>
    {{-- ini header --}}
    <header class="bg-white fixed top-0 z-50 w-full shadow-md">
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

      <div id="product" class="ml-16 mr-16 relative space-x mt-28  pb-12">
        <h1 class="top-0 text-blue-800 self-center text-3xl font-bold text-center">RENTAL</h1>
      </div>
      
      <div class="rental">
        <div id="list-product" class="relative flex-nowrap self-center justify-center flex space-x">
            <a href="UW-500-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/UW-500.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">UW-500/600</h1>
                <h1 class="text-sm text-center font-semibold">Desktop Note Sorter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="UW-500-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            <a href="USF-100-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/USF-100.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">USF-100</h1>
                <h1 class="text-sm text-center font-semibold">Banknote Sorter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="USF-100-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="USF-50-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/USF-50.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">USF-50</h1>
                <h1 class="text-sm text-center font-semibold">Banknote Sorter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="USF-50-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="USF-300-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/USF-300.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">USF-300</h1>
                <h1 class="text-sm text-center font-semibold">Banknote Sorter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="USF-300-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
          </div>
      </div>
      <div class="">
        <div id="list-product" class="relative flex-nowrap self-center justify-center flex space-x ">
            <a href="GFB-800-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/GFB-800.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">GFB-800</h1>
                <h1 class="text-sm text-center font-semibold">Series Note Counters</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="GFB-800-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:bg-white hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="GNH-700-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/GNH-700.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">GNH/GND-700</h1>
                <h1 class="text-sm text-center font-semibold">Series Banknote Counter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="GNH-700-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="GFS-100-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/GFS-100.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">GFS-100</h1>
                <h1 class="text-sm text-center font-semibold">Series Banknote Counter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="GFS-100-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="WR-500-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/WR-500.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">WR-500/90</h1>
                <h1 class="text-sm text-center font-semibold">Coin Wrapper</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="WR-500-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            
          </div>
      </div>

      <div class="pb-23">
        <div id="list-product" class="relative flex-nowrap self-center justify-center flex space-x ">
            <a href="DE-100-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/DE-100.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">DE-100</h1>
                <h1 class="text-sm text-center font-semibold">Deposit Machine</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="DE-100-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:bg-white hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="RBG-100-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/RBG-100.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">RBG-100</h1>
                <h1 class="text-sm text-center font-semibold">Teller Cash Recycler</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="RBG-100-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="CCR-10-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/CCR-10.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">CCR-10</h1>
                <h1 class="text-sm text-center font-semibold">Coin Counter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="CCR-10-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
              </div>
            </a>
            
            <a href="CP-11-rent">
              <div type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-60 h-72 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
                <div class="flex items-center justify-center m-3">
                    <img src="img/CP-11.png" class="h-36">
                </div>
                <h1 class="text-2xl text-center font-semibold">CP-11</h1>
                <h1 class="text-sm text-center font-semibold">Coin Counter</h1>
                <div class="flex items-center justify-center m-3 mt-5">
                    <a href="CP-11-rent" type="submit" class="w-52 text-center items-center text-sm font-semibold text-white bg-slate-400 py-1 duration-500 hover:shadow-lg rounded-2xl mb-4">DETAIL</a>
                </div>
            </div>
            </a>
          </div>
        <div class="mb-16"></div>
      </div>

      <footer class="bg-blue-900 w-full h-full mt-28 pt-24 pb-12">
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
    </footer>  
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