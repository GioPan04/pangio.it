@extends('base.web')
@section('page::title', 'Login')

@section('page::body')
<div class="flex items-center justify-center">
    <main>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="space-y-2">
                @include('common.input', ['label' => 'Username', 'type' => 'text', 'id' => 'username'])
                @include('common.input', ['label' => 'Password', 'type' => 'password', 'id' => 'password', 'error' => $errors->first('password')])
                <div class="flex justify-end">
                    @include('common.button', ['text' => 'Login'])
                </div>
            </div>
        </form>
    </main>
</div>
@endsection
