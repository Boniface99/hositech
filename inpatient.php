<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afya Bora Hospital</title>
    <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="index.css">
</head>
<style>
    footer {
    background: #2c3e50;
    color: white;
    text-align: center;
    padding: 30px 0 0 0; /* Space at top, none at bottom for marquee */
    margin-top: 50px;
    width: 100%;
}

.custom-marquee {
    width: 100%;
    background: #fdf2f2; /* Light contrast background */
    color: #e74c3c;      /* Bright red text */
    padding: 12px 0;
    font-weight: bold;
    overflow: hidden;    /* Hides text that goes off-screen */
    position: relative;
    border-top: 2px solid #fadbd8;
}

.marquee-content {
    display: inline-block;
    white-space: nowrap;
    animation: scrollText 15s linear infinite;
    font-size: 1.1rem;
}

@keyframes scrollText {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}
</style>
<body>

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
                <li><a href="outpatient.php">Ambulatory care</a></li>
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
            <h1>Victims Department</h1>
            <p>Comprehensive care for admitted patients</p>
        </div>

        <!-- Stats Section -->
        <div class="stats-container">
            <div class="stat-card">
                <h4>Total Patients</h4>
                <div class="number">87</div>
            </div>
            <div class="stat-card">
                <h4>Available Beds</h4>
                <div class="number">23</div>
            </div>
            <div class="stat-card">
                <h4>ICU Patients</h4>
                <div class="number">12</div>
            </div>
            <div class="stat-card">
                <h4>Discharged Today</h4>
                <div class="number">8</div>
            </div>
        </div>

        <!-- Ward Information -->
        <div class="cards-grid">
            <div class="card">
                <h3>General Ward</h3>
                <p>Comfortable shared accommodation with 24/7 nursing care.</p>
                <p><strong>Available Beds:</strong> 15</p>
                <a href="#" class="btn">View Details</a>
            </div>
            <div class="card">
                <h3>Private Rooms</h3>
                <p>Private accommodation with attached bathroom and TV.</p>
                <p><strong>Available Rooms:</strong> 5</p>
                <a href="#" class="btn">Book Room</a>
            </div>
            <div class="card">
                <h3>ICU</h3>
                <p>Intensive Care Unit with specialized monitoring equipment.</p>
                <p><strong>Available Beds:</strong> 3</p>
                <a href="#" class="btn btn-warning">ICU Details</a>
            </div>
        </div>

        <!-- Admit Patient Form -->
        <div class="form-container">
            <h2>Admit New Patient</h2>
            <form action="process_admission.php" method="POST">
                <div class="form-group">
                    <label for="patient_name">Patient Name</label>
                    <input type="text" id="patient_name" name="patient_name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ward_type">Ward Type</label>
                    <select id="ward_type" name="ward_type" required>
                        <option value="">Select Ward</option>
                        <option value="general">General Ward</option>
                        <option value="private">Private Room</option>
                        <option value="icu">ICU</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="admission_date">Admission Date</label>
                    <input type="date" id="admission_date" name="admission_date" required>
                </div>
                <div class="form-group">
                    <label for="diagnosis">Diagnosis</label>
                    <textarea id="diagnosis" name="diagnosis" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="doctor">Attending Doctor</label>
                    <select id="doctor" name="doctor" required>
                        <option value="">Select Doctor</option>
                        <option value="dr_brown">Dr. Brown</option>
                        <option value="dr_davis">Dr. Davis</option>
                        <option value="dr_miller">Dr. Miller</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Admit Patient</button>
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