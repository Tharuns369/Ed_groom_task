<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        #adminForm {
            width: 30%;

            display: flex;
            flex-direction: column;
            margin: 100px 35%;
            border-radius: 40px;
        }

        #adminForm input {
            padding: 20px;
            margin: 10px;
            border-radius: 20px;
        }

        #adminForm button {
            padding: 10px;
            border-radius: 20px;
        }

        #admin {
            padding: 10px;
            background-color: yellow;

        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Admin Login</h1>
    <form id="adminForm">
        <input type="text" placeholder="user name" id="user">
        <input type="password" placeholder="password" id="pass">
        <button id="admin">Submt</button>
    </form>


    <script>
        document.getElementById("admin").addEventListener('click', function (e) {
            e.preventDefault();
            let userName = document.getElementById("user").value;
            let password = document.getElementById("pass").value;
            if (userName == "admin" && password == "admin") {
                alert("Sudd")
                location.href = "users.php"
            } else {
                alert("Invalid credentials...")
            }

        })
    </script>
</body>

</html>