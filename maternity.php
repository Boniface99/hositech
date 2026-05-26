<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maternity Department - Healthcare System</title>
    <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- Navigation -->
     
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

    <!-- Main Content -->
    <div class="container">
        <div class="dept-header">
            <h1>Maternity Department</h1>
            <p>Caring for mothers and newborns</p>
        </div>

        <!-- Stats Section -->
        <div class="stats-container">
            <div class="stat-card">
                <h4>Antenatal Patients</h4>
                <div class="number">34</div>
            </div>
            <div class="stat-card">
                <h4>Postnatal Patients</h4>
                <div class="number">18</div>
            </div>
            <div class="stat-card">
                <h4>Newborns</h4>
                <div class="number">12</div>
            </div>
            <div class="stat-card">
                <h4>Deliveries Today</h4>
                <div class="number">4</div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="cards-grid">
            <div class="card">
                <h3>Antenatal Care</h3>
                <p>Regular checkups and monitoring during pregnancy.</p>
                <a href="#" class="btn">Book Appointment</a>
            </div>
            <div class="card">
                <h3>Delivery Services</h3>
                <p>Safe delivery with experienced obstetricians.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="card">
                <h3>Postnatal Care</h3>
                <p>Care for mother and baby after delivery.</p>
                <a href="#" class="btn">View Services</a>
            </div>
        </div>

        <!-- Antenatal Registration Form -->
        <div class="form-container">
            <h2>Antenatal Registration</h2>
            <form action="process_antenatal.php" method="POST">
                <div class="form-group">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" id="mother_name" name="mother_name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="edd">Expected Delivery Date</label>
                    <input type="date" id="edd" name="edd" required>
                </div>
                <div class="form-group">
                    <label for="blood_group">Blood Group</label>
                    <select id="blood_group" name="blood_group" required>
                        <option value="">Select</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="doctor">Assigned Doctor</label>
                    <select id="doctor" name="doctor" required>
                        <option value="">Select Doctor</option>
                        <option value="dr_anderson">Dr. Anderson</option>
                        <option value="dr_martinez">Dr. Martinez</option>
                        <option value="dr_thompson">Dr. Thompson</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
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