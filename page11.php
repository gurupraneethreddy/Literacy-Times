<!DOCTYPE html>
<html>

<head>
    <title>Repository Website</title>

    <!-- Include your CSS styles here -->
    <style>
        body {
            background-color: lavender;
            margin: 0;
        }

        /* CSS for header */
        header {
            background-color: orange;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

       



       
        
        main {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }


        
        .card {
            margin:10px 0px;
            padding: 32px;
            position: relative;
            width: 220px;
            height: 320px;
            background: skyblue;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            font-weight: bold;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.5s;
          }
          
          .card::before,
          .card::after {
            position: absolute;
            content: "";
            width: 20%;
            height: 20%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            font-weight: bold;
            background-color: rgb(245, 194, 101);
            transition: all 2s;
          }
          
          .card::before {
            top: 0;
            right: 0;
            border-radius: 0 15px 0 100%;
          }
          
          .card::after {
            bottom: 0;
            left: 0;
            border-radius: 0 100%  0 15px;
          }
          
          .card:hover::before,
          .card:hover:after {
            width: 100%;
            height: 100%;
            border-radius: 15px;
            transition: all 0.6s;
          }

          .state-info-tooltip {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.1s; /* Add transition for smooth visibility */
        }

        .card:hover .state-info-tooltip {
            opacity: 1;
        }
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-input {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #333;
        }

    
    </style>
</head>

<body>
    <header>
        <h1>STATE INFO </h1>
    </header>
    <div class="search-container">
        <input type="text" class="search-input" placeholder="Search State" oninput="searchStates(this.value)">
    </div>

    <?php
    include('page1p.php');

    // Array of state names
    $stateNames = [
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand',
        'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab',
        'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'
    ];

    // Loop to create 29 lectures
    foreach ($stateNames as $stateName) {
        $stateInfo = getStateInfo($stateName, $conn);
        $gdp = $stateInfo ? $stateInfo['GDP'] : 'N/A';
        $literacyRate = $stateInfo ? $stateInfo['LiteracyRate'] : 'N/A';
        $populationInfo = getPopulationInfo($stateName, $conn);
        $population = $populationInfo ? $populationInfo['Population'] : 'N/A';

        echo "
        <label>
            <button class='button' onmouseover='showCard(this)' onmouseout='hideCard(this)' onclick='toggleCard(this)'> 
            <div class='card'>
            <h3>{$stateName}</h3>
            <div class='state-info-tooltip'>                
                <p><strong>GDP:</strong> <span>{$gdp}</span></p>
                <p><strong>Literacy Rate:</strong> <span>{$literacyRate}</span></p>
                <p><strong>Population:</strong> <span>{$population}</span></p>
            </div>
        </a>
    </div>
            </button>
        </label>
        ";
    }

    // Close the database connection
    $conn->close();
    ?>

    <script>
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

            // Remove the animation class to prevent reoccurrence
            card.classList.remove('animate-slide-in');
            
        }

        function showCard(button) {
            
            var tooltip = button.querySelector('.state-info-tooltip');
            tooltip.style.display = 'block';
            tooltip.style.opacity = 1;
            
            
        }
        function searchStates(value) {
            var cards = document.querySelectorAll('.card');
            value = value.toLowerCase();

            cards.forEach(function(card) {
                var stateName = card.querySelector('h3').textContent.toLowerCase();
                if (stateName.startsWith(value)) {
                    card.style.display = 'inline-block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
        

        function hideCard(button) {
            var tooltip = button.querySelector('.state-info-tooltip');
            tooltip.style.display = 'none';
            tooltip.style.opacity = 0;
            
        }
        
    </script>

</body>

</html>