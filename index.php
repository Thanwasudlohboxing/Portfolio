<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('assets/navbar/navbar.php') ?>
    <link rel="stylesheet" href="assets/navbar/navbar.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <style>
        .welcome {
            background-color: #fff;
            height: 100%;
            font-family: 'tradegothiclt-bold', sans-serif;
        }

        h1 {
            font-size: 1.5em;
            color: #333;
            text-transform: uppercase;
            background-image: linear-gradient(to right, red, orange, yellow, purple, skyblue, indigo, violet);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        span {
            border-right: .05em solid;
            animation: caret 1s steps(1) infinite;
        }

        @keyframes caret {
            50% {
                border-color: transparent;
            }
        }
    </style>
    <div class="welcome" align="center">
        <h1>WELCOME TO MY PORTFOLIO</h1>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function(event) {
            // array with texts to type in typewriter
            var dataText = ["WELCOME TO MY PORTFOLIO"];

            // type one text in the typwriter
            // keeps calling itself until the text is finished
            function typeWriter(text, i, fnCallback) {
                // chekc if text isn't finished yet
                if (i < (text.length)) {
                    // add next character to h1
                    document.querySelector("h1").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

                    // wait for a while and call this function again for next character
                    setTimeout(function() {
                        typeWriter(text, i + 1, fnCallback)
                    }, 100);
                }
                // text finished, call callback if there is a callback function
                else if (typeof fnCallback == 'function') {
                    // call callback after timeout
                    setTimeout(fnCallback, 700);
                }
            }
            // start a typewriter animation for a text in the dataText array
            function StartTextAnimation(i) {
                if (typeof dataText[i] == 'undefined') {
                    setTimeout(function() {
                        StartTextAnimation(0);
                    }, 100);
                }
                // check if dataText[i] exists
                if (i < dataText[i].length) {
                    // text exists! start typewriter animation
                    typeWriter(dataText[i], 0, function() {
                        // after callback (and whole text has been animated), start next text
                        StartTextAnimation(i + 1);
                    });
                }
            }
            // start the text animation
            StartTextAnimation(0);
        });
    </script>
    <script src="assets/navbar/navbar.js"></script>
</body>

</html>