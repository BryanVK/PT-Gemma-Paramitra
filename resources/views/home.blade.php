<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="./dist/output.css">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>
<body>
  <!-- NavBar -->
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
            <a href="#aboutUs" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
              <p class="m-4">About Us</p>
            </a>
            <a href="#client" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
              <p class="m-4">Our Clients</p>
            </a>
            <a href="#contact" class=" hover:text-white hover:bg-blue-800 rounded-lg duration-500">
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
      
    <div id="indicators-carousel" class="mt-16 relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <!-- Item 1 -->
            <div class=" duration-700 ease-in-out bg-black" data-carousel-item="active">
                <img src="img/highlight1.png" class="opacity-40 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <img src="img/USF-50.png" class="h-72 mt-8 absolute left-[10%] hidden py-5 text-center text-white md:block" alt="">
                <div class="absolute left-[35%] right-[8%] mt-14 hidden py-5 text-center text-white md:block">
                  <h5 class="font-bold absolute top-0 hidden text-center text-white md:block text-3xl">USF-50 – Banknote Sorter</h5>
                  <p class="font-normal mt-10 text-justify">Banknote handling machines must deliver both high efficiency combined with speed and accuracy. Glory’s USF-50 offers high-performance sensors for fitness sorting and superb counterfeit detection, while processing at a remarkably high speed of up to 720 notes per minute. With the demand for more efficient cash management within the bank branch ever-increasing, the USF-50 has been specifically designed to meet this requirement. A 2-pocket desktop sorter, which can meet all the demands of a modern banking operation, the USF-50 is suitable for any desktop application and allows extensive fitness sorting operations, even in small branches.</p>
                </div>
              </div>
            <!-- Item 2 -->
            <div class=" duration-700 ease-in-out bg-black" data-carousel-item>
                <img src="img/highlight2.png" class="opacity-40 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <img src="img/UW-500.png" class="h-72 mt-8 absolute left-[10%] hidden py-5 text-center text-white md:block" alt="">
                <div class="absolute left-[35%] right-[8%] mt-[100px] hidden py-5 text-center text-white md:block">
                  <h5 class="font-bold absolute top-0 hidden text-center text-white md:block text-3xl">UW-500 - Multi-Pocket Desktop Note Sorter</h5>
                  <p class="font-normal mt-10 text-justify">The state-of-the-art Glory UW-500 and UW-600 were developed based on an in-depth analysis of banknote handling processes in order to lower the operator's workload and further reduce overall processing time. They are equipped with a variety of new features, such as a multi-stacker system that improves sorting and separating performance, a twin reject stacker system that can hold more rejected notes, and a large-capacity hopper with an Assisted Feeding Mechanism.</p>
                </div>
              </div>
            <!-- Item 3 -->
            <div class=" duration-700 ease-in-out bg-black" data-carousel-item>
                <img src="img/highlight3.png" class="opacity-40 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <img src="img/GFS-100.png" class="h-80 mt-8 absolute left-[10%] hidden py-5 text-center text-white md:block" alt="">
                <div class="absolute left-[35%] right-[8%] mt-[100px] hidden py-5 text-center text-white md:block">
                  <h5 class="font-bold absolute top-0 hidden text-center text-white md:block text-3xl">GFS-100 Series – Banknote Counter</h5>
                  <p class="font-normal mt-10 text-justify">The GFS-100 series offers a level of authentication that is best-in-class for bank teller counter applications, and provides one of the best front line forgery protection solutions on the market. It can not only help improve the productivity of banks and other financial institutions, but at a higher level, can also help to maintain the integrity of national currencies through the identification of counterfeit banknotes.</p>
                </div>
              </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-2 h-2 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-6 cursor-pointer group focus:outline-none" data-carousel-prev>
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-6 cursor-pointer group focus:outline-none" data-carousel-next>
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div id="menu" class="relative flex-nowrap pt-12 self-center justify-center flex space-x mt-5 pb-12">
      <a href="product">
        <button type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-80 h-40 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
          <div class="flex items-center justify-center m-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
            </svg>
          </div>
          <h1 class="text-2xl font-semibold">Product</h1>
          <p class="text-xs mt-2 font-normal">Distributes all products from Glory</p>
        </button>
      </a>
      <a href="services-maintenance">
        <button type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-80 h-40 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
          <div class="flex items-center justify-center m-3">
            <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
            </svg>
          </div>
          <h1 class="text-2xl font-semibold">Services</h1>
          <p class="text-xs mt-2 font-normal">Provides maintenance & service</p>
        </button>
      </a>
      <a href="rental">
        <button type="button" class="duration-500 hover:list-image- text-xl m-5 px-4 py-1 w-80 h-40 bg-slate-100 shadow-md rounded-xl text-black hover:text-white hover:bg-blue-900 " >
          <div class="flex items-center justify-center m-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
            </svg>
          </div>
          <h1 class="text-2xl font-semibold">Rental</h1>
          <p class="text-xs mt-2 font-normal">Rent out all products within a certain period of time</p>
        </button>
      </a>
    </div>

    <div id="aboutUs" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-12 m-15 pb-16">
        <h1 class=" top-0 absolute text-blue-800 self-center text-3xl font-bold flex text-center">ABOUT US</h1>
        <p class=" left-0 top-[66px] absolute text-justify text-black text-lg font-normal right-[30%]">PT. Gemma Paramitra, headquartered in Jakarta, Indonesia, is a leading player in providing comprehensive solutions of money handling machines and systems. Since established, our unified sales and service force had been focusing on sales and services of Glory products, the world’s expert in Cash Management. We are backed with dedicated people who pioneered the product development in Indonesia since 1979. Since appointed as Glory’s distributor in Indonesia, PT. Gemma Paramitra has been growing tremendously. Equipped with strong understanding on the market, PT. Gemma Paramitra continue to serve our customers with innovative and robust products to meet the ever changing demand of financial industry.</p>
        <div class="relative left-[80%] w-40 mt-20">
          <img src="img/gemma2.png"  alt="">
        </div>
      </div>
    </div>
      
      </div>
      <div id="client" class="ml-16 mr-16 relative space-x mt-36">
          <h1 class="top-0 text-blue-800 self-center text-3xl font-bold text-center">OUR CLIENT</h1>
          <!-- Swiper -->
          <div class="swiper mySwiper mt-10 ">
            <div class="swiper-wrapper ">
              <div class="swiper-slide "><img class="h-14 " src="img/BI.png" alt=""></div>
              <div class="swiper-slide" ><img class="h-14 " src="img/bca.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/mandiri.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/bni.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/bni-syariah.png" alt=""></div>
              <div class="swiper-slide" ><img class="h-14 " src="img/uob.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/cimbNiaga.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/panin.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/bri.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/jtbk.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/maybank.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/mnc.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/nobu.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/JPMorgan.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/ccb.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/bukopin.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/capital.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/bankSahabat.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/danamon.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/dki.png" alt=""></div>
              
              <div class="swiper-slide"><img class="h-14 " src="img/btn.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/btpn.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/aceh.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/mizuho.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/capital.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/bankSahabat.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/danamon.png" alt=""></div>
              <div class="swiper-slide"><img class="h-14 " src="img/dki.png" alt=""></div>
            </div>
            
          </div>
          <div class="swiper-wrapper mt-14">
            <div class="swiper-pagination"></div>
          </div>
      </div>

      <div id="contact" class="mt-32 flex flex-row ml-16 mr-16 relative flex-nowrap space-x">
          <h1 class="top-0 absolute text-blue-800 self-center text-3xl font-bold text-center flex">CONTACT US</h1>
          <div class="mt-12 text-black text-lg font-normal"><p class="text-xl font-semibold">Head Office</p>Jl. Balikpapan I No. 5A-B Jakarta 10130 – Indonesia<br/><br/>Phone : +62 21 632 2953-54<br/>Fax      : +62 21 632 2925<br/>Email   : gemmap@gemmaparamitra.com</div>
          <iframe class="relative flex flex-row left-[230px]" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.828131398956!2d106.8122274!3d-6.1699693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f67963b0e6e3%3A0xaca515120c84226b!2sPT.%20Gemma%20Paramitra!5e0!3m2!1sid!2sid!4v1692945024720!5m2!1sid!2sid" width="400" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      
      <form name="submit-to-google-sheet" action="/home/simpan" method="POST" enctype="multipart/form-data" class="mt-3 ml-12 mr-12 relative pt-4 space-x m-15">
        @csrf
        <div class="w-full px-4 mt-2">
          <label for="name" class=" font-semibold text-lg">Name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror border mt-1 w-full h-11 bg-white text-dark rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
          @error('name')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
          @enderror
        </div>  

        <div class="mt-3">
          <div class="flex flex-row">
            <div class="w-full px-4">
                <label for="email" class="text-lg font-semibold">Email</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror border mt-1 w-full h-11 bg-white text-dark rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="w-full px-4">
              <label for="phone" class="text-lg font-semibold">No Tel</label>
              <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror border mt-1 w-full h-11 bg-white text-dark rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
              @error('phone')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
              @enderror
            </div>
          </div>
        </div>

        <div class="mt-3">
          <div class="flex flex-row">
            <div class="w-full px-4">
                <label for="company" class="text-lg font-semibold">Company</label>
                <input type="text" id="company" name="company" value="{{ old('company') }}" class="form-control @error('company') is-invalid @enderror border mt-1 w-full h-11 bg-white text-dark rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                @error('company')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
          <div class="w-full px-4">
            <label for="industry" class="text-lg font-semibold">Industry</label>
                <input type="text" id="industry" name="industry" value="{{ old('industry') }}" class="form-control @error('industry') is-invalid @enderror border  mt-1 w-full h-11 bg-white text-dark rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                @error('industry')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
                @enderror
          </div>
        </div>

        <div class="w-full px-4 mt-2">
            <label for="message" class="text-lg font-semibold">Message</label>
              <input type="text" id="message" name="message" value="{{ old('message') }}" class="form-control @error('message') is-invalid @enderror border mt-1 w-full h-28 bg-white text-dark rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
              @error('message')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
              @enderror
        </div>

        <div class="flex ml-3 ">
            <button type="submit" class="w-72 mt-6 text-center text-base font-semibold text-white bg-blue-900 py-3 duration-500 hover:opacity-80 hover:shadow-lg rounded-xl mb-4">Kirim</button>
        </div>
      </form>
      <span id="msg" class="text-blue-950 font-medium mt-5 ml-5 text-xl"></span>
    </div>
  </div>
    <footer class="bg-blue-900 w-full h-full mt-28 pt-24 pb-12">
        <div class="container ml-5 block ">
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
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzWSQ0jMBOBPNdZ67CP15-howFOpMLPGUUuTENeQdMyItV8cBve9ok4Tqf7eHYCkDyR_A/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById("msg")
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
          msg.innerHTML = "Message sent sucessfully"
          setTimeout(() => {
            msg.innerHTML = ""
          }, 3000);
          form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>
</body>
</html>