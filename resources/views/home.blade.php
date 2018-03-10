<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/main.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                
                <h1>
                    Oops! {{ Auth::user()->name }}</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    For more, contact me!
                </div>
                <div class="error-actions">
                    <a class="logout" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
