@extends('custom_errors.master')

@section('title', trans('default.401_unauthorized'))

@php

@endphp

@section('error-content')

    <app-error error-type="401"
               error-title="Unauthorized"
               error-description="{{ isset($message) ? $message : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry' }}"
               url="{{ url()->previous() ?? '/' }}"
    >
    </app-error>
@endsection
