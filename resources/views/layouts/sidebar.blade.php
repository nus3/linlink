@section('sidebar')
<div class="sidebar cyan darken-3">
    <div class="collection">
        <!-- TODO: hoverの時の背景色の変化 -->
        <a href="" class="collection-item">Home</a>
        <a href="javascript:void(0)" class="collection-item" onclick="showFormModal()">シェアする</a>
        <a href="" class="collection-item">探す</a>
    </div>
</div>

<ul id="slide-out" class="sidenav collection">
    <li><a href="" class="collection-item">Home</a></li>
    <li><a href="javascript:void(0)" class="collection-item" onclick="showFormModal()">シェアする</a></li>
    <li><a href="" class="collection-item">探す</a></li>
</ul>
@endsection