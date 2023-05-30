<!DOCTYPE html>
<html>
<head>
    <title>Auto Control</title>
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

        .checkbox-groups {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            margin-right: 20px;
        }

        .checkbox-group label {
            margin-bottom: 10px;
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
    </style>
</head>
<body>
    <h1>Auto Control</h1>

    <a class="back-button" href="Home.php">&#8592; Back</a>

    <div class="checkbox-groups">
        <div class="checkbox-group">
            <label for="fanOnRadio">
                <input type="radio" name="fanOption" id="fanOnRadio">
                Keep Fan On
            </label>

            <label for="fanOffRadio">
                <input type="radio" name="fanOption" id="fanOffRadio">
                Keep Fan Off
            </label>
        </div>

        <div class="checkbox-group">
            <label for="windowOpenRadio">
                <input type="radio" name="windowOption" id="windowOpenRadio">
                Keep Window Open
            </label>

            <label for="windowCloseRadio">
                <input type="radio" name="windowOption" id="windowCloseRadio">
                Keep Window Closed
            </label>
        </div>

        <div class="checkbox-group">
            <label for="coolRadio">
                <input type="radio" name="temperatureOption" id="coolRadio">
                Keep it Cool
            </label>

            <label for="normalRadio">
                <input type="radio" name="temperatureOption" id="normalRadio">
                Keep it Normal
            </label>
        </div>
    </div>

    <button id="activateButton">Activate Auto Mode</button>

    <script>
        // JavaScript for the Auto Control page
        var activateButton = document.getElementById("activateButton");

        activateButton.addEventListener("click", function() {
            // Perform action when the button is clicked
            // Add your own logic here
            alert("Auto mode activated!");
        });
    </script>
</body>
</html>
