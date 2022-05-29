@extends('errors.minimal')

@section('title', 'Forbidden')
@section('code', '403')
@section('message', __($exception->getMessage() ?: "You can't do this action."))
