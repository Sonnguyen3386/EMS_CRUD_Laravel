@extends('layouts.base')

<!-- Trien khai title -->
@section('title', 'Home')

@section ('main')
<!-- <h1>Hien thi</h1> -->
<a href="{{route('events.create')}} " class="btn btn-success btn-sm">Add Event</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Event ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Location</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
        <tr>
            <td>{{ $event->e_id }}</td>
            <td>{{ $event->title }}</td>
            <td>{{ $event->description }}</td>
            <td>{{ $event->date }}</td>
            <td>{{ $event->location }}</td>

            <td>
                <form method="post" action="{{ route('events.destroy', $event->e_id) }}">
                    @csrf
                    @method('DELETE')
                    <!-- <button type="Save" class="btn btn-warning ">Edit</button> -->
                    <a href="{{ route('events.edit', $event->e_id) }}" class="btn btn-warning">Edit</a>

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    <a href="{{ route('events.show', $event->e_id) }}" class="btn btn-primary">View</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection