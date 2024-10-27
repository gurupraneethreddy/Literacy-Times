<?php
include('page1p.php');

// Function to get a list of all states in India from the database
function getAllStates($conn)
{
    $query = "SELECT DISTINCT StateName FROM sector";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $states = $result->fetch_all(MYSQLI_ASSOC);
        return array_column($states, 'StateName');
    } else {
        return [];
    }
}

// Function to retrieve job vacancy info from the database

// Function to generate JavaScript code for pie chart
function generatePieChartScript($stateName, $jobVacancyData)
{
    echo "<div class='chart-container' id='chart_$stateName'></div>";
    echo "<script>";
    // Manually declare Plotly
    echo "if (typeof Plotly === 'undefined') {";
    echo "  var Plotly = document.createElement('script');";
    echo "  Plotly.type = 'text/javascript';";
    echo "  Plotly.src = 'https://cdn.plot.ly/plotly-latest.min.js';";
    echo "  document.head.appendChild(Plotly);";
    echo "}";
    echo "console.log('Debug: Generating chart for $stateName');";
    echo "console.log('Debug: Data:', " . json_encode($jobVacancyData) . ");";
    echo "var data = [{ labels: " . json_encode(array_column($jobVacancyData, 'SectorName')) . ", values: " . json_encode(array_column($jobVacancyData, 'JobVacancies')) . ", type: 'pie' }];";
    echo "var layout = { title: 'Job Vacancies Distribution in $stateName' };";
    echo "Plotly.newPlot('chart_$stateName', data, layout);";
    echo "</script>";
}

// Example usage: Generate buttons for all states in India
$allStates = getAllStates($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Buttons and Pie Charts</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add a separate CSS file for styling -->
    <!-- Include Plotly script without defer attribute -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgb(247, 205, 124); /* Updated background color to a blue shade */
            margin: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .state-button {
            margin: 10px;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            background-color: #ffffff; /* Set button background color to white */
            color: #3498db; /* Set button text color to blue */
            border: none;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            /* Set a minimum width based on the maximum width of the button */
            min-width: 200px; /* Adjust this value based on your design */
        }

        .state-button::after {
            content: '';
            position: absolute;
            left: 0; /* Adjusted to start from the left side */
            bottom: 0;
            height: 2px;
            width: 100%; /* Changed to cover the full width of the button */
            background-color: #3498db; /* Set underline color to white */
            transition: width 1s ease; /* Width animation transition */
        }

        .state-button:hover::after {
            width: 0; /* Change back to 0 to hide the underline on hover */
        }

        .state-button:hover {
            background-color: wheat;
            transform: scale(1.1); /* Increase size on hover */
        }

        .chart-container {
            display: none;
            width: 100%;
            max-width: 600px;
            margin: 20px auto; /* Center the chart horizontally */
            background-color: #ffffff; /* Set chart background color to white */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
        }
    </style>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Add an image here -->

        <?php
        foreach ($allStates as $stateName) {
            echo "<button class='state-button' onclick='loadPieChart(\"$stateName\")'>$stateName</button>";
        }
        ?>
                <img id="initialPhoto" src="pie.png" alt="Initial Photo" style="width: 100%; max-width: 600px; margin-bottom: 20px;">

    </div>

    <?php
    foreach ($allStates as $stateName) {
        $jobVacancyData = getJobVacancyInfoForChart($stateName, $conn);

        if ($jobVacancyData) {
            generatePieChartScript($stateName, $jobVacancyData);
        } else {
            echo "No data available for $stateName";
        }
    }
    ?>

    <script>
        function loadPieChart(stateName) {
            // Hide the initial photo
            document.getElementById('initialPhoto').style.display = 'none';

            // Hide all existing charts
            document.querySelectorAll('.chart-container').forEach(chart => {
                chart.style.display = 'none';
            });

            // Show the selected chart
            document.getElementById(`chart_${stateName}`).style.display = 'block';
        }
    </script>
</body>

</html>
