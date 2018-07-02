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
        <div class="index-top">
            <h3 class="index-top__title">お気に入りのリンクをシェアしよう</h3>
        </div>
    </div>


</div>
@endsection

@section('pageJs')
<script type="text/javascript">
</script>
@endsection
