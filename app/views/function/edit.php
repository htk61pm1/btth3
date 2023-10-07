<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Sách</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Chỉnh Sửa Sách</h1>
    <form action="edit_book.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        <label for="tenSach">Tên Sách:</label>
        <input type="text" id="tenSach" name="tenSach" value="<?php echo $book['tenSach']; ?>" required>
        <label for="namXuatBan">Năm Xuất Bản:</label>
        <input type="number" id="namXuatBan" name="namXuatBan" value="<?php echo $book['namXuatBan']; ?>">
        <label for="idTacGia">Tác Giả:</label>
        <select id="idTacGia" name="idTacGia" required>
            <?php foreach ($authors as $author): ?>
                <option value="<?php echo $author['id']; ?>" <?php echo ($author['id'] == $book['idTacGia']) ? 'selected' : ''; ?>><?php echo $author['tenTacGia']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Lưu Thay Đổi">
    </form>
</body>
</html>
