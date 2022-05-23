@include('cli.common.logo')

@include('cli.common.prompt', ['command' => 'whoami', 'path' => '~'])
{{ wordwrap("Hi! I am Gioele Pannetto, a 17 years old programming enthusiast boy. I have this passion since I was 3 years old, the year my father gifted me my first computer. When I was 7 I developed my first Visual Basic script. At the age of 10 I created my first website in HTML and CSS, and so on with other programming languages not only for the web. I also created some websites for relatives and friends, and with this I realized that in addition to the passion for the computers, I also have the passion for helping others. I hope to help you as well!") }}
