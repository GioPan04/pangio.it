@include('cli.common.logo')

@include('cli.common.prompt', ['command' => 'cat '.$slug, 'path' => '~/blog'])
cat: {{$slug}}: No such file or directory

