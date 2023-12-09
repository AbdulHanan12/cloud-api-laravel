<section id="testimonials" class="relative pt-24 pb-32 bg-white overflow-hidden">
    <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" src="{{ asset('uploads/default/wpbox/gradient.svg')}}" alt="">
    <div class="relative z-10 container px-4 mx-auto">
      <div class="flex flex-wrap justify-between items-end -m-2 mb-12">
        <div class="w-auto p-2">
          <h2 class="text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">{{ __('wpbox.testimonial_info') }} {{config('app.name')}}</h2>
        </div>
      </div>
      <div class="flex flex-wrap -m-2">
        @foreach ($testimonials as $key => $testimonial)
          <div class="w-full md:w-1/2 lg:w-1/4 p-2">
            <div class="px-8 py-6 h-full bg-white bg-opacity-80 rounded-3xl">
              <div class="flex flex-col justify-between h-full">
                <div class="mb-7 block">
                  <div class="flex flex-wrap -m-0.5 mb-6">
                    <div class="w-auto p-0.5">
                      <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.30769 0L12.1838 5.82662L18.6154 6.76111L13.9615 11.2977L15.0598 17.7032L9.30769 14.6801L3.55554 17.7032L4.65385 11.2977L0 6.76111L6.43162 5.82662L9.30769 0Z" fill="#F59E0B"></path>
                      </svg>
                    </div>
                    <div class="w-auto p-0.5">
                      <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.30769 0L12.1838 5.82662L18.6154 6.76111L13.9615 11.2977L15.0598 17.7032L9.30769 14.6801L3.55554 17.7032L4.65385 11.2977L0 6.76111L6.43162 5.82662L9.30769 0Z" fill="#F59E0B"></path>
                      </svg>
                    </div>
                    <div class="w-auto p-0.5">
                      <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.30769 0L12.1838 5.82662L18.6154 6.76111L13.9615 11.2977L15.0598 17.7032L9.30769 14.6801L3.55554 17.7032L4.65385 11.2977L0 6.76111L6.43162 5.82662L9.30769 0Z" fill="#F59E0B"></path>
                      </svg>
                    </div>
                    <div class="w-auto p-0.5">
                      <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.30769 0L12.1838 5.82662L18.6154 6.76111L13.9615 11.2977L15.0598 17.7032L9.30769 14.6801L3.55554 17.7032L4.65385 11.2977L0 6.76111L6.43162 5.82662L9.30769 0Z" fill="#F59E0B"></path>
                      </svg>
                    </div>
                    <div class="w-auto p-0.5">
                      <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.30769 0L12.1838 5.82662L18.6154 6.76111L13.9615 11.2977L15.0598 17.7032L9.30769 14.6801L3.55554 17.7032L4.65385 11.2977L0 6.76111L6.43162 5.82662L9.30769 0Z" fill="#F59E0B"></path>
                      </svg>
                    </div>
                  </div>
                  <h3 class="mb-6 text-lg font-bold font-heading">“{{ $testimonial->title }}”</h3>
                  <p class="text-lg font-medium">{{ $testimonial->description }}</p>
                </div>
                <div class="block">
                  <p class="font-bold">{{ $testimonial->subtitle }}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
       
      </div>
    </div>
  </section>