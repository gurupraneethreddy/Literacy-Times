<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository Website</title>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Include your CSS styles here -->
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
        <h1>GDP COMPARISION</h1>
    </header>

    <?php
    include('page1p.php');

    // Array of state names
    $stateNames = [
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand',
        'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab',
        'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'
    ];

    // Loop to create 29 lectures
    $stateData = [];
    foreach ($stateNames as $stateName) {
        $stateInfo = getStateInfo($stateName, $conn);
        $gdp = $stateInfo ? $stateInfo['GDP'] : 'N/A';
        $stateData[] = $gdp;
        $literacyRate = $stateInfo ? $stateInfo['LiteracyRate'] : 'N/A';
        $populationInfo = getPopulationInfo($stateName, $conn);
        $population = $populationInfo ? $populationInfo['Population'] : 'N/A';

        
    }

    // Close the database connection
    $conn->close();
    ?>

    <!-- Canvas for GDP Chart -->
    <canvas id="gdpChart" width="400" height="170"></canvas>

    <script>
        var stateNames = <?php echo json_encode($stateNames); ?>;
        var stateData = <?php echo json_encode($stateData); ?>;

        var ctx = document.getElementById('gdpChart').getContext('2d');
        var gdpChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: stateNames,
                datasets: [{
                    label: 'GDP',
                    data: stateData,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function toggleCard(button) {
            var card = button.querySelector('.repository-card');
            card.classList.toggle('flip');
            card.classList.toggle('large'); // Toggle the class for size change
            var innerCard = card.querySelector('.card-inner');
            innerCard.classList.toggle('flip');
            var heading = innerCard.querySelector('h2');
            heading.classList.toggle('flip');
            var tooltip = innerCard.querySelector('.state-info-tooltip');
            tooltip.classList.toggle('flip');
            button.classList.toggle('flip');
        }
    </script>
</body>

</html>
