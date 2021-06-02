<html>
<head>Crawl Website</head>
<form method="POST" action="{{ route('crawl.submit') }}">
    @csrf
    <input type="text" name="url" />
    <button>Crawl</button>
</form>
</html>