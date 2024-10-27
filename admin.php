<?php
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

// Function to retrieve all users from the 'users' table
function getAllUsers($conn)
{
    $query = "SELECT * FROM registration";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Function to add a new user to the 'users' table
function addUser($conn, $username, $password)
{
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO registration (username, password) VALUES ('$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to remove a user from the 'users' table
function removeUser($conn, $username)
{
    $sql = "DELETE FROM registration WHERE username = '$username'";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Check if the form for adding a new user is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addUser"])) {
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    if (addUser($conn, $newUsername, $newPassword)) {
        echo "User added successfully.";
    } else {
        echo "Error adding user: " . $conn->error;
    }
}

// Check if the form for removing a user is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["removeUser"])) {
    $userIdToRemove = $_POST['userIdToRemove'];

    if (removeUser($conn, $userIdToRemove)) {
        echo "User removed successfully.";
    } else {
        echo "Error removing user: " . $conn->error;
    }
}

// Get all existing users
$allUsers = getAllUsers($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        form.remove-form {
            display: flex;
            align-items: center;
        }

        input[type="submit"].remove-button {
            background-color: #e74c3c;
        }

        input[type="submit"].remove-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>
    <h2>Add New User</h2>
    <form method="post" action="">
        <label for="newUsername">Username:</label>
        <input type="text" name="newUsername" required>
        <br>
        <label for="newPassword">Password:</label>
        <input type="password" name="newPassword" required>
        <br>
        <input type="submit" name="addUser" value="Add User">
    </form>

    <h2>Existing Users</h2>
    <ul>
        <?php foreach ($allUsers as $user) : ?>
            <li>
                <?php echo $user['username']; ?>
                <form method="post" action="" class="remove-form">
                    <input type="hidden" name="userIdToRemove" value="<?php echo $user['username']; ?>">
                    <input type="submit" name="removeUser" value="Remove" class="remove-button">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
