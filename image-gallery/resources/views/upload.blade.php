@extends('layouts.app')

@section('content')
@auth
@include('components.upload_form') 
@else
<script>window.location = "/login";</script>
@endif
@endsection
