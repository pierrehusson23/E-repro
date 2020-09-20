@extends('layouts.app')

@section('content')

@auth
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="cs-p-1">Nom</th>
                <th class="cs-p-1">Image</th>
            </tr>
        </thead>

        @forelse($images as $image)
            <tr>
                <td class="cs-p-1">{{ $image->name }}</td>
                <td class="cs-p-1">
                    <img src="{{ url($image->image) }}"/>
                </td>
            </tr>
            @empty
            <p>Pas d'image</p>
        @endforelse
    </table>
</div>
@else
<script>window.location = "/login";</script>
@endif

@endsection
