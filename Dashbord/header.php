<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hublu Note</title>
    <!-- list css -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary text-white"  data-bs-theme="dark">
        <div class="container-fluid">
                    <!--ID Logo or name-->
                    <div class="Name">
                        <a class="navbar-brand" href="index.php">Welcome:</a>
                        <img src="../assets/images/user-circle-icon.png" alt="" width="40"> Mr. Jon
                    </div>
        
                    <!--Time-->
                    <h1 id = "current-time"> </h1>               

                    <script>
                    let time = document.getElementById("current-time");
                    setInterval(() => {
                        let d = new Date();
                        time.innerHTML = d.toLocaleTimeString();
                    }, 1000);
                    </script>
            </div>
        </div>
    </nav>
