<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #2196F3;
            color: #fff;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 20px;
            margin: 0 10px;
        }

        .button:hover {
            background-color: #0a6bbf;
        }

        .switch {
            display: inline-block;
            position: relative;
            width: 60px;
            height: 34px;
            margin: 0 10px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        canvas {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Home</h1>

    <div class="button-container">
        <a href="automode.php" class="button">Auto-Control</a>

        <label class="switch">
            <input type="checkbox" id="switch">
            <span class="slider"></span>
        </label>

        <a href="schedule.php" class="button">Schedule an Action</a>
    </div>

    <canvas id="graphCanvas"></canvas>

    <script>
        // JavaScript for the buttons, switch, and graph
        var button1 = document.getElementById("AutoButton");
        var button2 = document.getElementById("SchedButton");
        var switchElement = document.getElementById("switch");
        var canvas = document.getElementById("graphCanvas");
        var ctx = canvas.getContext("2d");

        button1.addEventListener("click", function() {
            alert("AutoButton clicked");
        });

        button2.addEventListener("click", function() {
            alert("SchedButton clicked");
        });

        switchElement.addEventListener("change", function() {
            if (this.checked) {
                alert("Switch is ON");
            } else {
                alert("Switch is OFF");
            }
        });

        // Graph drawing example (replace with your own graph logic)
        function drawGraph() {
            
        }

        drawGraph(); // Call the function to draw the graph
    </script>
</body>
</html>
