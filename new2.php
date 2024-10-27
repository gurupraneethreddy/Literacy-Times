<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Economic Contribution</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
    font-family: "Century Gothic", 'Lato', sans-serif;
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
}

.navbar {
    background-color: orange;
    overflow: hidden;
}

.navbar a {
    float: left;
    display: block;
    color: orange;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
}

.navbar a:hover {
    background-color: orange;
    color: black;
}

.et-hero-tabs,
.et-slide {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100;
    position: relative;
    background: orange; /* Light gray background */
    text-align: center;
    padding: 3em 2em; /* Adjusted padding */
}

.et-hero-tabs h1 {
    font-size: 2rem;
    margin: 0;
    letter-spacing: 1rem;
    color: orange; /* Dark gray text color */
}

.et-hero-tabs h3 {
    font-size: 1rem;
    letter-spacing: 0.3rem;
    opacity: 0.6;
    color: orange; /* Slightly darker gray text color */
}

.et-hero-tabs-container {
    display: flex;
    flex-direction: row;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background: orange;
    z-index: 10;
    border-top: 1px solid #ddd; /* Add a border to the top */
}

.et-hero-tabs-container--top {
    position: fixed;
    top: 0;
}

.et-hero-tab {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
    color: #333; /* Dark gray text color */
    letter-spacing: 0.1rem;
    transition: all 0.5s ease;
    font-size: 0.8rem;
    height: 100;
    border-bottom: 2px solid transparent; /* Add a transparent border to the bottom */
}

.et-hero-tab:hover {
    color: white;
    background: rgba(102, 177, 241, 0.8);
    transition: all 0.5s ease;
    border-bottom: 2px solid #66B1F1; /* Change border color on hover */
}

.et-hero-tab-slider {
    position: absolute;
    bottom: 0;
    width: 0;
    height: 6px;
    background: orange;
    transition: left 0.3s ease;
}

@media (min-width: 800px) {
    .et-hero-tabs h1 {
        font-size: 3rem;
    }

    .et-hero-tabs h3 {
        font-size: 1rem;
    }

    .et-hero-tab {
        font-size: 1rem;
    }
}

.et-slide#tab-es6,
.et-slide#tab-flexbox,
.et-slide#tab-react,
.et-slide#tab-angular,
.et-slide#tab-other {
    overflow-y: auto;
    padding-top: 10px;
}

.et-slide table {
    width: 100%;
    font-size: 14px;
    border-collapse: collapse; /* Add collapse to remove spacing between table cells */
}

.et-slide th,
.et-slide td {
    padding: 10px;
    border: 1px solid #ddd; /* Add border to table cells */
}

    </style>
    <style>
        body {
            font-family: "Century Gothic", 'Lato', sans-serif;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: orange;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: orange;
            color: black;
        }

        .et-hero-tabs,
        .et-slide {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100;
            position: relative;
            background: #eee;
            text-align: center;
            padding: 300 2em;
        }

        .et-hero-tabs h1 {
            font-size: 2rem;
            margin: 0;
            letter-spacing: 1rem;
        }

        .et-hero-tabs h3 {
            font-size: 1rem;
            letter-spacing: 0.3rem;
            opacity: 0.6;
        }

        .et-hero-tabs-container {
            display: flex;
            flex-direction: row;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: #fff;
            z-index: 10;
            
        }

        .et-hero-tabs-container--top {
            position: fixed;
            top: 0;
        }

        .et-hero-tab {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            color: #000;
            letter-spacing: 0.1rem;
            transition: all 0.5s ease;
            font-size: 0.8rem;
            height: 100;
        }

        .et-hero-tab:hover {
            color: white;
            background: rgba(102, 177, 241, 0.8);
            transition: all 0.5s ease;
        }

        .et-hero-tab-slider {
            position: absolute;
            bottom: 0;
            width: 0;
            height: 6px;
            background: #66B1F1;
            transition: left 0.3s ease;
        }

        @media (min-width: 800px) {
            .et-hero-tabs h1 {
                font-size: 3rem;
            }

            .et-hero-tabs h3 {
                font-size: 1rem;
            }

            .et-hero-tab {
                font-size: 1rem;
            }
        }
        .navbar a {
    transition: background-color 0.3s, color 0.3s;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

        .et-slide#tab-es6 {
    overflow-y: auto; /* Add a scrollbar if content overflows */
    padding-top: 10px; /* Add padding to the top */
}

.et-slide#tab-es6 table {
    width: 100%; /* Ensure table takes up full width */
    font-size: 14px; /* Adjust the font size as needed */
}

