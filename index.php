<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/clouds/100/000000/monitor.png" type="image/gif" sizes="16x16">
    <title>Down Time Checker</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <style>
        .h1 {
            text-align: center;
            padding: 30px;
            background: rgb(37, 48, 54);
            background: linear-gradient(72deg, rgba(37, 48, 54, 1) 0%, rgba(30, 126, 185, 1) 25%, rgba(187, 28, 244, 1) 69%, rgba(98, 98, 98, 1) 100%, rgba(0, 212, 255, 1) 100%);
            color: white;
            font-family: courier;
            margin-top: 0px !important;
            font-size: 2rem;
        }

        .table {
            margin: auto !important;
            width: 70% !important;
        }

        .code {
            position: fixed;
            bottom: 0;
            right: 0;
            padding-right: 10px;
        }

        @media only screen and (max-width: 768px) {
            .table {
                width: 100%;
                font-size: 10px;
            }

            .h1{
                font-size: 1.5rem;
            }
        }
    </style>

</head>

<body>
    <h1 class="h1">
        This List Contains the Sites which are either Live or Down
    </h1>
    <table class='table table-striped table-hover table-bordered' id="dynamic_content">
        
    </table>
    <code class="code">Created with <span style="color: red;">&hearts;</span> by Sabir</code>

    <script>
        $(document).ready(function() {

            $('#dynamic_content').html(make_skeleton());

            setTimeout(function() {
                load_content(1);
            }, 5000);

            function make_skeleton() {
                var output = '';
                for (var count = 0; count < 3; count++) {
                    output += '<div class="ph-item">';
                    output += '<div>';
                    output += '<div class="ph-row">';
                    output += '<div class="ph-col-12 big"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                }
                return output;
            }

            function load_content(limit) {
                $.ajax({
                    url: "checker.php",
                    method: "POST",
                    data: {
                        limit: limit
                    },
                    success: function(data) {
                        $('#dynamic_content').html(data);
                    }
                })
            }

        });
    </script>
</body>

</html>