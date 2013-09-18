<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  {{ HTML::style('css/gumby.css') }}
  {{ HTML::style('css/style.css') }}
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="nav nav-bar top-fixed">
      <div class="row">
        <ul class="io columns tiles">
          <li><a href="">{{ Lang::get('page.login') }}</a></li>
          <li><a href="">{{ Lang::get('page.signup') }}</a></li>
        </ul>
      </div>
    </div>
    <div class="master">
      <div class="row">
        <div class="eight columns">
          <div class="nice-box">
            @yield('app')
          </div>
        </div>
        <div class="four columns">
          <div class="nice-box"></div>
          <div class="nice-box"></div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="row">
        <p>&copy; 2013 Sofunny.pw · All rights reserved.</p>
      </div>
    </div>
  </div>
  {{ HTML::script('js/app.js') }}
</body>
</html>