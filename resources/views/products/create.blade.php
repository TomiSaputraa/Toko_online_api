<h1>Create Product</h1>

<form action="/products" method="POST">
    @csrf {{-- digunakan untuk membuat token --}}
    Name : <input type="text" name="name"><br>
    Description : <input type="text" name="description"><br>
    Price : <input type="number" name="price"><br>
    Image Url : <input type="text" name="image_url" id=""><br>

    <input type="submit" value="save">
</form>