.et-slide#tab-es6 th, .et-slide#tab-es6 td {
    padding: 10px; /* Adjust padding for better spacing */
}
.et-slide#tab-flexbox {
    overflow-y: auto; /* Add a scrollbar if content overflows */
    padding-top: 10px; /* Add padding to the top */
}

.et-slide#tab-flexbox table {
    width: 100%; /* Ensure table takes up full width */
    font-size: 14px; /* Adjust the font size as needed */
}

.et-slide#tab-flexbox th, .et-slide#tab-flexbox td {
    padding: 10px; /* Adjust padding for better spacing */
}
.et-slide#tab-react{
    overflow-y: auto; /* Add a scrollbar if content overflows */
    padding-top: 10px; /* Add padding to the top */
}

.et-slide#tab-react table {
    width: 100%; /* Ensure table takes up full width */
    font-size: 14px; /* Adjust the font size as needed */
}

.et-slide#tab-react th, .et-slide#tab-react td {
    padding: 10px; /* Adjust padding for better spacing */
}
.et-slide#tab-angular {
    overflow-y: auto; /* Add a scrollbar if content overflows */
    padding-top: 10px; /* Add padding to the top */
}

.et-slide#tab-angular table {
    width: 100%; /* Ensure table takes up full width */
    font-size: 14px; /* Adjust the font size as needed */
}

.et-slide#tab-angular th, .et-slide#tab-angular td {
    padding: 10px; /* Adjust padding for better spacing */
}
.et-slide#tab-other {
    overflow-y: auto; /* Add a scrollbar if content overflows */
    padding-top: 10px; /* Add padding to the top */
}

.et-slide#tab-other table {
    width: 100%; /* Ensure table takes up full width */
    font-size: 14px; /* Adjust the font size as needed */
}

.et-slide#tab-other th, .et-slide#tab-other td {
    padding: 10px; /* Adjust padding for better spacing */
}


    </style>
</head>

