<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Schedule</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f8f8; /* Light background */
        }

        .container {
            width: 80%; /* Adjust as needed */
            max-width: 600px; /* Limit maximum width */
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: relative; /* For back button positioning */
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #e0f2f7; /* Light blue background for icon */
            margin-right: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-icon::before {
            content: "";
            width: 30px;
            height: 30px;
            background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"%3E%3Cpath d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22 0.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" fill="%2381d4fa"/%3E%3C/svg%3E'); /* Example placeholder icon */
            background-size: cover;
        }

        .professor-name {
            font-size: 1.5em;
            font-weight: 600;
        }

        .schedule-title {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333; /* Dark background for header */
            color: white;
        }

        .back-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: none;
            border: none;
            color: #03a9f4; /* Blue color for button */
            cursor: pointer;
            font-size: 1em;
        }
    </style>
</head>
<body>
        <div class="header">
            <div class="profile-icon"></div>
            <div class="professor-name">Name of prof</div>
        </div>
        <div class="schedule-title">class schedule:</div>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    
                </tr>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                        
                    </tr>
                
            </tbody>
        </table>
        <a href="professor.php" class="back-btn">Back</a>
</body>
</html>