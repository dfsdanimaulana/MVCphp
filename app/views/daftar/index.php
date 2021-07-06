<div class="container">
    <h3>Daftar Nama : </h3>
    <div class="row my-3">
        <div class="col">
            <ul class="list-group">
                <?php foreach ($data['list_db'] as $list) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $list['nama'] ?>
                        <a href="#" class="badge bg-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-3">Daftar Nama</h3>
            <?php foreach ($data['list'] as $list) : ?>
                <ul>
                    <li>Nama : <?= $list['nama'] ?></li>
                    <li>Umur : <?= $list['umur'] ?></li>
                    <li>Email : <?= $list['email'] ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="m-3">Daftar Nama Dari Data Base</h3>
            <?php foreach ($data['list_db'] as $list) : ?>
                <ul>
                    <li>Nama : <?= $list['nama'] ?></li>
                    <li>Umur : <?= $list['umur'] ?></li>
                    <li>Email : <?= $list['email'] ?></li>
                </ul>
            <?php endforeach; ?>

        </div>
    </div>
</div>