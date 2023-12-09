<section id="faq" class="relative pt-24 pb-28 bg-blueGray-50 overflow-hidden">
    <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2" alt="">
    <div class="relative z-10 container px-4 mx-auto">
      <div class="md:max-w-4xl mx-auto">
        <h2 class="mb-16 text-6xl md:text-8xl xl:text-10xl text-center font-bold font-heading tracking-px-n leading-none">{{ __('wpbox.fr_as_qu') }}</h2>
        <div class="mb-11 flex flex-wrap -m-1">

          @foreach ($faqs as $faq)

            <div class="w-full p-1">
              <a href="#">
                <div class="py-7 px-8 bg-white bg-opacity-60 border-2 border-green-600 rounded-2xl shadow-10xl">
                  <div class="flex flex-wrap justify-between -m-2">
                    <div class="flex-1 p-2">
                      <h3 class="mb-4 text-lg font-semibold leading-normal">{{$faq->title}}</h3>
                      <p class="text-gray-600 font-medium">{{$faq->description}}</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
         
        </div>
      </div>
    </div>
  </section>