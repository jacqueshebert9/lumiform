<div class="content__item @if ($isActive) active @endif flex justify-around items-center">
    <div class="w-full sm:w-4/5 lg:w-6/12 flex items-start lg:items-center flex-col">
        <div class="w-8/12">
            <h3 class="mb-5 font-bold md:text-25 lg:text-40 tracking-heading uppercase font-cocogoose text-{{$textColor}}">
                {!! $heading !!}
            </h3>
            <p class="text-left font-light font-din md:text-20 lg:text-30 text-secondary tracking-text">
                {!! $text !!}
            </p>

        </div>
        <a href=""
           class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large  mt-5">
           {!! $discoverText !!}
            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
        </a>

    </div>

    <div class="w-0 sm:w-1/5 lg:w-6/12">
        <img src="{{asset($image)}}" alt="">
    </div>
</div>