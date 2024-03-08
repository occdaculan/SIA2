<!-- Include Bootstrap CSS (you can use a CDN or download the file) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<a href="{{ route('home') }}"  >Back</a>
<h1>Blog List</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->blog_name }}</td>
                <td>{{ $blog->description }}</td>
                <td>{{ $blog->amount }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
