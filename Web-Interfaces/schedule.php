<?php
// SQLite database file path
$database = '/var/www/smart_window.db';

// Create a new SQLite database connection
$db = new SQLite3($database);

// Check if the form is submitted for adding a scheduled action
if (isset($_POST['add_action'])) {
    $action = $_POST['action'];
    $date = $_POST['date'];

    // Insert the new scheduled action into the database
    $query = "INSERT INTO schedules (ACTION, date) VALUES ('$action', '$date')";
    $db->exec($query);
}

// Check if the form is submitted for deleting a scheduled action
if (isset($_POST['delete_action'])) {
    $id = $_POST['id'];

    // Delete the scheduled action from the database
    $query = "DELETE FROM schedules WHERE id = '$id'";
    $db->exec($query);
}

// Fetch all scheduled actions from the database
$query = "SELECT * FROM schedules";
$result = $db->query($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Scheduled Actions</title>
</head>
<body>
    <h1>Scheduled Actions</h1>

    <!-- Add a new scheduled action form -->
    <h2>Add Scheduled Action</h2>
    <form method="POST" action="">
        <label>Action:</label>
        <input type="text" name="action" required><br>

        <label>Date:</label>
        <input type="date" name="date" required><br>

        <input type="submit" name="add_action" value="Add Action">
    </form>

    <!-- Display scheduled actions -->
    <h2>Scheduled Actions List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Action</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>
        <?php while ($row = $result->fetchArray(SQLITE3_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ACTION']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" name="delete_action" value="Delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
// Close the database connection
$db->close();
?>
