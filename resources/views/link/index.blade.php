@extends('layouts.main')
@include('layouts.header')
@include('layouts.sidebar')
@include('layouts.footer')

@section('pageCss')
@endsection

@section('content')

<div class="wrapper">
    @yield('sidebar')
    <div class="contents">
        test
    </div>


</div>
@endsection

@section('pageJs')
<script type="text/javascript">
</script>
@endsection
