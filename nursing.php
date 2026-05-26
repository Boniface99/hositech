<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursing Department - Healthcare System</title>
    <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="index.css">
</head>

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
            <h1>Medication Department</h1>
            <p>Dedicated nursing care for all patients</p>
        </div>

        <!-- Stats Section -->
        <div class="stats-container">
            <div class="stat-card">
                <h4>Nurses on Duty</h4>
                <div class="number">24</div>
            </div>
            <div class="stat-card">
                <h4>Patients Assigned</h4>
                <div class="number">87</div>
            </div>
            <div class="stat-card">
                <h4>Morning Shift</h4>
                <div class="number">12</div>
            </div>
            <div class="stat-card">
                <h4>Night Shift</h4>
                <div class="number">8</div>
            </div>
        </div>

        <!-- Nursing Services -->
        <div class="cards-grid">
            <div class="card">
                <h3>Patient Care</h3>
                <p>Round-the-clock patient monitoring and care.</p>
                <a href="#" class="btn">View Patients</a>
            </div>
            <div class="card">
                <h3>Vital Signs</h3>
                <p>Record and monitor patient vital signs.</p>
                <a href="#" class="btn">Record Vitals</a>
            </div>
            <div class="card">
                <h3>Medication Administration</h3>
                <p>Schedule and administer medications.</p>
                <a href="#" class="btn">View Schedule</a>
            </div>
        </div>

        <!-- Record Vital Signs Form -->
        <div class="form-container">
            <h2>Record Vital Signs</h2>
            <form action="process_vitals.php" method="POST">
                <div class="form-group">
                    <label for="patient_id">Patient ID</label>
                    <input type="text" id="patient_id" name="patient_id" required>
                </div>
                <div class="form-group">
                    <label for="patient_name">Patient Name</label>
                    <input type="text" id="patient_name" name="patient_name" required>
                </div>
                <div class="form-group">
                    <label for="temperature">Temperature (°C)</label>
                    <input type="number" step="0.1" id="temperature" name="temperature" required>
                </div>
                <div class="form-group">
                    <label for="blood_pressure">Blood Pressure (mmHg)</label>
                    <input type="text" id="blood_pressure" name="blood_pressure" placeholder="120/80" required>
                </div>
                <div class="form-group">
                    <label for="heart_rate">Heart Rate (bpm)</label>
                    <input type="number" id="heart_rate" name="heart_rate" required>
                </div>
                <div class="form-group">
                    <label for="respiratory_rate">Respiratory Rate</label>
                    <input type="number" id="respiratory_rate" name="respiratory_rate" required>
                </div>
                <div class="form-group">
                    <label for="oxygen_saturation">Oxygen Saturation (%)</label>
                    <input type="number" id="oxygen_saturation" name="oxygen_saturation" required>
                </div>
                <div class="form-group">
                    <label for="notes">Additional Notes</label>
                    <textarea id="notes" name="notes" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save Vitals</button>
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