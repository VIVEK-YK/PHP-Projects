<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        pad: 0;
    }
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    form {
        width: max-content;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    input{
        height: 30px;
    }
    input,
    button, .button{
        font-size: 15px;
        width: max-content;
    }
    .showData{
        border: 1px solid black;
        font-weight: 900;
        width: max-content;
        text-align: center;
        font-size: 30px;
        padding: 10px;
        background: crimson;
        border-radius: 5px;
    }
    .showData, button {
        margin: 5px;
    }
    td{
        text-align: center;
        width: auto;
        height: min-content;
    }
    #inline{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        column-gap: 5px;
        
    }
    #inline input{
        margin: 5px 0;
    }

</style>

<body>

    <h1>Crud APP in PHP and JavaScript</h1>
    <form action="add.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <input type="number" name="age" id="age" placeholder="Enter Your age">
        <input type="text" name="city" id="city" placeholder="Enter Your City">
        <input type="submit" name="add" value="ADD">
        <p>

        </p>
    </form>
    <form action="show.php" method="GET">
        <div class="showData">Refresh page after adding Data</div>
    </form>
        <table border="1" cellspacing="0" width='400px'>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?PHP
                 include 'show.php';
                 if(isset($myArrData)){
                 echo $myArrData;
                }
                ?>
            </tbody>
        </table>
</body>

</html>