<body>
    <!-- Navigation Bar -->
  

    <!-- Hero Section -->
    <section class="et-hero-tabs">
        <h1>INFORMATION TABLES</h1>
        <h3>Sliding content with sticky tab nav</h3>
        <div class="et-hero-tabs-container">
            <a class="et-hero-tab" href="#tab-es6">STATE ECONOMY</a>
            <a class="et-hero-tab" href="#tab-flexbox">SECTOR</a>
            <a class="et-hero-tab" href="#tab-react">STATE STATISTICS</a>
            <a class="et-hero-tab" href="#tab-angular">LITERACY RATE</a>
            <a class="et-hero-tab" href="#tab-other">ECONOMIC CONTRIBU</a>
            <!-- Add other tabs as needed -->
            <span class="et-hero-tab-slider"></span>
        </div>
    </section>

    <!-- Main Content -->
    <main class="et-main">
        <!-- ES6 Section -->
        <section class="et-slide" id="tab-es6">
            <h1>State Wise Economic Contribution</h1>
            <h3>Information about Economy</h3>

            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "projectdbms";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get the table name from the query parameters
            $tableName = "economycontribution"; // Set the table name to "economic_contribution"

            // Fetch data from the selected table
            $sql = "SELECT * FROM $tableName"; // Ensure the table names are valid
            $result = $conn->query($sql);

            // Display data from the economic contribution table
            echo "<table border='1'>";
            echo "<tr>";
            $result->data_seek(0);
            while ($field = $result->fetch_field()) {
                echo "<th>" . $field->name . "</th>";
            }
            echo "</tr>";

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='" . $result->field_count . "'>0 results</td></tr>";
            }

            echo "</table>";
            ?>

        </section>
        <section class="et-slide" id="tab-flexbox">
            <h1>Sectors</h1>
            <h3>Information about sectors</h3>

            <?php
                        $tableName = "sector"; // Set the table name to "economic_contribution"
                        $sql = "SELECT * FROM $tableName"; // Ensure the table names are valid
                        $result = $conn->query($sql);
            
                        // Display data from the economic contribution table
                        echo "<table border='1'>";
                        echo "<tr>";
                        $result->data_seek(0);
                        while ($field = $result->fetch_field()) {
                            echo "<th>" . $field->name . "</th>";
                        }
                        echo "</tr>";
            
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                foreach ($row as $value) {
                                    echo "<td>" . $value . "</td>";
                                }
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='" . $result->field_count . "'>0 results</td></tr>";
                        }
            
                        echo "</table>";



            ?>


        </section>
        <section class="et-slide" id="tab-react">
            <h1>State Statistics</h1>
            <h3>Information about statastics of state</h3>
            <?php
                        $tableName = "statestatistics"; // Set the table name to "economic_contribution"
                        $sql = "SELECT * FROM $tableName"; // Ensure the table names are valid
                        $result = $conn->query($sql);
            
                        // Display data from the economic contribution table
                        echo "<table border='1'>";
                        echo "<tr>";
                        $result->data_seek(0);
                        while ($field = $result->fetch_field()) {
                            echo "<th>" . $field->name . "</th>";
                        }
                        echo "</tr>";
            
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                foreach ($row as $value) {
                                    echo "<td>" . $value . "</td>";
                                }
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='" . $result->field_count . "'>0 results</td></tr>";
                        }
            
                        echo "</table>";



            ?>
        </section>
        <section class="et-slide" id="tab-angular">
            <h1>Literacy Rate</h1>
            <h3>Information about literacy rate</h3>
            <?php
                        $tableName = "literacyrate"; // Set the table name to "economic_contribution"
                        $sql = "SELECT * FROM $tableName"; // Ensure the table names are valid
                        $result = $conn->query($sql);
            
                        // Display data from the economic contribution table
                        echo "<table border='1'>";
                        echo "<tr>";
                        $result->data_seek(0);
                        while ($field = $result->fetch_field()) {
                            echo "<th>" . $field->name . "</th>";
                        }
                        echo "</tr>";
            
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                foreach ($row as $value) {
                                    echo "<td>" . $value . "</td>";
                                }
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='" . $result->field_count . "'>0 results</td></tr>";
                        }
            
                        echo "</table>";



            ?>
        </section>
        <section class="et-slide" id="tab-other">
            <h1>State Economy</h1>
            <h3>Information about state economy</h3>
            <?php
                        $tableName = "stateeconomy"; // Set the table name to "economic_contribution"
                        $sql = "SELECT * FROM $tableName"; // Ensure the table names are valid
                        $result = $conn->query($sql);
            
                        // Display data from the economic contribution table
                        echo "<table border='1'>";
                        echo "<tr>";
                        $result->data_seek(0);
                        while ($field = $result->fetch_field()) {
                            echo "<th>" . $field->name . "</th>";
                        }
                        echo "</tr>";
            
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                foreach ($row as $value) {
                                    echo "<td>" . $value . "</td>";
                                }
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='" . $result->field_count . "'>0 results</td></tr>";
                        }
            
                        echo "</table>";



            ?>
        </section>

        <!-- Other Sections -->
        <!-- Add content for other sections as needed -->

        <script>
            class StickyNavigation {

constructor() {
    this.currentId = null;
    this.currentTab = null;
    this.tabContainerHeight = 70;
    let self = this;
    $('.et-hero-tab').click(function () {
        self.onTabClick(event, $(this));
    });
    $(window).scroll(() => {
        this.onScroll();
    });
    $(window).resize(() => {
        this.onResize();
    });
}

onTabClick(event, element) {
    event.preventDefault();
    let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
    $('html, body').animate({ scrollTop: scrollTop }, 600);
}

onScroll() {
    this.checkTabContainerPosition();
    this.findCurrentTabSelector();
}

onResize() {
    if (this.currentId) {
        this.setSliderCss();
    }
}

checkTabContainerPosition() {
    let offset = $('.et-hero-tabs').offset().top + $('.et-hero-tabs').height() - this.tabContainerHeight;
    if ($(window).scrollTop() > offset) {
        $('.et-hero-tabs-container').addClass('et-hero-tabs-container--top');
    } else {
        $('.et-hero-tabs-container').removeClass('et-hero-tabs-container--top');
    }
}

findCurrentTabSelector(element) {
    let newCurrentId;
    let newCurrentTab;
    let self = this;
    $('.et-hero-tab').each(function () {
        let id = $(this).attr('href');
        let offsetTop = $(id).offset().top - self.tabContainerHeight;
        let offsetBottom = $(id).offset().top + $(id).height() - self.tabContainerHeight;
        if ($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
            newCurrentId = id;
            newCurrentTab = $(this);
        }
    });
    if (this.currentId != newCurrentId || this.currentId === null) {
        this.currentId = newCurrentId;
        this.currentTab = newCurrentTab;
        this.setSliderCss();
    }
}

setSliderCss() {
    let width = 0;
    let left = 0;
    if (this.currentTab) {
        width = this.currentTab.css('width');
        left = this.currentTab.offset().left;
    }
    $('.et-hero-tab-slider').css('width', width);
    $('.et-hero-tab-slider').css('left', left);
}

}

new StickyNavigation();
</script>
    </main>
</body>

</html>
