<div class="container-fluid card">
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <?= $this->session->flashdata('msg') ?>
    <h5>Role:<?= $role['role'] ?></h5>
    <div class="row">
        <div class="col-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Akses</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($menu as $m) { ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $m['menu'] ?></td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']) ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>