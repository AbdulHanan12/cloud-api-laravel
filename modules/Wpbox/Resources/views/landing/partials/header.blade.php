<section class="relative">
    <img class="absolute left-0 top-0" style="width: 120%; opacity:0.4" src="{{ asset('uploads/default/wpbox/background.svg')}}" alt="">
    <div class="container mx-auto overflow-hidden">
      <div class="relative z-20 flex items-center justify-between px-4 py-5 bg-transparent">
        <div class="w-auto">
          <div class="flex flex-wrap items-center">
            <div class="w-auto mr-14">
              <a href="#">
                <img style="max-height: 40px" src="{{ config('settings.logo') }}" alt="">
              </a>
            </div>
           
          </div>
        </div>


        <div class="w-auto">
          <div class="flex flex-wrap items-center">

            <div class="w-auto hidden lg:block">
              <ul class="flex items-center mr-16">
                <li class="mr-9 font-medium hover:text-gray-700"><a href="#features">{{ __('wpbox.features') }}</a></li>
                <li class="mr-9 font-medium hover:text-gray-700"><a href="#demo">{{ __('wpbox.demo') }}</a></li>
                <li class="mr-9 font-medium hover:text-gray-700"><a href="#pricing">{{ __('wpbox.pricing') }}</a></li>
                <li class="mr-9 font-medium hover:text-gray-700"><a href="#testimonials">{{ __('wpbox.testimonials') }}</a></li>
                <li class="font-medium hover:text-gray-700"><a href="#faq">{{ __('wpbox.faq') }}</a></li>
              </ul>
            </div>
          </div>
        </div>




        <div class="w-auto">
          <div class="flex flex-wrap items-center">
           
            @guest
              <div class="w-auto hidden lg:block">
                <div class="inline-block">
                  <a href="{{ route('login')}}" class="py-2.5 px-4 text-base w-full font-medium border border-gray-400 hover:border-gray-500 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">{{ __('Login')}}</a>
                </div>
              </div>

              <div class="w-auto hidden lg:block ml-2">
                <div class="inline-block">
                  <a href="{{ route('register')}}" class="py-2.5 px-4 text-base w-full font-medium border border-gray-400 hover:border-gray-500 rounded-xl focus:ring focus:ring-gray-50 bg-gradient-to-r from-purple-500 via-indigo-600 to-blue-500 text-white   transition ease-in-out duration-200" type="button">{{ __('Sign up')}}</a>
                </div>
              </div>
            @endguest

            @auth
              <div class="w-auto hidden lg:block ml-2">
                <div class="inline-block">
                  <a href="{{ route('home')}}" class="py-2.5 px-4 text-base w-full font-medium border border-gray-400 hover:border-gray-500 rounded-xl focus:ring focus:ring-gray-50 bg-gradient-to-r from-purple-500 via-indigo-600 to-blue-500 text-white   transition ease-in-out duration-200" type="button">{{ __('Dashboard')}}</a>
                </div>
              </div>
            @endauth

            


            <div class="w-auto lg:hidden">
              <a href="#">
                <svg class="navbar-burger text-purple-500" width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                  <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
        <nav class="relative z-10 px-9 pt-8 bg-white h-full overflow-y-auto">
          <div class="flex flex-wrap justify-between h-full">
            <div class="w-full">
              <div class="flex items-center justify-between -m-2">
                <div class="w-auto p-2">
                  <a class="inline-block" href="#">
                    <img style="max-height: 40px" src="{{ config('settings.logo') }}" alt="">
                  </a>
                </div>
                <div class="w-auto p-2">
                  <a class="navbar-burger" href="#">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="flex flex-col justify-center py-16 w-full">
              <ul>
                <li class="mb-12"><a class="font-medium hover:text-gray-700" href="#features">{{ __('wpbox.features') }}</a></li>
                <li class="mb-12"><a class="font-medium hover:text-gray-700" href="#demo">{{ __('wpbox.demo') }}</a></li>
                <li class="mb-12"><a class="font-medium hover:text-gray-700" href="#pricing">{{ __('wpbox.pricing')}} </a></li>
                <li class="mb-12"><a class="font-medium hover:text-gray-700" href="#testimonials">{{ __('wpbox.testimonials') }}</a></li>
                <li><a class="font-medium hover:text-gray-700" href="#faq">{{ __('wpbox.faq') }}</a></li>
              </ul>
            </div>
            <div class="flex flex-col justify-end w-full pb-8">
              <div class="flex flex-wrap">
                <div class="w-full">
                  @guest
                    <div class="block">
                      <a href="{{ route('login')}}" class="mb-4 py-2.5 px-4 text-base w-full font-medium border border-gray-400 hover:border-gray-500 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">{{ __('wpbox.login')}}</a>
                    </div>
                    <div class="block">
                      <a href="{{ route('register')}} "class="mt-2 py-2.5 px-4 text-base w-full font-medium border border-gray-400 hover:border-gray-500 rounded-xl focus:ring focus:ring-gray-50 bg-gradient-to-r from-purple-500 via-indigo-600 to-blue-500 text-white transition ease-in-out duration-200" type="button">{{ __('wpbox.signup')}}</a>
                    </div>
                  @endguest
                  @auth
                    <div class="block">
                      <a href="{{ route('home')}} "class="mt-2 py-2.5 px-4 text-base w-full font-medium border border-gray-400 hover:border-gray-500 rounded-xl focus:ring focus:ring-gray-50 bg-gradient-to-r from-purple-500 via-indigo-600 to-blue-500 text-white transition ease-in-out duration-200" type="button">{{ __('Dashboard')}}</a>
                    </div>
                  
                  @endauth
                  
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="relative z-10 overflow-hidden pt-16">
      <div class="container px-10 mx-auto">
        <div class="text-center">

          <h1 class="text-7xl sm:text-9xl font-black drop-shadow-md uppercase text-center">
            
        </h1>

          <h1 class="mb-9 text-6xl md:text-8xl xl:text-10xl font-bold font-heading tracking-px-n leading-none">{{ __('The') }}
            <span class="bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">Whats</span>
            <span class="bg-clip-text -ml-5 bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 text-transparent">Box</span>
            {{ __('wpbox.header') }}</h1>
          <div class="mb-7 block">
            <a class="inline-block text-black hover:text-gray-800" href="#">
              <div class="flex flex-wrap items-center -m-1.5">
               
                <div class="w-auto p-1.5">
                  <p class="font-medium text-black">{{ __('wpbox.header_subtitle') }}</p>
                </div>
              </div>
            </a>
          </div>
          <div class="mb-7 md:inline-block">
            <a href="{{ route('register')}}" class="py-4 px-6 w-full text-white font-semibold border border-gray-700 rounded-xl focus:ring focus:ring-gray-300 bg-black hover:bg-gray-700 transition ease-in-out duration-200" type="button">{{ __('wpbox.start')}}</a>
          </div>
          
          <div class="relative max-w-max mx-auto">
            <img class="mx-auto mt-10 transform hover:scale-105 transition ease-in-out duration-1000" style="max-height: 700px" src="{{ asset('uploads/default/wpbox/header.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>