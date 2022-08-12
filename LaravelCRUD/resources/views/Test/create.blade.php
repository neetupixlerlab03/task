<html>
    <head>
        <title>Test Create</title>
</head>
<body>
    <h1>Test crud</h1>
    
    <form action="{{ route('tests.store') }}" method="POST" enctype="multipart/from-data">
    @csrf
        <strong>Name</strong>
        <input type ="text" name="name" placeholder="fill name"><br><br>
        <strong>Image</strong>
        <input type ="file" name="image" placeholder="fill file"><br><br>
        <strong>Price</strong>
        <input type ="text" name="price" placeholder="fill  Price"><br><br>
        <button type="submit">submit</button>
</form>
</body>
    </html>