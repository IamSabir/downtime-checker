<?php include 'checker.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Down Time Checker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="center">
        This list contains the site which are either live or down
    </h1>
<table class='table'>
        <thead>
            <th>
                Website Name
            </th>
            <th>
                Status
            </th>
        </thead>
        <tbody>
       
        
        <?php
                $URList = 'https://votepair.org, https://getautomatix.com, https://statesidephilly.com, https://stereohyped.com';
                $up = "Live";
                $down = "Down";
                $URLs = explode(", " ,$URList);
                foreach ($URLs as $URL) {
                    echo " 
                    <tr>
                    <td>
                        $URL
                    </td>
                    "
                    ;
                    if(isSiteAvailible($URL)){
                        echo "
                    <td>
                        <a href='$URL' target='_blank' class='btn btn-primary'>$up</a>
                    </td>
                        
                    </tr>";
                    } else {
                        echo "
                    <td>
                        <a href='$URL' target='_blank' class='btn btn-danger'>$down</a>
                    </td>
                        
                    </tr>";
                    }
                }

?>
        
              
        </tbody>
    </table>
</body>
</html>