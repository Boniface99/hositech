<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outpatient Department - Healthcare System</title>
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
            <h1>Ambulatory care Department</h1>
            <p>Providing quality care without hospital admission</p>
        </div>

        <!-- Stats Section -->
        <div class="stats-container">
            <div class="stat-card">
                <h4>Today's Patients</h4>
                <div class="number">45</div>
            </div>
            <div class="stat-card">
                <h4>Available Doctors</h4>
                <div class="number">12</div>
            </div>
            <div class="stat-card">
                <h4>Avg Wait Time</h4>
                <div class="number">25 min</div>
            </div>
            <div class="stat-card">
                <h4>Completed Today</h4>
                <div class="number">38</div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="cards-grid">
            <div class="card">
                <h3>General Consultation</h3>
                <p>Book an appointment with our general physicians for routine checkups and common ailments.</p>
                <a href="#" class="btn">Book Appointment</a>
            </div>
            <div class="card">
                <h3>Specialist Clinic</h3>
                <p>Consult with specialists in cardiology, dermatology, orthopedics, and more.</p>
                <a href="#" class="btn">View Specialists</a>
            </div>
            <div class="card">
                <h3>Emergency Care</h3>
                <p>24/7 emergency services for urgent medical needs.</p>
                <a href="#" class="btn btn-warning">Emergency</a>
            </div>
        </div>

        <!-- Appointment Form -->
        <div class="form-container">
            <h2>Book an Appointment</h2>
            <form action="process_appointment.php" method="POST">
                <div class="form-group">
                    <label for="patient_name">Patient Name</label>
                    <input type="text" id="patient_name" name="patient_name" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="doctor">Select Doctor</label>
                    <select id="doctor" name="doctor" required>
                        <option value="">Choose a doctor</option>
                        <option value="dr_smith">Dr. Smith - General Physician</option>
                        <option value="dr_jones">Dr. Jones - Cardiologist</option>
                        <option value="dr_wilson">Dr. Wilson - Dermatologist</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Preferred Date</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Preferred Time</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <div class="form-group">
                    <label for="symptoms">Symptoms/Reason</label>
                    <textarea id="symptoms" name="symptoms" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Book Appointment</button>
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