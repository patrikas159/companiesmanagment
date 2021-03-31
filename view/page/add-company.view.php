<?php require("view/_partials/head.view.php"); ?>

    <div class="container">
        <h2 class="text-center my-4">Prideti imone</h2>
        <form method="post">
            <div class="form-group row">
                <label for="staticName" class="col-sm-4 col-form-label">Imones pavadinimas</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticName"  type="text" name="name" placeholder="Iveskite imones pavadinima">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['name'];?></p>
                <?php endif;?>
            </div>
            <div class="form-group row">
                <label for="staticCode" class="col-sm-4 col-form-label">Imones kodas</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticCode" type="text" name="code" placeholder="Iveskite imones koda">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['code'];?></p>
                <?php endif;?>
            </div>
            <div class="form-group row">
                <label for="staticVat" class="col-sm-4 col-form-label">Imones pvm kodas</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticVat"  type="text" name="vatCode" placeholder="Iveskite imones pvm koda">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['vatCode'];?></p>
                <?php endif;?>
            </div>
            <div class="form-group row">
                <label for="staticAddress" class="col-sm-4 col-form-label">Imones adresas</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticAddress" type="text"  name="address" placeholder="Iveskite imones adresa">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['address'];?></p>
                <?php endif;?>
            </div>
            <div class="form-group row">
                <label for="staticPhone" class="col-sm-4 col-form-label">Imones tel. numeris</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticPhone" type="text" name="phone" placeholder="Iveskite imones tel. numeri">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['phone'];?></p>
                <?php endif;?>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Imones el. pastas</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticEmail" type="text" name="email" placeholder="Iveskite imones el. pasta">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['email'];?></p>
                <?php endif;?>
            </div>
            <div class="form-group row">
                <label for="staticActivity" class="col-sm-4 col-form-label">Imones veikla</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticActivity" type="text" name="activities" placeholder="Iveskite imones veikla">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['activities'];?></p>
                <?php endif;?>
            </div>
            <div class="form-group row">
                <label for="staticManager" class="col-sm-4 col-form-label">Imones vadovas</label>
                <div class="col-sm-8">
                    <input class="form-control" id="staticManager" type="text" name="manager" placeholder="Iveskite imones vadova">
                </div>
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="warning col-12 text-right"><?= $_SESSION['error']['manager'];?></p>
                <?php endif;?>
            </div>
            <button class="btn btn-primary" type="submit" name="send">Prideti imone</button>
            <a class="btn btn-warning" href="companies">Atsaukti</a>
        </form>
    </div>

<?php require("view/_partials/footer.view.php");?>