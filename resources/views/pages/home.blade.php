@extends('base.web')
@section('page::title', 'Home')

@section('page::body')
@include('common.socialbar')
<div class="h-screen relative flex flex-col justify-center items-center">
    <div class="font-8-bit">
        <span class="text-4xl block">Hi!</span>
        <span class="text-2xl blinking-cursor block">I'm <span class="text-secondary">Gioele Pannetto</span></span>
        <span class="text-center text-xs block mt-2 text-white/90">FULL STACK DEVELOPER</span>
    </div>
    <span class="absolute bottom-[5.75rem] opacity-70 floating">
        <i data-feather="chevron-down"></i>
    </span>
    <span class="absolute bottom-[4.5rem] text-center text-xs opacity-70">Scroll down to continue</span>

</div>
<div class="container px-8 sm:px-12 mx-auto space-y-16">
    <section>
        <h1 id="whoami" class="text-3xl font-8-bit">whoami</h1>
        <div class="flex flex-col sm:flex-row sm:space-x-14 mt-8 items-center">
            <img class="object-cover object-top rounded-full aspect-square w-72 h-72" src="/me.jpg" alt="me"/>
            <p>
                Hi! I'm Gioele Pannetto, a {{ (new \Carbon\Carbon('2004/12/30'))->diffInYears(); }} years old programming enthusiast boy.
                I have this passion since I was 3 years old, when my father gifted me my first computer.
                When I was 7 I developed my first Visual Basic script.
                At the age of 10 I created my first website in HTML and CSS, and so on with other programming languages not only for the web.
                I also created some websites for relatives and friends, and with this I realized that in addition to the passion for IT, I also have the passion for helping others.
                I hope to help you as well!
            </p>
        </div>
    </section>
    <section>
        <h1 id="timeline" class="text-3xl font-8-bit">My timeline</h1>
        @include('common.timeline', ['items' => [
            [
                'data' => "Started studying IT at I.S.I.S. P. Gobetti - A. Volta. A high school in Florence, Italy.",
                'year' => 2018
            ],
            [
                'data' => "Started working for Insegreto, an Italian social network where you can share secrets anonymously. I worked as fullstack developer, we updated the website and we began to work on the app.",
                'year' => 2020
            ],
            [
                'data' => "Graduated in high school with a score of 81/100",
                'year' => 2023
            ],
        ]])

    </section>
</div>
@endsection
