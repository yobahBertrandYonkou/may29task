<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input{
            padding: 5px;
            display: block;
            width: 100%;
        }

        body{
            background-color: aqua;
        }

        .content{
            font-family: arial;
            font-size: 18px;
            font-weight: bold;
        }

        button{
            border: none;
            width: 100%;
            margin: 0 auto;
            padding: 5px;
            background-color: greenyellow;
        }
        
        .container{
            margin: 0 auto;
            width: 25%;
        }
    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class = 'container'>
        <div class = 'content'>
            <p>Application Form: Version updated</p>
        </div>
        <div class = 'form'>
            <form>
                <label for='name'>Username: </label>
                <input type= 'text' placeholder="full name" name='name'><br>
                <label for='email'>Email: </label>
                <input type= 'email' placeholder="email" name='email'><br>
                <label for='reg'>RegNo: </label>
                <input type= 'number' min='1941101' max = '1941167' placeholder="regno" name='reg'><br>
                <label for='dep'>Department: </label>
                <input type= 'text' placeholder="department" name='dep'><br>
                <label for='prog'>Programme: </label>
                <input type= 'text' placeholder="programme" name='prog'><br>
                <label for='sem'>Semester: </label>
                <input type= 'number' min= '1' max = '6' placeholder="semester" name='sem'><br>
                <label for='yos'>Years OS: </label>
                <input type= 'number' min ='1' max = '3' placeholder="YOS" name='yos'><br>
                <label for='by'>Birth year: </label>
                <input type= 'number' max = '2000' placeholder="YOB" name='by'><br>
                <button type = 'submit'>REGISTER</button>
                <pre>
                    <?php
                    echo "<i> TIME </i>";
                    print `time`;
                    ?>
                </pre>
            </form>
        </div>
    </div>
</body>
</html>