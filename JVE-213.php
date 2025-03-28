<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Operations for Equipment</title>
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
            height: 100vh;
            background: #f0f2f5;
            text-align: center;
        }

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(BG.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

        h2, h3 {
            margin-bottom: 10px;
            color: #333;
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

        .back-btn {
            margin-top: 20px;
            background-color: #007bff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>JVE-213 COMLAB</h2>

    <!-- Dropdown to Select Equipment Type -->
    <label for="tableSelect">Select Equipment Type: </label>
    <select id="tableSelect" onchange="loadTableData()">
        <option value="aircon">Air Conditioners</option>
        <option value="electricFan">Electric Fans</option>
        <option value="White Board">White Board</option>
        
    </select>

    <h3>Records for <span id="selectedTable">Air Conditioners</span></h3>

    <table id="dataTable">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>CONDITION</th>
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
        window.onload = function() {
            loadTableData();
        };

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
        form.onsubmit = function(event) {
            event.preventDefault();
            const name = document.getElementById("name").value;
            const quantity = document.getElementById("quantity").value;

            if (name && quantity) {
                const selectedTable = document.getElementById("tableSelect").value;
                addRecord(name, quantity, selectedTable);
            }
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

        function editRecord(index, selectedTable) {
            const data = JSON.parse(localStorage.getItem(selectedTable)) || [];
            const record = data[index];
            document.getElementById("name").value = record.name;
            document.getElementById("quantity").value = record.quantity;

            const formButton = form.querySelector("button");
            formButton.textContent = "Update Record";

            form.onsubmit = function(event) {
                event.preventDefault();
                const updatedName = document.getElementById("name").value;
                const updatedQuantity = document.getElementById("quantity").value;

                if (updatedName && updatedQuantity) {
                    updateRecord(index, updatedName, updatedQuantity, selectedTable);
                }
            };
        }

        function updateRecord(index, name, quantity, selectedTable) {
            const data = JSON.parse(localStorage.getItem(selectedTable)) || [];
            data[index] = { name, quantity };
            localStorage.setItem(selectedTable, JSON.stringify(data));
            loadTableData();

            const formButton = form.querySelector("button");
            formButton.textContent = "Add Record";
            form.reset();
        }
    </script>
</body>
</html>
