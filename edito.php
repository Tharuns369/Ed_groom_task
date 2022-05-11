<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>edit</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif
        }
        
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee
        }
        
        .card {
            width: 350px;
            height: 470px;
            background-color: #fff;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden
        }
        
        .card .info {
            padding: 15px;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #e1dede;
            background-color: #e5e5e5
        }
        
        .card .info button {
            height: 30px;
            width: 80px;
            border: none;
            color: #fff;
            border-radius: 4px;
            background-color: #000;
            cursor: pointer;
            text-transform: uppercase
        }
        
        .card .forms {
            padding: 15px
        }
        
        .card .inputs {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px
        }
        
        .card .inputs span {
            font-size: 12px
        }
        
        .card .inputs input {
            height: 40px;
            padding: 0px 10px;
            font-size: 17px;
            box-shadow: none;
            outline: none
        }
        
        .card .inputs input[type="text"][readonly] {
            border: 2px solid rgba(0, 0, 0, 0)
        }


    </style>
</head>

<body>
<div class="container">
 >   <div class="card">
        <div class="info"> <span>Edit form</span> <button id="savebutton">edit</button> </div>
        <div class="forms">
            <div class="inputs"> <span>First Name</span> <input type="text" > </div>
            <div class="inputs"> <span>Last Name</span> <input type="text" > </div>
            <div class="inputs"> <span>Email</span> <input type="text" > </div>
            <div class="inputs"> <span>phonenumber</span> <input type="text" > </div>
            <div class="inputs"> <span>password</span> <input type="text" > </div>
        </div>
    </div>
</div>


<script>
    var savebutton = document.getElementById('savebutton');
var readonly = true;
var inputs = document.querySelectorAll('input[type="text"]');
savebutton.addEventListener('click',function(){

for (var i=0; i<inputs.length; i++) { inputs[i].toggleAttribute('readonly'); }; if (savebutton.innerHTML=="edit" ) { savebutton.innerHTML="save" ; } else { savebutton.innerHTML="edit" ; } });
    </script>

</body>
</html>