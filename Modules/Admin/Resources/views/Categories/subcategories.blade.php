<ul>
    @foreach($subcategories as $subcategory)
    <li data-jstree='{"icon" : "far fa-folder"}'>{{ $subcategory->title }}
        @if(count($category->children) > 0)
        @include('admin::Categories.subcategories', ['subcategories' => $subcategory->children])
        @endif
    </li>
    @endforeach
</ul>