@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calendar event</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/calendars/create" class="btn btn-primary mb-3">Create new event</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Exerpt</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($calendars as $calendar)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $calendar->title }}</td>
                        <td>{{ $calendar->exerpt }}</td>
                        <td>{{ $calendar->body }}</td>
                        <td>
                            <a href="/dashboard/calendars/{{ $calendar->id }}" class="badge bg-info"><span data-feather="eye"></span> </a>
                            {{-- <a href="/dashboard/calendars" class="badge bg-info"><span data-feather="eye"></span> </a> --}}
                            <a href="/dashboard/calendars/{{ $calendar->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/dashboard/calendars/{{ $calendar->id }}" method="calendar" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center text-sm text-gray-900 px-6 py-4 whitespace-nowrap" colspan="4">Data calendar tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $calendars->links() }}
        </div>
        
    </div>
@endsection
