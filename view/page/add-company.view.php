<?php require("view/_partials/head.view.php"); ?>

    <section>
        <h2 class="text-center my-4">Add company</h2>
        <form method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Enter company name">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['name'];?></span>
                <?php endif;?>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="code" placeholder="Enter company code">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['code'];?></span>
                <?php endif;?>
            </div>
            <div class="form-group">
                <small>*LT-</small>
                <input class="form-control" type="text" name="vatCode" placeholder="Enter company vat code">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['vatCode'];?></span>
                <?php endif;?>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="address" placeholder="Enter company address">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['address'];?></span>
                <?php endif;?>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="phone" placeholder="Enter company phone">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['phone'];?></span>
                <?php endif;?>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Enter company email">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['email'];?></span>
                <?php endif;?>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="activities" placeholder="Enter company activity">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['activities'];?></span>
                <?php endif;?>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="manager" placeholder="Enter manager full name">
                <?php if (isset($_SESSION['error'])): ?>
                    <span class="warning"><?= $_SESSION['error']['manager'];?></span>
                <?php endif;?>
            </div>
            <button class="btn btn-primary" type="submit" name="send">Add company</button>
            <a class="btn btn-warning" href="companies">Cancel</a>
        </form>
    </section>

<?php require("view/_partials/footer.view.php");?>