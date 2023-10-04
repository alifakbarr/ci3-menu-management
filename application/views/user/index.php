<!-- Begin Page Content -->
<div class="container-fluid card">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Data Diri
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $user['name'] ?></li>
            <li class="list-group-item"><?= $user['email'] ?></li>
            <li class="list-group-item"><?= date('d M Y : H:m:s', $user['date_created']) ?></li>
        </ul>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->