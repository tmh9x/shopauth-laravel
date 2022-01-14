<h1>Products</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Image</td>
        <td>Created_at</td>
        <td>Updated_at</td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['description']}}</td>
        <td>{{$product['price']}}</td>
        <td><img src="{{$product['image']}}" width='85' height='85'/></td>
        <td>{{$product['created_at']}}</td>
        <td>{{$product['updated_at']}}</td>
        
    </tr>
    @endforeach
</table>