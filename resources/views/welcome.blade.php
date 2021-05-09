<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BassoBlades</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           .flex-cont {
                display: flex;
                align-items: center; 
                justify-content: center;
                flex-direction: column;
                height: 100vh;
            }
            .subtitle {
                font-family: 'Roboto Condensed', sans-serif;
                font-size: 12px;
            }
            .basso-main-logo {
                max-width: 240px;
            }
            @media (min-width: 576px) {
                .subtitle {
                    font-size: 18px;
                }
                .basso-main-logo {
                    max-width: 360px;
                }
            }
            @media (min-width: 768px) {
                .subtitle {
                    font-size: 24px;
                }
                .basso-main-logo {
                    max-width: 480px;
                }
            }
            @media (min-width: 992px) {
                .subtitle {
                    font-size: 36px;
                }
                .basso-main-logo {
                    max-width: 600px;
                }
            }

        </style>

        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <div class="flex-cont">
            <img class="basso-main-logo" src="/images/logo1.png">
            <br>
            <h1 class="subtitle">Coming Soon / Próximamente</h1>
        </div>
    </body>
</html>
