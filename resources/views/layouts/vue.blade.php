<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue.js Starter Application</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="/css/all.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

</head>

<body>
<div id="app">
    <navigation></navigation>
    @yield("content")
</div>

<script src="/js/all.js"></script>
<script src="/js/bundle.js"></script>
</body>

