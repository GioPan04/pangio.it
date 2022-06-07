@php
    $show_error = isset($error) && !is_null($error) && !empty($error);
@endphp

<div class="flex flex-col gap-1 lg:w-96">
    @if (isset($id) && isset($label))
    <label class="ml-0.5" for="{{$id}}"><span class="{{ $show_error ? 'text-red-500' : '' }}">{{ $label }}</span></label>
    @endif

    @if ($show_error)
    <span class="text-red-500 text-sm italic">{{ $error }}</span>
    @endif

    <input type="{{$type}}" name="{{$id}}" id="{{$id}}" class="w-full form-input bg-black/20 text-white rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:bg-gray-100 focus:border-indigo-300 {{ $show_error ? 'border-red-500' : 'dark:border-gray-800' }}">
</div>
