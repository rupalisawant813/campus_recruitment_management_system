<?php
    session_start();

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crms";

    // Establish database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Fetching form inputs
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $type = $_POST['type'];

        // Validate inputs
        if (empty($uname) || empty($pwd)) {
            echo "<script>alert('Please fill all fields!'); window.location.replace('index.html');</script>";
            exit();
        }

        // Prepare SQL query based on user type
        $sql = "";
        if ($type === "Student") {
            $sql = "SELECT pwd FROM students WHERE email = ?";
        } elseif ($type === "Company") {
            $sql = "SELECT pwd FROM companys WHERE email = ?";
        } elseif ($type === "Admin") {
            // Admin login logic (hardcoded credentials)
            if ($uname === "admin" && $pwd === "admin") {
                header("Location: admin_dash.php");
                exit();
            } else {
                echo "<script>alert('Invalid Admin credentials!'); window.location.replace('index.html');</script>";
                exit();
            }
        } else {
            echo "<script>alert('Invalid user type!'); window.location.replace('index.html');</script>";
            exit();
        }

        // Debug SQL query
        // echo "SQL Query: $sql";

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $uname); // Bind email (uname) parameter
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Validate password
            if ($row["pwd"] === $pwd) {
                // Set session variables and redirect based on user type
                $_SESSION['email'] = $uname;

                if ($type === "Student") {
                    header("Location: student_dash.php");
                    exit();
                } elseif ($type === "Company") {
                    header("Location: company_dash.php");
                    exit();
                }
            } else {
                echo "<script>alert('Incorrect password!'); window.location.replace('index.html');</script>";
            }
        } else {
            echo "<script>alert('User does not exist!'); window.location.replace('index.html');</script>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
?>
