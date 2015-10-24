<?php
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>☔</title>
    <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <link rel="import" href="bower_components/emoji-rain/emoji-rain.html">
    <style>
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
        }
        body {
            z-index: -2;
            background-image: url("/sky.jpg");
            background-size: cover;
        }
        main {
            height: 100%;
            min-height: 100%;
            padding: 0;
            margin: 0;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        #prognoz {
            background: #3498db;
            background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
            background-image: -moz-linear-gradient(top, #3498db, #2980b9);
            background-image: -ms-linear-gradient(top, #3498db, #2980b9);
            background-image: -o-linear-gradient(top, #3498db, #2980b9);
            background-image: linear-gradient(to bottom, #3498db, #2980b9);
            border-radius: 28px;
            font-family: Arial, Helvetica, sans-serif;
            color: #ffffff;
            font-size: 48px;
            padding: 15px 25px 15px 25px;
            border: solid #1f628d 2px;
            text-decoration: none;
            cursor: pointer;
        }
        #prognoz:hover {
             background: #3cb0fd;
             background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
             background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
             background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
             background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
             background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
             text-decoration: none;
        }
    </style>
    <script>
        var dozhd = new Audio('/rain.mp3');
        function initMen() {
            dozhd.play();
            document.getElementsByTagName('main')[0].style.display='none';
            document.getElementById('rain').start();
            dozhd.addEventListener('ended', function() {
                this.currentTime = 0;
                this.play();
            }, false);
        }
    </script>
    <meta charset="utf-8">
</head>
<body>
<main>
    <div id="prognoz" onclick="initMen()">Узнать прогноз погоды</div>
</main>
<emoji-rain id="rain"></emoji-rain>

<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33226843 = new Ya.Metrika({ id:33226843, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33226843" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
</html>
