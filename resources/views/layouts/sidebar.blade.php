@section('sidebar')
<div class="sidebar cyan darken-3">
    <div class="collection">
        <a href="{{ Route('LinkIndex') }}" class="collection-item">Home</a>
        <a href="javascript:void(0)" class="collection-item pc" onclick="showFormModal('formModal', 'Pc')">シェアする</a>
        <a href="javascript:void(0)" class="collection-item sp" onclick="showFormModal('formModalSp', 'Sp')">シェアする</a>
        <a href="{{ Route('LinkSearch') }}" class="collection-item">探す</a>
    </div>
</div>

<ul id="slide-out" class="sidenav collection">
    <li><a href="{{ Route('LinkIndex') }}" class="collection-item">Home</a></li>
    <li><a href="javascript:void(0)" class="collection-item pc" onclick="showFormModal('formModal', 'Pc')">シェアする</a></li>
    <li><a href="javascript:void(0)" class="collection-item sp" onclick="showFormModal('formModalSp', 'Sp')">シェアする</a></li>
    <li><a href="{{ Route('LinkSearch') }}" class="collection-item">探す</a></li>
</ul>
@endsection