<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li>
          <a href="{{ route('page1') }}">Page 1</a>
        </li>
        <li>
          <a href="{{ route('page2') }}">Page 2</a>
        </li>
      </ul>
    </nav>
  </header>
  <p>
    {{ $text }}
  </p>
</body>
</html>