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
        <img src="img/DE-100.png" class="w-36" alt="">
        <div class="absolute left-[35%] right-16 hidden py-5 text-center text-black md:block">
            <h5 class="text-blue-900 font-bold absolute top-0 hidden text-center md:block text-3xl">DE-100 – Deposit Machine</h5>
            <p class="text-lg font-normal mt-10 text-justify">Glory DE-100 is a self-service solution for cash deposits and passbook updates. This machine enables customers to deposit money by themselves, even without the need to use ATM card or passbook. Under the supervision of an attendant person, customers may deposit their money money and get the machine to automatically count the amount of the money. Upon a successful transaction, customers will receive a receipt to be handed in to the teller.</p>
            <div class="content-start mt-6 p-2 w-60 font-semibold text-white bg-blue-900 duration-500 hover:opacity-80 hover:shadow-lg rounded-xl">
                <button>MINTA PENAWARAN</button>
            </div>
        </div>
    </div>
    
    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-20 m-15 pb-3">
      <h1 class="top-0 absolute text-blue-900 self-center text-3xl font-bold flex text-center">Spesification</h1>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-10 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">LCD Display</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">The LCD Display is the component displaying the deposit summary. This component also functions to display instruction, error code, and relevant selection menu.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-6 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Card Reader (Optional)</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Card reader is the component to read the registration (ID) number of the customer. In case customer does not bring the card reader, he/she may still proceed by manually inputting the number through the numeric keypad.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-6 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Numeric Keypad</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">In addition to input the registration number of customer, numeric keypad also functions to enable attendant person to configure the operational setting and fix the error possibly occur during transaction. Similarly, for the assigned staff, this numeric keypad also functions to enter the security code before opening the safe unit and taking out the storage bag.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-12 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Hopper</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Hopper is the component where customers should insert the money that will be deposited, counted, and selected. This component is equipped with hopper plate especially designed to feed money with friction method, thus making this component most suitable with the characteristic of money in Indonesia, which is paper-based instead of polymer-based. With the capacity of hopper plate that can accommodate up to 300 pieces of money and the counting speed of hopper that up to 600 pieces per minute, count time will be significantly reduced. In addition, with Glory’s acclaimed Recognition and Authentication technologies, hopper is capable of recognising multi-currency and distinguishing counterfeit money from genuine one.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-36 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Reject Stacker</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Reject stacker is the component where the counterfeit or unfit money is accumulated. In case machine rejects the money due to damage (unfit money), customers may take the money back and not include them on the hopper.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-6 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Escrow</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Escrow is the component where the counted money is temporarily retained. This component can accommodate up to100 pieces of money at a time before customer authenticate the transaction and money is delivered to safe unit.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-6 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Safe Unit</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Safe unit is the component where the counted money is forwarded after authentication. Safe unit using storage bag with large capacity can hold up to 5,000 pieces of money at a time. Secured via shutter closure, it is easier for transportation. In addition, the bag is also reusable, thus keeping running costs significantly lower.</p>
    </div>

    <div id="spek" class="ml-16 mr-16 relative flex-nowrap pt-4 space-x mt-14 m-15 pb-16">
      <h1 class="top-0 absolute text-blue-900 self-center text-xl font-bold flex text-center">Printer</h1>
      <p class="pb-20 left-0 mt-3 absolute text-justify text-black text-lg font-normal">Printer is the component that generates receipt upon successful transaction. This receipt covers detail of transactions, including customer’s registration or ID number (read from card), amount of money (total and per denomination), currency code, deposit time, etc.</p>
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