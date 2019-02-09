<?php
$title = "Form";
?>
<!doctype html>
<html lang="en">
<?php
include_once 'head.php';
?>
<body class="bg-light">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form action="form.php" method="post">
                        <div class="form-group">
                            <label for="search">Search</label>
                            <input name="search" id="search" type="text" class="form-control">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($_GET["search"]) && trim($_GET["search"]) != ""): ?>
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <h3 class="text-center">You've searched for <?= $_GET["search"] ?></h3>
        </div>
    </div>
    <?php endif; ?>
</div>
</body>
</html>
