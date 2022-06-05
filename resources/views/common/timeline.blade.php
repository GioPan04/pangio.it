<div class="grid grid-cols-timeline">
    @foreach ($items as $item)
        @if($loop->index % 2 == 0)
        <div class="pt-4 pb-16 last:pb-0">{{ $item['data'] }}</div>
        @else
        <div></div>
        @endif

        <div class="flex flex-col items-center">
            <span class="rounded-full h-16 w-16 bg-white text-black px-2 py-[18px] text-center font-bold text-xl">{{ $item['year'] }}</span>
            <span class="w-0.5 h-full bg-white block"></span>
        </div>

        @if($loop->index % 2 != 0)
        <div class="pt-4 pb-16 last:pb-0">{{ $item['data'] }}</div>
        @else
        <div></div>
        @endif
    @endforeach

</div>
