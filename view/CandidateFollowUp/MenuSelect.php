<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Candidate followup select menu</title>
</head>

<body>
    <div>
        <?php
        require_once '../../Component/Navbar.php';
        ?>
    </div>

    <h5 class="text-center pt-5">You have no application yet</h5>
    <div class="container d-flex justify-content-center" style="padding-top: 5rem;">

        <div class="d-flex justify-content-between" style="gap: 10rem;">
            <div class="text-center rounded" style="border: 5px solid #444DDA;padding: 5rem;cursor: pointer;">
                <h2>Apply</h2>
                <h1>INTERN</h1>
            </div>
            <div class="text-center rounded" style="border: 5px solid #444DDA;padding-top: 5rem;padding-right: 6rem;padding-left: 6rem;cursor: pointer;">
                <h2>Apply</h2>
                <h1>JOB</h1>
            </div>
        </div>
    </div>

</body>

</html>