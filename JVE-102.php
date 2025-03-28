<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Operations for Equipment - Page 2</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background:rgb(89, 90, 90);
            text-align: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        h2, h3 {
            margin-top: 30px;
            margin-bottom: 20px;
            color: white;
        }

        select {
            margin-bottom: 15px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .edit-btn {
            background-color: #ffc107;
            color: black;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            gap: 10px;
        }

        input {
            padding: 10px;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 15px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        /* Back button styling */
.back-btn {
    display: block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #6a85fd;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    width: fit-content;
    
    margin-bottom: 20px;
}

.back-btn:hover {
    background-color:  #0056b3;
}

    </style>
</head>
<body>
    <h2>Equipment Records - Page 2</h2>
    <label for="tableSelect">Select Equipment Type: </label>
    <select id="tableSelect" onchange="changeTable()">
        <option value="aircon102">Aircon</option>
        <option value="cabinet-counter102">Cabinet Counter</option>
        <option value="Cabinet-Steel102">Cabinet Steel</option>
        <option value="Chair-O-W-L-B-T102">w/ Glass and color Gray Compartment</option>
        <option value="Drawer102">Drawer</option>
        <option value="Chair, Office W/ Wheel Low Back Type2102">Chair, Office W/ Wheel Low Back Type2</option>
        <option value="Chair, Office Type III102">Chair, Office Type III</option>
        <option value="Stool Round wooden102">Stool Round wooden</option>
        <option value="Fire Extinguishers102">Fire Extinguishers</option>
        <option value="Table Technician102">Table Technician</option>
        <option value="Table102">Table</option>
    </select>

    <h3>Records for <span id="selectedTable"></span></h3>
    <table id="dataTable">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <h3>Add/Edit Record</h3>
    <form id="recordForm">
        <input type="text" id="name" placeholder="Item Name" required>
        <input type="text" id="quantity" placeholder="Quantity" required>
        <button type="submit">Add Record</button>
    </form>
    <a href="room.php" class="back-btn">Back</a>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const savedTable = localStorage.getItem("selectedTable2") || "aircon102";
            document.getElementById("tableSelect").value = savedTable;
            loadTableData();
        });

        function changeTable() {
            const selectedTable = document.getElementById("tableSelect").value;
            localStorage.setItem("selectedTable2", selectedTable);
            loadTableData();
        }

        function loadTableData() {
            const selectedTable = document.getElementById("tableSelect").value;
            document.getElementById("selectedTable").textContent = capitalizeFirstLetter(selectedTable);
            const data = JSON.parse(localStorage.getItem(selectedTable)) || [];
            const tableBody = document.querySelector("#dataTable tbody");
            tableBody.innerHTML = '';

            data.forEach((record, index) => {
                const row = tableBody.insertRow();
                row.innerHTML = `
                    <td>${record.name}</td>
                    <td>${record.quantity}</td>
                    <td>
                        <button class="btn edit-btn" onclick="editRecord(${index}, '${selectedTable}')">Edit</button>
                        <button class="btn delete-btn" onclick="deleteRecord(${index}, '${selectedTable}')">Delete</button>
                    </td>
                `;
            });
        }

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        const form = document.getElementById("recordForm");
        form.onsubmit = function (event) {
            event.preventDefault();
            const name = document.getElementById("name").value;
            const quantity = document.getElementById("quantity").value;
            const selectedTable = document.getElementById("tableSelect").value;
            addRecord(name, quantity, selectedTable);
        };

        function addRecord(name, quantity, selectedTable) {
            const data = JSON.parse(localStorage.getItem(selectedTable)) || [];
            data.push({ name, quantity });
            localStorage.setItem(selectedTable, JSON.stringify(data));
            loadTableData();
            form.reset();
        }

        function deleteRecord(index, selectedTable) {
            const data = JSON.parse(localStorage.getItem(selectedTable)) || [];
            data.splice(index, 1);
            localStorage.setItem(selectedTable, JSON.stringify(data));
            loadTableData();
        }
    </script>
</body>
</html>