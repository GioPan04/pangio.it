@include('cli.common.logo')

@include('cli.common.prompt', ['command' => 'cat '.$post->slug, 'path' => '~/blog'])
{!! AnsiCodes::BOLD_CYAN . $post->title . AnsiCodes::RESET !!}
{{ wordwrap($post->content()) }}
