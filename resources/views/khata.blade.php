<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khatabook Dashboard</title>
    <!--         <link rel="stylesheet" href="{{asset('css/home1.css')}}">
 -->
    <link rel="stylesheet" href="{{asset('css/kstyle.css')}}">
</head>
<body>

    <div class="sidebar">
        <div class="profile">
            <div class="profile-pic">S</div>
            <div class="profile-info">
                <h3>Self</h3>
                <p>📞 9328431157</p>
                <span class="status">🟢 Online</span>
            </div>
        </div>
        
        <nav>
            <h4>LEDGER MANAGEMENT</h4>
            <ul>
                <li class="active">📋 Customers</li>
                <li>📦 Suppliers</li>
                <li>💰 Expenses</li>
                <li>💼 Cashbook</li>
                <li>👨‍💼 Staff</li>
                <li>📊 Reports - Parties</li>
                <li>⚙️ Settings</li>
            </ul>

            <h4>BILLS AND INVENTORY</h4>
            <ul>
                <li>📈 Sales 🚨</li>
                <li>📉 Purchase 🚨</li>
                <li>📜 Delivery Challan 🚨</li>
                <li>📝 Proforma Invoice 🚨</li>
                <li>📄 Quotation/Estimate 🚨</li>
                <li>📦 Items</li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
        <header>
            <h2>Customers <span class="badge">7</span></h2>
            <h2>Suppliers <span class="badge gray">0</span></h2>
            <button class="report-btn">📊 View Report</button>
        </header>

        <div class="summary">
            <p>You'll Give: <strong>₹0</strong></p>
            <p>You'll Get: <strong class="danger">₹3,006 ⬇</strong></p>
        </div>

        <div class="search-filter">
            <input type="text" placeholder="Search for customers...">
            <select>
                <option>Filter By</option>
            </select>
            <select>
                <option>Sort By</option>
            </select>
        </div>

        <div class="customer-list">
            <div class="customer">
                <span class="avatar">A</span>
                <div class="customer-info">
                    <p>Agarwal</p>
                    <small>a month ago</small>
                </div>
                <p class="amount">₹0.0</p>
            </div>

            <div class="customer">
                <span class="avatar green">M</span>
                <div class="customer-info">
                    <p>Mumma ❤️</p>
                    <small>2 months ago</small>
                </div>
                <p class="amount">₹0.0</p>
            </div>

            <div class="customer">
                <span class="avatar blue">P</span>
                <div class="customer-info">
                    <p>Paaa</p>
                    <small>2 months ago</small>
                </div>
                <p class="amount highlight">₹2,509</p>
            </div>

            <div class="customer">
                <span class="avatar orange">V</span>
                <div class="customer-info">
                    <p>Vinod Chahcu</p>
                    <small>a year ago</small>
                </div>
                <p class="amount highlight">₹200</p>
            </div>

            <div class="customer">
                <span class="avatar gray">A</span>
                <div class="customer-info">
                    <p>Adi</p>
                    <small>a year ago</small>
                </div>
                <p class="amount highlight">₹87</p>
            </div>
        </div>

        <div class="actions">
            <button class="bulk-btn">📥 Bulk Upload Customers</button>
            <button class="add-btn">➕ Add Customer</button>
        </div>
    </div>

</body>
</html>