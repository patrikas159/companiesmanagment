<?php require("view/_partials/head.view.php");?>

<div class="container">
    <h1 class="text-center mt-3">Imones informacija</h1>
    <div class="company-info-box p-4 d-flex flex-column justify-content-between"">
    <div>
        <p>Imones pavadinimas: <span class="font-weight-bold"><?= ucfirst(strtolower($_SESSION['data'][0]['company_name'])) ?></span></p>
        <p>Imones kodas: <span class="font-weight-bold"><?= $_SESSION['data'][0]['code'] ?></span></p>
        <p>Imones pvm kodas: <span class="font-weight-bold">LT-<?= $_SESSION['data'][0]['vat_code'] ?></span></p>
        <p>imones adresas: <span class="font-weight-bold"><?= $_SESSION['data'][0]['address'] ?></span></p>
        <p>Imones telefonas: <span class="font-weight-bold"><?= $_SESSION['data'][0]['phone'] ?></span></p>
        <p>Imones el. pastas: <span class="font-weight-bold"><?= $_SESSION['data'][0]['email'] ?></span></p>
        <p>Imones veikla: <span class="font-weight-bold"><?= ucfirst(strtolower($_SESSION['data'][0]['activities'])) ?></span></p>
        <p>Imones vadovas: <span class="font-weight-bold"><?= ucwords($_SESSION['data'][0]['manager']) ?></span></p>
    </div>
        <div>
            <a class="btn btn-success" href="/company/update-company/<?= $_SESSION['data'][0]['id'] ?>">Atnaujinti</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                Delete
            </button>
            <a class="btn btn-warning" href="/company/companies/">Grizti i sarasa</a>
        </div>

        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Patvirtinimas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Ar tikrai norite istrinti imone?
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-danger" href="/company/delete-company/<?= $_SESSION['data'][0]['id'] ?>">Taip</a>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-warning ">Ne</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("view/_partials/footer.view.php");?>

