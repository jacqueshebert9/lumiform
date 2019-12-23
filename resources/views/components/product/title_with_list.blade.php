<div class="w-1/5">
    <p class="font-extrabold text-30 font-cocogoose text-{{$color}} mb-12 uppercase">{!! $text !!}</p>
    <ul class="with__check--bg">
        @foreach($items as $item)
            <li class="text-20 font-light font-din text-secondary text-left mb-5">
                {!! $item !!}
            </li>
        @endforeach
    </ul>
</div>