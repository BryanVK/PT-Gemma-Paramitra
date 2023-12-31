<html>
    <head>
        <title>Form Sederhana</title>
        <style>
            .container {
                position: relative;
                width: 80%;
                margin: 0 auto;
            }
            form .group {
                margin-bottom: 10px;
            }
            form .group input {
                border: 1px solid #cccccc;
                border-radius: 4px;
                display: block;
                width: 100%;
                padding: 10px;
            }
            form .group .error {
                display: inline-block;
                color: #ff0000;
                margin-top: 5px;
            }
            form .group button.save {
                background-color: #4169E1;
                border: 1px solid #325cdb;
                color: #ffffff;
                padding: 10px;
                cursor: pointer;
                border-radius: 4px;
            }
            
            form .group button.cancel {
                background-color: #4169E1;
                border: 1px solid #325cdb;
                color: #ffffff;
                padding: 10px;
                cursor: pointer;
                border-radius: 4px;
            }

            table {
                border: 1px solid #cccccc;
                margin-top: 10px;
            }
            table tr td,
            table tr th {
                border-left: 1px solid #cccccc;
                padding: 10px;
            }
            table tr td:first-child,
            table tr th:first-child {
                border-left: 0;
            }
            table tr td {
                border-top: 1px solid #cccccc;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>