<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header class="header-fixed">
    <div class="row">
      <h1 class="grid-6"><a href="{{ url('/') }}">PicTweet</a></h1>
      <div class="user_nav grid-6">
        <a class="tweet" href="{{ url('/tweets/new') }}">投稿する</a>
      </div>
    </div>
  </header>
  <div class="header-bottom">
  </div>

  @if (session('flash_message'))
  <div class="message-background" onclick="this.classList.add('hidden')">
    <div class="flash_message row"  >{{ session('flash_message') }}</div>
  </div>
  @endif
  <div class="container">
    @yield('content')
  </div>
</body>
</html>