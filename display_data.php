<?php
// Connect to your database
$conn = mysqli_connect("localhost:3306", "root", "", "portfolio");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$sql = "SELECT * FROM messages";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
   echo "<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px; /* Adjust the margin between the table and other elements */
        }

        th, td {
            padding: 10px; /* Adjust the padding for cells */
            text-align: left;
            border: 1px solid #ddd; /* Add border for cells */
        }

        th {
            background-color: #f2f2f2; /* Add a background color for header cells */
        }

        a {
            display: block;
            padding: 5px; /* Adjust the padding for the delete link */
        }
    </style>";

echo "<table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["message"] . "</td>";
    echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";

    }
 else {
    echo "<tr><td colspan='4'>No data found</td></tr>";
}

mysqli_close($conn);
?>