<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>

    /*html,*/
    /*body {*/
    /*    margin: 0;*/
    /*    padding: 0;*/
    /*    height: 100%;*/
    /*    overflow: hidden;*/
    /*}*/

    .custom-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        color: #fff;
        background-color: #007bff;
        border: 2px solid #007bff;
        border-radius: 5px;
        transition: background-color 0.3s;
        position: absolute;
        top: 15px;
        right: 15px;
    }

    .custom-button:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        color: white;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
    }


    iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
</style>


<form action="{{ route('logout') }}" method="post">
    {{ csrf_field() }}
    <button class="custom-button" id="logout_button" type="submit">Logout</button>

</form>


<iframe
    src="https://app.powerbi.com/view?r=eyJrIjoiNTY0NTZhYzEtYThiOC00OTBlLTgwN2UtOGMwOWRmYzY2NDdkIiwidCI6IjYwZGJjYWY4LTI0Y2EtNDBkMy04NzZkLTk4MzM2ZGFjMzY5MSIsImMiOjEwfQ%3D%3D"
    frameborder="0"
></iframe>



</body>


<script>
    // Obfuscated JavaScript code to make inspecting and modifying more difficult
    (function() {
        var protection = {
            disableRightClick: function() {
                document.addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                });
            },
            disableViewSource: function() {
                document.addEventListener('keydown', function(e) {
                    if (e.keyCode == 85 && e.ctrlKey) { // ctrl+u
                        e.preventDefault();
                    }
                });
            },
            disableInspectElement: function() {
                document.addEventListener('keydown', function(e) {
                    if (e.keyCode == 123) { // F12
                        e.preventDefault();
                    }
                });
            },
            init: function() {
                this.disableRightClick();
                this.disableViewSource();
                this.disableInspectElement();
            }
        };

        protection.init();
    })();

</script>
</html>


