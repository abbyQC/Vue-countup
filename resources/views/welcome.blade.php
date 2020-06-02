<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>

<body>

    <div id="app">
        <div class="tags are-large">
            <span class="tag is-warning is-light ">
                <count :to="12"></count>

            </span>
            <span class="tag is-warning is-light">
                <count :to="17"></count>
            </span>
            <span class="tag is-warning is-light">
                <count :to="1996"></count>
            </span>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>