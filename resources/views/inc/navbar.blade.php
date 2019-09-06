<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">{{config('app.name', 'MyBlog')}}</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/posts">Blog</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/posts/create">Create Post</a></li>
            </ul>
        </div>
    </div>
</nav>