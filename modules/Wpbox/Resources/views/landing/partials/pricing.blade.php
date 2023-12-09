<section id="pricing" class="pt-24 pb-32 bg-blueGray-50 overflow-hidden">
    <div class="container px-4 mx-auto">
      <h2 class="mb-6 text-6xl md:text-8xl xl:text-10xl font-bold font-heading tracking-px-n leading-none">{{ config('app.name')}} {{ __('wpbox.pricing') }}</h2>
      <div class="mb-16 flex flex-wrap justify-between -m-4">
        <div class="w-auto p-4">
          <div class="md:max-w-md">
            <p class="text-lg text-gray-900 font-medium leading-relaxed"><!-- ENTER CUSTOM PRICING TEXT HERE --></p>
          </div>
        </div>
      </div>
      <div class="overflow-hidden border border-blueGray-200 rounded-3xl">
        <div class="flex flex-wrap divide-y md:divide-x lg:divide-y-0 divide-blueGray-200">

          @foreach ($plans as $plan)
          <div class="w-full md:w-1/2 lg:w-1/{{$col}}">
            <div class="px-9 pt-8 pb-11 h-full bg-white bg-opacity-90" style="backdrop-filter: blur(46px);">
              <span class="mb-3 inline-block text-sm text-green-600 font-semibold uppercase tracking-px leading-snug">{{ $plan->name }}</span>
              <h3 class="mb-1 text-4xl text-gray-900 font-bold leading-tight">
                <span>{{  config('money')[strtoupper(config('settings.cashier_currency'))]['symbol'] }}{{ $plan->price }}</span>
                <span class="text-gray-400">/{{  $plan['period'] == 1? __('m') :  __('y') }}</span>
              </h3>
              <p class="mb-8 text-sm text-gray-500 font-medium leading-relaxed">{{ $plan->description }}</p>
              <a href="{{ route('register') }}" class="mb-9 py-4 px-9 w-full font-medium border border-blueGray-300 hover:border-blueGray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">{{ __('Get Started Now') }}</a>
              <ul>

                @foreach (explode(",",$plan['features']) as $feature)
                           
                            <li class="mb-4 flex items-center">
                              <svg class="mr-2" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16699 10.8333L7.50033 14.1666L15.8337 5.83325" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <p class="font-semibold leading-normal">{{ __($feature) }}</p>
                            </li>
                           
                        @endforeach

                
              </ul>
            </div>
          </div>
          @endforeach
         
          
         
        </div>
      </div>
    </div>
  </section>