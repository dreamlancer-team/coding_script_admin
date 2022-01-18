<a href="category/{{ $category -> slug }}" class="btn btn-icon btn-light-danger btn-sm me-1" onclick="event.preventDefault(); document.getElementById('delete-category-{{ $category -> id }}').submit();">
    <i class="fas fa-trash"></i>
</a>
<form id="delete-category-{{ $category->id }}" method="post"
    action="{{ route('category.destroy', $category -> slug) }}"
    style="display: none">
    @csrf
    {{ method_field('DELETE') }}
</form>

