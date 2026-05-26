<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy - Healthcare System</title>
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
            <h1>Pharmacy Department</h1>
            <p>Dispensing medications and pharmaceutical care</p>
        </div>

        <!-- Stats Section -->
        <div class="stats-container">
            <div class="stat-card">
                <h4>Prescriptions Today</h4>
                <div class="number">156</div>
            </div>
            <div class="stat-card">
                <h4>Medications in Stock</h4>
                <div class="number">1,245</div>
            </div>
            <div class="stat-card">
                <h4>Low Stock Items</h4>
                <div class="number">23</div>
            </div>
            <div class="stat-card">
                <h4>Pending Orders</h4>
                <div class="number">12</div>
            </div>
        </div>

        <!-- Pharmacy Services -->
        <div class="cards-grid">
            <div class="card">
                <h3>Prescription Filling</h3>
                <p>Fast and accurate prescription dispensing.</p>
                <a href="#" class="btn">Submit Prescription</a>
            </div>
            <div class="card">
                <h3>Medication Inquiry</h3>
                <p>Check medication availability and prices.</p>
                <a href="#" class="btn">Check Stock</a>
            </div>
            <div class="card">
                <h3>Refill Request</h3>
                <p>Request prescription refills online.</p>
                <a href="#" class="btn">Request Refill</a>
            </div>
        </div>

        <!-- Add Medication Form -->
        <div class="form-container">
            <h2>Add New Medication</h2>
            <form action="process_medication.php" method="POST">
                <div class="form-group">
                    <label for="med_name">Medication Name</label>
                    <input type="text" id="med_name" name="med_name" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" required>
                        <option value="">Select Category</option>
                        <option value="antibiotic">Antibiotic</option>
                        <option value="painkiller">Painkiller</option>
                        <option value="antihypertensive">Antihypertensive</option>
                        <option value="antidiabetic">Antidiabetic</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" required>
                </div>
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <select id="unit" name="unit" required>
                        <option value="tablets">Tablets</option>
                        <option value="capsules">Capsules</option>
                        <option value="ml">ml</option>
                        <option value="mg">mg</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price per Unit ($)</label>
                    <input type="number" step="0.01" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="expiry_date">Expiry Date</label>
                    <input type="date" id="expiry_date" name="expiry_date" required>
                </div>
                <button type="submit" class="btn btn-success">Add Medication</button>
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