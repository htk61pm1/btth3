<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thư Viện Sách</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container">
            <h3 class="text-center text uppercase text-success my-3">Thư Viện Sách</h3>
            <div class="text-right" style="position: absolute; top: 0; right: 0;">
            <a href="<?= DOMAIN.'/app/views/function/add.php'; ?>" class="btn btn-success"> Thêm Sách Mới</a>
            <a href="<?= DOMAIN.'/public/?controller=author&action=index'; ?>" class="btn btn-success"> Tác Giả</a>
            </div>
            <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên Sách</th>
        <th scope="col">Năm Xuất Bản</th>
        <th scope="col">ID Tác Giả</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($books as $book){
        ?>
                <tr>
                    <th scope="row"><?= $book->getId(); ?></th>
                    <td><?= $book->gettenSach(); ?></td>
                    <td><?= $book->getnamXuatBan(); ?></td>
                    <td><?= $book->getidTacGia(); ?></td>
                    <td>
                        <a href="<?= DOMAIN.'app/views/function/edit.php?id='.$book->getId(); ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="<?= DOMAIN.'app/views/function/remove.php?id='.$book->getId(); ?>"><i class="bi bi-trash3"></i></a>
                        <a href="<?= DOMAIN.'app/views/function/detail.php?id='.$book->getId(); ?>"><i class ="bi bi-eye"></i></a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>