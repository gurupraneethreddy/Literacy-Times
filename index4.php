<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Data Comparison</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>

body {
    font-family: 'Arial', sans-serif;
    color: #333;
    margin: 0;
    padding: 20px;
    text-align: center;
    background-color:rgb(247, 205, 124) ;
    animation: gradientAnimation 10s infinite alternate;
}

@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}

h1 {
    font-size: 24px;
    color: #fff;
}

form {
    margin-top: 20px;
}

label {
    font-size: 16px;
    margin-right: 10px;
}

select {
    font-size: 14px;
    padding: 8px;
    margin-right: 20px;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    transition: background-color 0.3s ease-out;
}

button:hover {
    background-color: #2980b9;
}

</style>
<body>
    <h1>Data from SQL Tables</h1>

    <p>
    <h3>
    Please select two states from the dropdown menus above that you would like to compare in terms of Gross Domestic Product (GDP). Once you've made your selections, click the "Compare Selected States" button to view a detailed analysis of the GDPs of the chosen states. This comparison will provide insights into the economic landscapes of the selected regions, allowing you to discern variations and similarities in their economic performances. Make informed observations and explore the data to gain a comprehensive understanding of the GDP dynamics between the two states.
</h3>

    </p>

    <form id="stateForm" onsubmit="return showData()">
        <label for="state1">Select State 1:</label>
        <select id="state1" name="state1">
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="West Bengal">West Bengal</option>
        </select>

        <label for="state2">Select State 2:</label>
        <select id="state2" name="state2">
        <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="West Bengal">West Bengal</option>
        </select>

        <button type="submit">Compare Selected States</button>

    </form>
    <br>
    <img src="GDP.jpg" alt="Comparison Image">


    <script>
        function showData() {
            // Get selected states from the form
            var state1 = document.getElementById("state1").value;
            var state2 = document.getElementById("state2").value;

            // Redirect to a new page with the selected states
            window.location.href = `showData4.php?state1=${state1}&state2=${state2}`;

            // Prevent the form from submitting the traditional way
            return false;
        }
    </script>
</body>
</html>
