<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="">
    <button type="submit">submit</button>
</form>
