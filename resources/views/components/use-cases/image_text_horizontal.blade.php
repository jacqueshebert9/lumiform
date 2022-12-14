<div class="container mx-auto mb-12 md:mb-40 category__section">
    <div class="flex justify-around items-center @if (isset($reversed) && $reversed === true)  md:flex-row-reverse @endif  md:flex-row flex-col-reverse">
        <div class="w-6/12 xxl:w-1/2 md:w-5/12">
            <div class="cases__image__section  mx-auto w-auto ">
                <img src="{{asset('img/'.$image[0])}}" alt="" srcset="{{asset('img/'.$image[0])}},
                {{asset('img/'.$image[1])}} 2x">
            </div>
        </div>
        <div class="w-full md:w-1/2 md:mb-0 mb-5">
            <div class="cases__text__section  mx-auto">
                <h3 class="text-50 font-cocogoose uppercase text-primary mb-10">{!! $heading !!}</h3>
                <ul class="use-cases__list mb-10">
                    @foreach($items as $item)
                        <li class="font-din text-30 font-light text-secondary mb-6">
                            {!! $item !!}
                        </li>
                    @endforeach
                </ul>
                <p class="pl-8 py-5 border-l-4 border-{{$bottom['borderColor']}} text-20 font-light font-din text-secondary"> {!! $bottom['text'] !!}</p>
            </div>
        </div>
    </div>
</div>