<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <title>Admin</title>
</head>

<body>
    <?php require_once 'process.php'; ?>
    <?php if (isset($_SESSION['message'])) : ?>

        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>

        </div>
    <?php endif ?>
    <div class="container-fluid">
        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'pw1') or die(mysqli_error($mysqli));
        $result = $mysqli->query("select * from post;") or die(mysqli_error($mysqli));
        ?>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Date</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php while ($row = $result->fetch_assoc()) : ?>

                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['content']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <a href="admin.php?edit=<?php echo $row['idPost']; ?>" class="btn btn-info">Edit</a>
                            <a href="process.php?delete=<?php echo $row['idPost']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php endwhile; ?>

            </table>
        </div>
        <?php
        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>
    </div>
    <div class="row justify-content-center">
        <form action="process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>Title </label>
                <br>
                <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label>Post </label>
                <br>
                <textarea name="content" cols="30" rows="10" value="<?php echo $content; ?>" class="form-control tinymce"></textarea>
                <!-- <input type="text" name="content" value="<?php echo $content; ?>" class="form-control tinymce" /> -->
            </div>
            <!-- <div class="form-group">
                <label>Date </label>
                <br>
                <input type="date" name="date" value="<?php echo $date; ?>" class="form-control"  />
            </div> -->
            <div class="form-group">
                <?php if ($update == true) : ?>
                    <button class="btn btn-info" type="submit" name="update">Update</button>
                <?php else : ?>
                    <button class="btn btn-primary" type="submit" name="save">Save</button>
                <?php endif; ?>
            </div>
        </form>
    </div>
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../plugin/tinymce/tinymce.min.js"></script>
    <script src="../plugin/tinymce/init-tinymce.js"></script>
</body>

</html>