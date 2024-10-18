<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>

    body{
        background-color:#333333; ;
    }

.login-container {
    background: white;
    padding: 2em;
    border-radius: 10px;
    width: 300px;
    box-shadow:1.5px 1.5px 1px 1px black;
    margin-left:40%;
    margin-top:11%;
}

.login-form {
    display: flex;
    flex-direction: column;
    
}

.login-form h2 {
    text-align: center;
    margin-bottom: 1em;
    color: #333;
    font-size:30px;
}

.input-group {
    margin-bottom: 1em;
}

.input-group label {
    margin-bottom: 0.5em;
    color:black;
    font-size:17px;
    text-shadow:1px 1px white;
}

.input-group input {
    margin-top: 0.5em;
    padding: 0.5em;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
}

button {
    padding: 0.7em;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size:15px;
}


button:hover{
    opacity:85%
    
}

</style>

</head>
<body>


<div class="login-container">
        <form class="login-form" action="adminDetails.php" method="post">
            <h2>Admin Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="adminname" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button  name="submit">Login</button>
        </form>
    </div>


</body>
</html>