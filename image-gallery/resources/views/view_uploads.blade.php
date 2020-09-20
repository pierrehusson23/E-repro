@extends('layouts.app')

@section('content')

@auth
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="cs-p-1">Name</th>
                <th class="cs-p-1">Image</th>
            </tr>
        </thead>

        @forelse($images as $image)
            <tr>
                <td class="cs-p-1">{{ $image->name }}</td>
                <td class="cs-p-1"><a href="{{ $image->image }}">View Image</a></td>
            </tr>
            @empty
            <p>No Images at the moment</p>
        @endforelse
    </table>
</div>
@else
test
@endif

@endsection
