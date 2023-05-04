<ul>
    @foreach($subcategories as $subcategory)
    <li data-jstree='{"icon" : "far fa-folder"}' id="row-{{$subcategory->id}}">{{ $subcategory->title }}
        @if(!empty($category->children))
        @include('admin::categories.subcategories', ['subcategories' => $subcategory->children])
        @endif
    </li>
    @endforeach
</ul>