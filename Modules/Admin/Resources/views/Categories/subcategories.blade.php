<ul>
    {{dd('d')}}
    @foreach($subcategories as $subcategory)
    <li data-jstree='{"icon" : "far fa-folder"}' id="row-{{$subcategory->id}}">{{ $subcategory->title }}
        @if(count($category->children) > 0)
        @include('admin::Categories.subcategories', ['subcategories' => $subcategory->children])
        @endif
    </li>
    @endforeach
</ul>