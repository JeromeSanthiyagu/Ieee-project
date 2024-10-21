<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Journal</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        .main {
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Align to the top */
            align-items: center;
            min-height: 100vh; /* Ensure full height */
            /* padding: 20px; */
            box-sizing: border-box; /* Include padding in height calculations */
        }

        .title-container {
            background-color: rgba(150, 150, 150, 0.7);
            width: 100%;
            display: flex; /* Flexbox for horizontal alignment */
            justify-content: space-between; /* Space between title and profile icon */
            align-items: center; /* Vertically center items */
            padding: 20px 30px;
            border-radius: 10px;
            margin-bottom: 30px; /* Space below the title */
        }

        .title-container > h1 {
            font-size: 50px; /* Adjusted size for smaller screens */
            color: rgb(50, 50, 50);
            text-shadow: 2px 2px rgb(200, 200, 200);
        }

        .profile-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: rgba(100, 100, 100, 0.6);
            border-radius: 50%; /* Makes the icon circular */
            cursor: pointer;
        }

        .profile-icon img {
            width: 40px;
            height: 40px;
        }

        .travel-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgba(150, 150, 150, 0.7);
            width: 100%;
            max-width: 800px; /* Set a maximum width for better layout */
            margin: 50px 0; /* Margin for spacing */
            padding: 30px;
            border-radius: 10px;
        }

        .option-header {
            font-size: 30px; /* Adjusted size */
            color: rgb(50, 50, 50);
            text-shadow: 2px 2px rgb(200, 200, 200);
            margin-bottom: 20px; /* Spacing */
        }

        .option-container {
            display: flex;
            flex-direction: column; /* Stack options vertically */
            align-items: center;
            width: 100%;
        }

        .option-container div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            padding: 30px;
            background-color: rgba(100, 100, 100, 0.6);
            margin: 10px 0; /* Spacing between options */
            width: 100%; /* Make full width */
            max-width: 400px; /* Limit the width */
            transition: background-color 0.3s;
        }

        .option-container div:hover {
            background-color: rgba(20, 20, 20, 0.6);
        }

        .option-container img {
            width: 100px; /* Adjusted for better fit */
            height: auto; /* Maintain aspect ratio */
        }

        .option-container h2 {
            font-size: 24px; /* Adjusted size */
            color: rgb(50, 50, 50);
            text-shadow: 2px 2px rgb(200, 200, 200);
            margin-top: 10px; /* Spacing */
        }

        footer {
            margin-top: auto; /* Push footer to bottom */
            background-color: rgba(150, 150, 150, 0.7);
            text-align: center;
            padding: 10px;
            width: 100%;
            position: relative; /* Make sure it stays at the bottom */
        }

        footer p {
            color: rgb(50, 50, 50);
            font-size: 14px;
            margin: 0; /* Reset margin */
        }

    </style>
</head>
<body>

<div class="main">
    <div class="title-container">
        <h1>Travel Journal</h1>

        <!-- Profile Icon -->
        <div class="profile-icon" onclick="redirectToProfile()">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Profile">
        </div>
    </div>

    <div class="travel-container">
        <h1 class="option-header">What would you like to do?</h1>

        <div class="option-container">
            <div class="write-journal-container" onclick="redirectTo('write-journal.php')">
                <img src="https://cdn-icons-png.flaticon.com/512/3131/3131607.png" alt="">
                <h2>Write Journal</h2>
            </div>

            <div class="read-journal-container" onclick="redirectTo('read-journal.php')">
                <img src="https://cdn-icons-png.flaticon.com/512/4072/4072307.png" alt="">
                <h2>Read Journal</h2>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Travel Journal. All rights reserved.</p>
    </footer>
</div>

<script>
    function redirectTo(page) {
        window.location.href = page;
    }

    function redirectToProfile() {
        // Redirect to the profile page
        window.location.href = 'profile.php';
    }
</script>

</body>
</html>
