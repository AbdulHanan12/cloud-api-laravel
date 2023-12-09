
<section class="pt-24 pb-28 bg-white overflow-hidden">
    <div class="container px-4 mx-auto">
      <h2 class="mb-7 text-6xl md:text-8xl xl:text-10xl font-bold font-heading text-center tracking-px-n leading-none">{{ $feature->title }}</h2>
      <p class="mb-14 text-lg text-gray-600 font-medium text-center mx-auto md:max-w-2xl">{{ $feature->description }}</p>
      <div class="flex justify-center mt-6">
        <div class="inline-block">
          <img style="max-width: 950px" class="mb-11 mx-auto transform hover:translate-y-3 transition ease-in-out duration-1000" src=" @if ($feature->image_link)
          {{ $feature->image_link }}
      @endif" alt="">
        </div>
      </div>
    </div>
  </section>