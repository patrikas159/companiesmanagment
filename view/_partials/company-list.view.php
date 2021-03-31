<div class="row rounded text-center ">
    <div class="col-4 px-0 border border-dark">
        <div class="title-box">Imones pavadinimas</div>
    </div>
    <div class="col-4 px-0 border border-left-0 border-dark">
        <div class="title-box">Imones adresas</div>
    </div>
    <div class="col-4 px-0 border border-left-0 border-dark">
        <div class="title-box">Imones el. pastas</div>
    </div>
</div>
<?php foreach ($_SESSION['data'] as $company):?>
    <div class="row align-items-center border border-top-0">
        <div class="col-4 px-0 border-right">
            <div class="p-2"><a href="/company/info/<?=$company['id']?>"><?= strtoupper($company['company_name'])?></a></div>
        </div>
        <div class="col-4 px-0 border-right">
            <div class="p-2"><?=ucfirst(strtolower( $company['address']))?></div>
        </div>
        <div class="col-4 px-0">
            <div class="p-2"><?= $company['email']?></div>
        </div>
    </div>
<?php endforeach;?>
