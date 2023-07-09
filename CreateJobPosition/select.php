<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="select.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</head>
<body>
<div>
        <?php
        require_once '../Component/Navbar.php';
        ?>
    </div>

    <div class="container">
        <div class="text">
            <h1 class="mb-5">Finish create new position</h1>
            <div class="row">
                <div class="col-md-3 ps-5">
                    <a href="form.php" class="btn btn-outline-primary" style="color: #444DDA; border:1px solid #444DDA;">Create another position</a>
                </div>
                <div class="col-md-2" >
                    <a href="job.php" class="btn btn-primary" style="background-color: #444DDA; border:1px solid #444DDA;">Manage position</a>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>