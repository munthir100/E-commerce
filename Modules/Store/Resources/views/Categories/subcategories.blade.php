<ul class="dropdown-menu" data-bs-popper="none">
    @foreach($subcategories as $subcategory)
    @if(!$subcategory->children->count())
    <li>
        <a class="dropdown-item d-flex align-items-center" href="{{route('store.shopCategory',[$storeLink,$subcategory->title])}}">
            <i data-feather="circle"></i>
            <span>{{$subcategory->title}}</span>
        </a>
    </li>
    @else
    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
        <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="{{route('store.shopCategory',[$storeLink,$subcategory->title])}}">
            <i data-feather='circle'></i>
            <span>{{$subcategory->title}}</span>
        </a>
        @if(count($subcategory->children) > 0)
        @include('store::Categories.subcategories', ['subcategories' => $subcategory->children])
        @endif
    </li>
    @endif
    @endforeach
</ul>