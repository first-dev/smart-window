<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chartContainer {
            max-width: 1000px;
            margin: 20px auto;
        }
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
            height: 400px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Home</h1>
    <div id="chartContainer">
        <canvas id="temperatureChart"></canvas>
    </div>
    <div class="button-container">
        <a href="automode.php" class="button" id="autoButton">Auto-Control</a>

        <label class="switch">
            <input type="checkbox" id="switch">
            <span class="slider"></span>
        </label>

        <a href="schedule.php" class="button" id="schedButton">Schedule an Action</a>

        <button class="button" id="manualButton">Manual</button>

        <div class="manual-controls hidden">
            <a href="#" class="button">Button 1</a>
            <a href="#" class="button">Button 2</a>
            <a href="#" class="button">Button 3</a>
            <a href="#" class="button">Button 4</a>
        </div>
    </div>

    <script>
        var switchElement = document.getElementById("switch");
        var autoButton = document.getElementById("autoButton");
        var schedButton = document.getElementById("schedButton");
        var manualButton = document.getElementById("manualButton");
        var manualControls = document.querySelector('.manual-controls');

        switchElement.addEventListener("change", function() {
            if (this.checked) {
                alert("Switch is ON");
            } else {
                alert("Switch is OFF");
            }
        });

        manualButton.addEventListener("click", function() {
            manualControls.classList.toggle('hidden');
            autoButton.classList.toggle('hidden');
            schedButton.classList.toggle('hidden');
            switchElement.classList.toggle('hidden');
        });

        // JavaScript code to fetch data from the SQLite3 database and create a line chart
        var ctx = document.getElementById('temperatureChart').getContext('2d');

        // Function to fetch data from the SQLite3 database
        function fetchData() {
            // Replace with your own logic to fetch data from the SQLite3 database
            var data = [
                { date: '09:00', temperature: 25 },
                { date: '10:00', temperature: 27 },
                { date: '11:00', temperature: 28 },
                { date: '12:00', temperature: 26 },
                { date: '13:00', temperature: 24 }
            ];

            return data;
        }

        // Function to create a line chart
        function createLineChart(data) {
            var labels = data.map(function(item) {
                return item.date;
            });

            var values = data.map(function(item) {
                return item.temperature;
            });

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Temperature',
                        data: values,
                        fill: false,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        },
                        y: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Temperature'
                            }
                        }
                    }
                }
            });
        }

        // Fetch data from the SQLite3 database and create the line chart
        var temperatureData = fetchData();
        createLineChart(temperatureData);
    </script>
</body>
</html>
