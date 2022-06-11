<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista To-Do (Zaliczenie Azure)</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style media="screen">
    	*,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background: #066acd;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 40%;
            min-width: 450px;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            background: white;
            border-radius: 10px;
        }

        #newtask {
            position: relative;
            padding: 30px 20px;
        }

        #newtask input {
            width: 75%;
            height: 45px;
            font-size: 15px;
            border: 2px solid #d1d3d4;
            padding: 12px;
            color: #111111;
            font-weight: 500;
            position: relative;
            border-radius: 5px;
        }

        #newtask input:focus {
            outline: none;
            border-color: #0d75ec;
        }

        #newtask button {
            position: relative;
            float: right;
            width: 20%;
            height: 45px;
            border-radius: 5px;
            font-weight: 500;
            font-size: 16px;
            background-color: #0d75ec;
            border: none;
            color: #ffffff;
            cursor: pointer;
            outline: none;
        }

        #tasks {
            background-color: #ffffff;
            padding: 30px 20px;
            margin-top: 10px;
            border-radius: 10px;
            width: 100%;
            position: relative;
        }

        .task {
            background-color: #c5e1e6;
            height: 50px;
                margin-bottom: 8px;
            padding: 5px 10px;
            display: flex;
                border-radius: 5px;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #939697;
            cursor: pointer;
        }

        .task span {
            font-family: 'Poppins',sans-serif;
            font-size: 15px;
            font-weight: 400;
        }

        .task button {
            background-color: #0a2ea4;
            color: #ffffff;
            height: 100%;
            width: 40px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .completed {
            text-decoration: line-through;
        }

        .title {
            text-align: center;
            letter-spacing: 7px;
            margin-top: 7px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">LISTA TODO</h1>
        <div id="newtask">
            <input type="text" placeholder="Treść zadania...">
            <button id="push">Dodaj</button>
        </div>

        <div id="tasks"></div>
    </div>

    <script type="text/javascript">
        document.querySelector('#push').onclick = function() {
            if(document.querySelector('#newtask input').value.length === 0) {
                alert("Nic nie wpisałeś!");
            } else {
                document.querySelector('#tasks').innerHTML += `
                    <div class="task">
                        <span id="taskname">
                            ${document.querySelector('#newtask input').value}
                        </span>
                        <button class="delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                `;

                document.querySelector('#newtask input').value = '';

                var current_tasks = document.querySelectorAll(".delete");
                for (var i = 0; i < current_tasks.length; i++) {
                    current_tasks[i].onclick = function() {
                        this.parentNode.remove();
                    }
                }
            }
        }
    </script>
</body>
</html>
