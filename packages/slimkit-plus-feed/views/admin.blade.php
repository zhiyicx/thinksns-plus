<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>动态管理 - ThinkSNS+</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ $csrf_token }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" integrity="sha384-zTylcVCnqw6YsCkdcn7O6Bi7TjGdNYiiWHq6R3baU4jO/QWUunt7mGq5l7mciZ2R" crossorigin="anonymous">
    <script>
        window.FEED = {!! json_encode([
            'baseURL' => $base_url,
            'csrfToken' => $csrf_token,
            'walletRatio' => $wallet_ratio,
        ]) !!};
    </script>
    <style type="text/css">
        html, body, * {
            margin: 0;
            padding: 0;
            font-family: Roboto, sans-serif, serif, Microsoft Yahei, "微软雅黑";
        }
    </style>
</head>
<body>
    <div id="app"></div>
   <script src="https://cdn.bootcss.com/babel-polyfill/7.4.4/polyfill.min.js?id=20190520" integrity="sha384-Nh3J/XXlxyM3rjLEs3jwkHg5DP/zDvV7p86vEhCCFnYlYrlY7mGzUxRKm+oProPB" crossorigin="anonymous"></script>
    <script src="{{ mix('admin.js', 'assets/feed') }}"></script>
</body>
</html>
