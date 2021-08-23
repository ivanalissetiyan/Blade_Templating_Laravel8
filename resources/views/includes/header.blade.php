       <section class="h-full w-full border-box bg-black transition-all duration-500 linear">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-4-4 .btn-outline {
        border: 1px solid #999999;
        color: #999999;
        transition: 0.3s;
      }

      .header-4-4 .btn-outline:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
        transition: 0.3s;
      }

      .header-4-4 .btn-outline:hover div path {
        fill: #ffffff;
        transition: 0.3s;
      }

      .header-4-4 .btn-try {
        background-image: linear-gradient(rgba(208, 254, 123, 1),
            rgba(163, 252, 158, 1));
        transition: 0.3s;
      }

      .header-4-4 .btn-try:hover {
        --tw-shadow: inset 0 0px 18px 0 rgba(0, 0, 0, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-4-4 .navigation a:hover,
      .header-4-4 .active {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-4-4 .navigation a:hover {
        color: #ffffff;
        transition: 0.3s;
      }

      .header-4-4 .navigation {
        color: #b9b9b9;
        transition: 0.3s;
      }

      .header-4-4 .bg-screen {
        background-color: #2c2c2c;
      }

      .header-4-4 .bg-popup {
        background-color: #000000;
      }

      .header-4-4 .text-white-1 {
        color: #e7e7e8;
      }
    </style>
    <!-- Navbar -->
    <div class="header-4-4" style="font-family: 'Poppins', sans-serif">
      <header x-data="{ open: false }">
        <div class="mx-auto flex py-12 lg:px-24 md:px-16 sm:px-8 px-8 items-center justify-between lg:justify-start">
          <a href="#">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-4.png"
              alt="" />
          </a>
          <div class="flex mr-0 lg:hidden cursor-pointer">
            <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="#E7E7E8" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </div>
          <div :class="{'hidden': !open}"
            class="bg-screen bg-black fixed w-full hidden h-full top-0 left-0 z-30 bg-opacity-60" @click="open = !open">
          </div>
          <nav
            class="navigation lg:mr-auto hidden lg:flex flex-col text-base justify-center z-50 fixed top-8 left-3 right-3 p-8 rounded-md shadow-md bg-white lg:flex lg:flex-row lg:relative lg:top-0 lg:shadow-none bg-popup lg:bg-transparent lg:p-0 lg:items-center items-start"
            :class="{'flex': open, 'hidden': !open}">
            <a href="#">
              <img class="m-0 lg:hidden mb-3"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-4.png"
                alt="" />
            </a>
            <a class="text-lg text-white font-semibold leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative active"
              href="{{ route('index') }}">Home</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="{{ route('landing.perusahaan') }}">Perusahaan</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="{{ route('landing.cto') }}">CTO</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="{{ route('landing.ceo') }}">CEO</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="{{ route('landing.alamat') }}">Alamat</a>
            <div class="flex items-center justify-end w-full lg:hidden mt-3">
              <button class="font-light text-white-1 py-3 px-8 focus:outline-none">
                Log In
              </button>
              <button class="btn-try text-black text-lg py-3 px-8 rounded-xl focus:outline-none font-semibold">
                Try Now
              </button>
            </div>
            <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 lg:hidden cursor-pointer" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </nav>
          <div class="hidden lg:inline-flex">
            <button
              class="inline-flex text-white-1 text-black font-light text-lg leading-7 py-3 px-8 focus:outline-none">
              Log In
            </button>
            <button
              class="btn-try inline-flex text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none font-semibold">
              Next Client
            </button>
          </div>
        </div>
      </header>

      <!-- Hero -->
   
  </section><section class="h-full w-full border-box bg-white">
		<style>
			@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

			.content-2-2 .btn-outline {
				border: 1px solid #979797;
				color: #979797;
			}

			.content-2-2 .btn-outline:hover {
				border: 1px solid #27c499;
				color: #27c499;
			}

			.content-2-2 .btn-fill {
				background-color: #27c499;
				border: 1px solid #27c499;
			}

			.content-2-2 .card-header {
				background-color: #eef6f4;
				border: 1px solid #27c499;
			}

			.content-2-2 .text-medium-black {
				color: #121212;
			}

			.content-2-2 .text-gray {
				color: #565656;
			}
		</style>

	
