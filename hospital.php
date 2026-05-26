<?php
// --- DATABASE CONNECTION ---
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "PatientData";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- SAVE PATIENT DATA ---
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $idnum = $_POST['idnum'];
    $gender = $_POST['gender'];
    $diag = $_POST['diagnosis'];
    $drug = $_POST['drug'];

    $sql = "INSERT INTO Patients(first_name,last_name,id_number,gender,diagnosis,drug)
            VALUES('$fname','$lname','$idnum','$gender','$diag','$drug')";

    if($conn->query($sql) === TRUE){
        $message="Patient Registered Successfully!";
    } else {
        $message="Error: ".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Afya Bora Hospital</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="animated-bg">
    <span></span><span></span><span></span>
</div>

<header>
    <img src="hosi543.jpg" alt="" width="4%" height="4%" style="border-radius: 50%;" > 
    <h1><span style="color: #3498db;">Afya</span> <span style="color: #e74c3c;">Bora</span> Hospital</h1>
    <p>Quality Healthcare For Everyone</p>
</header>

<nav>
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='hospital.php'">Home</button>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Departments</button>
        <div class="dropdown-content">
            <ol>
                <li><a href="outpatient.php">Ambulatory car</a></li>
                <li><a href="inpatient.php">Victim</a></li>
            </ol>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Services</button>
        <div class="dropdown-content">
            <ol>
                <li><a href="maternity.php">Maternity</a></li>
                <li><a href="pharmacy.php">Pharmacy</a></li>
            </ol>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Careers</button>
        <div class="dropdown-content">
            <ol>
                <li><a href="nursing.php">Medication</a></li>
                <li><a href="admin.php">Management</a></li>
            </ol>
        </div>
    </div>
</nav>
  
<div class="main-body">
    <section class="registration-form" style="background: white; margin-bottom: 20px;">
        <h3>Introduction</h3>
        <p style="color: #e67e22; font-size: 18px; line-height: 1.6;">
            Afya Bora Hospital was founded in 2022 to address the growing need for accessible, high-quality healthcare services in the rapidly expanding region. 
            Our history is rooted in a commitment to community well-being and a vision for a healthier future.
        </p>
    </section>
       

    <section class="registration-form">
        <h3>Patient Registration</h3>
        <?php if($message!="") echo "<p style='color:green; font-weight:bold;'>$message</p>"; ?>

        <form method="POST">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="text" name="idnum" placeholder="ID Number" required>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <textarea name="diagnosis" placeholder="Diagnosis"></textarea>
            <input type="text" name="drug" placeholder="Prescribed Drug">
            <button type="submit">Register Patient</button>
        </form>

        <hr>
        <h3>Registered Patients</h3>
        <table>
            <tr>
                <th>First Name</th><th>Last Name</th><th>ID Number</th>
                <th>Gender</th><th>Diagnosis</th><th>Drug</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM Patients ORDER BY id_number DESC");
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>".$row['first_name']."</td>
                            <td>".$row['last_name']."</td>
                            <td>".$row['id_number']."</td>
                            <td>".$row['gender']."</td>
                            <td>".$row['diagnosis']."</td>
                            <td>".$row['drug']."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No patients found</td></tr>";
            }
            ?>
        </table>
    </section>
</div>
<footer>
    <p>Contact: +254 700 000 000 | Email: info@afyabora.com | P.O Box 123-00100</p>
    
     <div class="custom-marquee">
        <div class="marquee-content">
            Quick Recovery
        </div>
    </div>
</footer>

</body>
</html>