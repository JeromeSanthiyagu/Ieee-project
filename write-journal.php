<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Journal</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

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
            overflow: hidden;
        }

        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .write-journal-container {
            background-color: rgba(250, 250, 250, 0.8);
            padding: 50px;
            border-radius: 20px;
        }
        
        .write-journal-container > h1 {
            font-size: 45px;
            color: rgb(50, 50, 50);
            text-shadow: 4px 4px rgb(200, 200, 200);
            text-align: center;
        }
    </style>

</head>
<body>

<div class="main">

    <div class="write-journal-container">
        <h1>Write your memorable travel.</h1>
        <form action="./endpoint/add-journal.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group col-md-6">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location">
                </div>
            </div>
            <div class="form-group">
                <label for="moments">Share your moments:</label>
                <textarea class="form-control"  name="moments" id="moments" cols="30" rows="10"></textarea>
            </div>

            <button type="button" class="btn btn-secondary" onclick="redirectTo('index.php')">Back to Home</button>

            <button type="submit" class="btn btn-primary float-right">Save journal</button>
        </form>

    </div>

</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script>
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>

</body>
</html>