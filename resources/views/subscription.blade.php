<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F2F2F2;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            form input{
                padding:12px;
                border:solid 1px #E6E6E6;
                border-radius:4px;
            }
            .btn{
                border:none;
                color:#848484;
                font:20px;
            }
            .btn:hover{
             color:#848484;
             padding:4px;
            }
        </style>
    </head>
    <body>
        <div class="container flex-center position-ref full-height">
            <div class="row">
                <div class="col-md-4">

                <div>
                <div class="col-md-4">
                    <form class="form-inline" method="post" action="{{route('post.usersub')}}">
                    @csrf
                      <input type="text" id="msisdn" name="msisdn">
                      
                      <button class="btn" type="submit">Subscribe</button>
                    </form>  
                <div>
                <div class="col-md-4">

                <div>    
            </div>
        </div>
    </body>
</html>
