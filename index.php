<?php
include "db.php";
include "function.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex - by Jarno</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img src="img/weedle.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Weedle</h5>
                    <p class="card-text">his name is weedle, he is bug poison type and also considered the hairy bug pokemon. Often found in forests eating leaves, with a poisonous stinger of around 2 inches on his head.</p>
                    <div class="mb-2">
                        <input type="text" class="form-control mb-2" id="formGroupExampleInput " placeholder="Message...">
                        <button type="button" class="btn btn-primary w-100 mb-2" id="liveAlertBtn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                            </svg> Leave a message!</button>
                        <div id="liveAlertPlaceholder"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
