<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
<form action="/insert.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="username" name="userName">
    <label>Upload a Image</label>
    <input type="file" name="profilePhoto">
    <button type="submit" name="upload">upload</button>
</form>
<table>
    <th>
        username
    </th>
    <th>image</th>
    <?php foreach ($fetchingData as $key ): ?>
    <tr>
        <td>
        <?php echo $key["username"]; ?></tr></td>
       <tr><td><img src="<?php echo $key["image"]; ?>"></td> </tr>
    <?php endforeach; ?>
</table>

</form>
</body>
</html>