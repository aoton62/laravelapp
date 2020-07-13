<!DOCTYPE html>
<html lang="ja">
<head>
  <title>@yield('title')</title>
  <style>
  body { font-size: 16px; color: #999; }
  h1 { font-size: 100px; text-align: right; color: #f6f6f6; margin: -50px 0 -100px 0; }
  ul {font-size: 12pt;}
  hr {margin: 25pt 100pt; border-top: 1px dashed #ddd; }
  th {background-color: #999; color: #fff; padding: 5px 10px; }
  td {border: solid 1px #aaa; color: #999; padding: 5px 10px; }
  .menutitle {font-size: 14pt; font-weight: blod; margin: 0px; }
  .content {margin: 10px; }
  .footer {text-align: right; font-size: 10pt; margin: 10px; border-bottom: solid 1px #ccc; color:#ccc; }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  @section('menuber')
  <h2 class ="menutitle">*メニュー</h2>
  <ul>
    <li>@show</li>
  </ul>
  <hr size="1">
  <div class="content">
  @yield('content')
  </div>
  <div class="footer">
  @yield('footer')
  </div>

</body>
</html>
