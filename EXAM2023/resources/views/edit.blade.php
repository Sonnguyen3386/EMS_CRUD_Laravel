@extends('layouts.base')

<!-- Trien khai title -->
@section('title', 'Edit ')

@section ('main')
<div class="card">
    <div class="card-header">Edit Event</div>
    <div class="card-body">
        <form action="{{route('events.update' , $event->e_id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" name="title" value="{{$event->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <Strong>Description</Strong>
                        <input type="text" name="description" value="{{$event->description}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Date</strong>
                        <input type="date" name="date" value="{{$event->date}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <strong>Location</strong>
                        <input type="text" name="location" value="{{$event->location}}" class="form-control">
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-success mt-2">Save</button>
        </form>
    </div>
</div>
@endsection