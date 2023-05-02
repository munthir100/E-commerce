  @if(count($subcategories) > 0)
  <ul>
    @foreach($subcategories as $subcategory)
    <li data-jstree='{"icon" : "far fa-folder"}' id="row-{{$subcategory->id}}">
      {{ $subcategory->title }}
      <x-admin::subcategories-list :subcategories="$subcategory->children" />
    </li>
    @endforeach
  </ul>
  @endif