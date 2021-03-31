<?php require("view/_partials/head.view.php");?>
<div class="container-lg mt-5 ">
    <h1 class="text-center">Imoniu sarasas</h1>
    <div class="text-center my-4">
        <a class=" btn btn-primary" href="/company/add-company">Prideti imone</a>
    </div>
    <?php require('view/_partials/company-list.view.php') ?>
    <nav aria-label="Page navigation example " class="mt-5">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/company/companies/1">Pirmas</a></li
                <?php for($i=1; $i<=$_SESSION['totalPg']; $i++) :?>
                    <li class="page-item ">
                        <a class="page-link <?= $i==$_SESSION['pg'] ||$_SESSION['pg']==0&&$i==1?'actives':'' ?>" href="/company/companies/<?=$i?>"><?=$i?></a>
                    </li>
                <?php endfor;?>
            <li class="page-item"><a class="page-link" href="/company/companies/<?=$_SESSION['totalPg']?>">Paskutinis</a></li>
        </ul>
    </nav>
</div>
<?php require("view/_partials/footer.view.php");?>
