<a href="#" onclick="event.preventDefault(); document.getElementById('delete').submit()">
    <form action="{{ route('delete') }}" method="post" id="delete">
        @csrf
        <input type="hidden" value="{{ $product->id }}" name="product_id">
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</a>
