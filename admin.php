<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Healthcare System</title>
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

    
    <div class="container">
        <div class="dept-header">
            <h1>Management Department</h1>
            <p>Managing hospital operations and resources</p>
        </div>

        <!-- Stats Section -->
        <div class="stats-container">
            <div class="stat-card">
                <h4>Total Staff</h4>
                <div class="number">245</div>
            </div>
            <div class="stat-card">
                <h4>Total Patients</h4>
                <div class="number">587</div>
            </div>
            <div class="stat-card">
                <h4>Monthly Revenue</h4>
                <div class="number">$1.2M</div>
            </div>
            <div class="stat-card">
                <h4>Bed Occupancy</h4>
                <div class="number">78%</div>
            </div>
        </div>

       
        <div class="cards-grid">
            <div class="card">
                <h3>Staff Management</h3>
                <p>Manage doctors, nurses, and administrative staff.</p>
                <a href="#" class="btn">Manage Staff</a>
            </div>
            <div class="card">
                <h3>Patient Records</h3>
                <p>Access and manage all patient records.</p>
                <a href="#" class="btn">View Records</a>
            </div>
            <div class="card">
                <h3>Billing & Insurance</h3>
                <p>Process payments and insurance claims.</p>
                <a href="#" class="btn">Manage Billing</a>
            </div>
            <div class="card">
                <h3>Reports</h3>
                <p>Generate hospital statistics and reports.</p>
                <a href="#" class="btn">View Reports</a>
            </div>
            <div class="card">
                <h3>Inventory</h3>
                <p>Manage hospital supplies and equipment.</p>
                <a href="#" class="btn">Manage Inventory</a>
            </div>
            <div class="card">
                <h3>Appointments</h3>
                <p>Oversee all department appointments.</p>
                <a href="#" class="btn">View Schedule</a>
            </div>
        </div>

        <!-- Staff Registration Form -->
        <div class="form-container">
            <h2>Register New Staff Member</h2>
            <form action="process_staff.php" method="POST">
                <div class="form-group">
                    <label for="staff_name">Full Name</label>
                    <input type="text" id="staff_name" name="staff_name" required>
                </div>
                <div class="form-group">
                    <label for="staff_id">Staff ID</label>
                    <input type="text" id="staff_id" name="staff_id" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select id="department" name="department" required>
                        <option value="">Select Department</option>
                        <option value="outpatient">Outpatient</option>
                        <option value="inpatient">Inpatient</option>
                        <option value="maternity">Maternity</option>
                        <option value="pharmacy">Pharmacy</option>
                        <option value="nursing">Nursing</option>
                        <option value="administration">Administration</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" id="position" name="position" required>
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" id="qualification" name="qualification" required>
                </div>
                <div class="form-group">
                    <label for="joining_date">Joining Date</label>
                    <input type="date" id="joining_date" name="joining_date" required>
                </div>
                <div class="form-group">
                    <label for="salary">Salary ($)</label>
                    <input type="number" id="salary" name="salary" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-success">Register Staff</button>
            </form>
        </div>

        <!-- Staff Directory Table -->
 

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