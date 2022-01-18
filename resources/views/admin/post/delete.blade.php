<a href="post/{{ $post -> slug }}" class="btn btn-icon btn-light-danger btn-sm me-1" onclick="event.preventDefault(); document.getElementById('delete-post-{{ $post -> id }}').submit();">
    <i class="fas fa-trash"></i>
</a>
<form id="delete-post-{{ $post->id }}" method="post"
    action="{{ route('post.destroy', $post -> slug) }}"
    style="display: none">
    @csrf
    {{ method_field('DELETE') }}
</form>

