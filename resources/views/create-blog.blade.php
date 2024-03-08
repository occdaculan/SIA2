<!-- Include Bootstrap CSS (you can use a CDN or download the file) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<a href="{{ route('home') }}"  >Back</a>
<div class="container mt-5">
    <h1>Create Blog</h1>
    
    <form action="{{ route('save-blog') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Blog Name:</label>
            <input type="text" class="form-control" name="blog_name" required>
        </div>

        <div class="form-group">
            <label>Blog Description:</label>
            <input type="text" class="form-control" name="description" required>
        </div>

        <div class="form-group">
            <label>Blog Amount:</label>
            <input type="number"  class="form-control" name="amount" required>
        </div>

        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>