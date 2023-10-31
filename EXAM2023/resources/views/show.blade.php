@extends('layouts.base')
@section('title', 'View Details ')
@section('main')


<h1>Event Detail</h1>
<p>Event ID: {{ $event->e_id }}</p>
<p>Title: {{ $event->title }}</p>
<p>Description: {{ $event->description }}</p>
<p>Date: {{ $event->date }}</p>
<p>Location: {{ $event->location }}</p>



<a href="{{ route('events.index') }}">Back</a>
<!-- Hiển thị các thông tin khác về sản phẩm -->
@endsection