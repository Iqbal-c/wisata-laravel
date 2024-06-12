@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $calendar->title }}</h1>

                <a href="/dashboard/calendars" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    calendars</a>
                <a href="/dashboard/calendars/{{ $calendar->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/calendars/{{ $calendar->id }}" method="calendar" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($calendar->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $calendar->image) }}" alt="{{ $calendar->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $calendar->category->name }}"
                        alt="{{ $calendar->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $calendar->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
