@extends('layouts.main')
@include('layouts.header')
@include('layouts.footer')
@include('link.modal')

@section('pageCss')
@endsection

@section('content')
    HelloWorld
@yield('link.modal')
@endsection

@section('pageJs')
<script type="text/javascript">
</script>
@endsection
