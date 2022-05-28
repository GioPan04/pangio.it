@extends('base.web')
@section('page::title', 'Home')

@section('page::body')
<div class="h-screen flex flex-col justify-center items-center">
    <div class="font-8-bit">
        <span class="text-4xl block">Hi!</span>
        <span class="text-2xl blinking-cursor block">I'm <span class="text-secondary">Gioele Pannetto</span></span>
        <span class="text-center text-xs block mt-2 text-white/90">FULL STACK DEVELOPER</span>
    </div>
</div>
<div class="container mx-auto">
    <section>
        <h1 class="text-3xl font-8-bit">$ whoami</h1>
        <div class="flex space-x-14 mt-8">
            <img class="object-cover object-top rounded-full aspect-square w-96 h-96" src="/me.jpg" alt="me"/>
            <p>
                Hi! I'm Gioele Pannetto, a 17 years old programming enthusiast boy.
                I have this passion since I was 3 years old, the year my father gifted me my first computer.
                When I was 7 I developed my first Visual Basic script.
                At the age of 10 I created my first website in HTML and CSS, and so on with other programming languages not only for the web.
                I also created some websites for relatives and friends, and with this I realized that in addition to the passion for the computers, I also have the passion for helping others.
                I hope to help you as well!
            </p>
        </div>
    </section>
</div>
@endsection
