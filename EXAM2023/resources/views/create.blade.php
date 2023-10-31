@extends('layouts.base')

<!-- Trien khai title -->
@section('title', 'Create ')

@section ('main')
<div class="card">
    <div class="card-header">Add Event</div>
    <div class="card-body">
        <form action="{{ route('events.store')}}" method="POST" style="display: inline-block;">
            @csrf
            <div class="row">
                <div>
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <Strong>Description</Strong>
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <strong>Date</strong>
                        <input type="date" name="date" class="form-control" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <strong>Location</strong>
                        <input type="text" name="location" class="form-control" placeholder="Location">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-success mt-2">Add</button>
        </form>
    </div>
</div>
@endsection