@include('cli.common.logo')

@include('cli.common.prompt', ['command' => 'ls', 'path' => '~/blog'])
@foreach ($posts as $post)
-rw-rw-r-- gioele users {{ Carbon\Carbon::parse($post->created_at)->format('M d Y H:m')}} {!! AnsiCodes::BOLD_GREEN !!}{{ $post->slug }}{!! AnsiCodes::RESET !!}
@endforeach

