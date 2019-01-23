<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 3</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <script type = "text/javascript" src = "script.js"></script>
    <style>
        body  {
            background-color: rgb(45, 45, 199);
        }
        #main{
            border: 0px solid blue;
        }
            fieldset{
                width: 18%;
                height: auto;
                margin: auto;
            }
            .flex-container {
            display: flex;
            height: 600px;
            align-content: center;
        }
            input{
                width: auto;
                height: auto;
                margin: 10px;
                padding: 10px;
                background-color: rgb(45, 45, 199);
                border-top: 0px;
                border-left: 0px;
                border-right: 0px;
            }
            input:focus {
                background-color: lightblue;
        }
            button{
                width: 120px;
                height: 30px;
                margin: 10px;
                background-color: rgb(74, 74, 221);
                border-radius: 5px;
                float: center;
            }
            button:hover{
                background-color: rgb(45, 45, 199);
                border-radius: 50px;
                width: 30%;
                height: 30%:
            }
        </style>
</head>
<body>
                
    <div id="main">
        <form class="flex-container" action="process.php" method="get">
            <fieldset>
                <legend><h5>Tyre Validation</h5></legend>
                    <br/><label for="Year"><b>Year</b></label>
                    <input type="number" placeholder="Enter Year" id="year" required>
                    <br/><label for="week"><b>Weeks</b></label>
                    <input type="number" placeholder="Enter Week" id="week" required>
                    <br/><button onclick="check()">Check</button>
            </fieldset>
        </form>                   
    </div>
</body>
</html>