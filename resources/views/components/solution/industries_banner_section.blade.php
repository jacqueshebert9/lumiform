<section id="intusry__banner"
         style="background: url({{asset('img/'.$imageBg)}}) no-repeat; background-size: cover"
         class="xl:pt-35 xl:pb-28 md:py-16 py-8"
>
    <div class="container mx-auto">
        <div class="@if(isset($class)){{$class}} @else w-full lg:w-8/12 @endif mx-auto">
            <h1 class="tracking-normal  leading-heading text-center text-40 xxl:text-70 mb-8 font-cocogoose uppercase font-extrabold text-white">
                {!! $heading !!}
            </h1>
            <p class="text-30 font-din font-medium text-white text-center tracking-text mb-16">
                {!! $text !!}
            </p>
            <a href="#"
               class="font-extrabold w-215 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-20  h-70 px-8 rounded-20">@lang('TRY FOR FREE')</a>
        </div>
    </div>

</section>