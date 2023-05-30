<!DOCTYPE html>
<html>
<head>
    <title>Schedule Action</title>
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

        div {
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }

        select, input[type="time"] {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        button {
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
        }

        button:hover {
            background-color: #0a6bbf;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
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
        }
    </style>
</head>
<body>
    <h1>Schedule Action</h1>
    <a class="back-button" href="Home.php">&#8592; Back</a>
    <div>
        <label for="actionSelect">Action:</label>
        <select id="actionSelect">
            <option value="option1">Open Window</option>
            <option value="option2">Close Window</option>
            <option value="option3">Turn On the fan</option>
            <option value="option3">Turn Off the fan</option>
        </select>
    </div>

    <div>
        <label for="timeInput">Time:</label>
        <input type="time" id="timeInput" required>
    </div>

    <button id="scheduleButton">Schedule</button>

    <script>
        // JavaScript for the Schedule page
        var scheduleButton = document.getElementById("scheduleButton");

        scheduleButton.addEventListener("click", function() {
            // Perform action when the button is clicked
            // Add your own logic here
            alert("Action scheduled!");
        });
    </script>
</body>
</html>
