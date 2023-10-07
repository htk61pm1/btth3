<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sách Mới</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Thêm Sách Mới</h1>
    <form action="add_book.php" method="POST">
        <label for="tenSach">Tên Sách:</label>
        <input type="text" id="tenSach" name="tenSach" required>
        <label for="namXuatBan">Năm Xuất Bản:</label>
        <input type="number" id="namXuatBan" name="namXuatBan">
        <label for="idTacGia">Tác Giả:</label>
        <select id="idTacGia" name="idTacGia" required>
            <?php foreach ($authors as $author): ?>
                <option value="<?php echo $author['id']; ?>"><?php echo $author['tenTacGia']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Thêm Sách">
    </form>
</body>
</html>
