<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lv2課題</title>
</head>
<style>
    body {
        position: fixed;
        margin-top: 0;
        height: 100%;
        width: 100%;
    }
    .wrapper {
        margin: 0 auto;
        padding: 0 140px;
        width: 500px;
        box-sizing: border-box;
    }

    .title {
        text-align: center;
    }

    .row {
        text-align: right;
    }
</style>
<body>
    <div class="wrapper">
        <h2 class="title">Lv2の課題</h2>
        <form action="">
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="status" value="ok">
            <div class="row">
                <span>名前：</span>
                <input class="input_area name" type="text" name="name" placeholder="名前">
            </div>
            <div class="row">
                <span>パスワード：</span>
                <input class="input_area password" type="password" name="password" placeholder="パスワード">
            </div>
        </form>
    </div>
</body>
</html>