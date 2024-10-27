<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository Website</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            background-color: lavender;
            margin: 0;
        }

        header {
            background-color: orange;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        #content {
            display: flex;
        }

        nav {
            --duration: 0.5s;
            --easing: ease-in-out;
            position: relative;
            width: 200px;
            margin: 5px;
            transition: opacity var(--duration) var(--easing), transform var(--duration) var(--easing);
            opacity: 1;
            transform: scaleX(1);
            transform-origin: top left;
            pointer-events: auto;
        }

        ol {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            margin: -4px 0 0 0;
        }

        a {
            display: block;
            text-decoration: none;
            background: #fff;
            transform-origin: 0 0;
            transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
            transition-delay: var(--delay-out);
            border-radius: 4px;
            padding: 1em 1.52em;
            &:hover {
                background: #efefef;
            }
        }

        .sub-menu a {
            font-size: 0.9em;
            color: #666666;
            border-left: 2em solid white;
            padding: 0.75em;
            background: linear-gradient(
                to right,
                #ddd 2px,
                #fff 2px
            );
            &:hover {
                background: linear-gradient(
                    to right,
                    #ddd 2px,
                    #efefef 2px
                );
            }
        }

        #literacyChartContainer {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; /* Add margin to separate from the header */
        }

        #literacyChart {
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <header>
        <h1>LITERACY RATE</h1>
    </header>

    <div id="content">
        <nav class="menu">
            <br>
            <br>
            
        </nav> 

        <div id="literacyChartContainer">
            <!-- Canvas for the chart -->
            <canvas id="literacyChart"></canvas>
        </div>
    </div>

    <?php
    include('page1p.php');

    // Array of state names
    $stateNames = [
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand',
        'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab',
        'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'
    ];

    // Arrays to store state data
    $literacyRates = [];

    // Loop to retrieve data
    foreach ($stateNames as $stateName) {
        $stateInfo = getStateInfo($stateName, $conn);
        $literacyRate = $stateInfo ? $stateInfo['LiteracyRate'] : null;

        // Add data to arrays
        $literacyRates[] = $literacyRate;
    }

    // Close the database connection
    $conn->close();
    ?>

    <script>
        // Chart.js script
        var ctx = document.getElementById('literacyChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($stateNames); ?>,
                datasets: [{
                    label: 'Literacy Rate',
                    data: <?php echo json_encode($literacyRates); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 5,
                        max: 100
                    }
                }
            }
        });
    </script>

</body>
</html>
