<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Главная страница</title>
</head>
<body class="h-100 d-flex mt-4">
<div class="container col-lg-5 d-flex flex-column">
    <h4 class="text-center">Task list</h4>
    <div class="mt-3">
        <form method="post" action="controllers/taskAdditionController.php" class="d-flex justify-content-between">
            <div class="col-lg-8">
                <input name="task" type="text" placeholder="Enter text..." class="form-control col-lg-3 p-2">
            </div>
            <button type="submit" class="btn btn-dark mx-2">Add Task</button>
        </form>
        <div class="d-flex mt-2">
            <form method="post" action="controllers/taskRemovalController.php">
                <button class="btn btn-danger" name="cookie">Remove All</button>
            </form>
            <form method="post" action="controllers/taskReadinessController.php">
                <button class="btn btn-success mx-3">Ready All</button>
            </form>
        </div>
    </div>
    <div>
        <?php
        if ($_COOKIE !== null) {
            foreach ($_COOKIE as $key => $value) {
                ?>
                <div class="d-flex justify-content-between border-top border-secondary-subtle p-2 mt-2">
                    <div>
                        <p class="fs-3"><?= $key ?></p>
                        <div class="d-flex">
                            <form method="post" action="controllers/taskReadinessController.php">
                                <button class="btn border border-secondary" name="cookie" value="<?= $key ?>">
                                    <?php
                                    if ($value === 'false') {
                                        printf('Ready');
                                    } else {
                                        printf('Unready');
                                    }
                                    ?>
                                </button>
                            </form>
                            <form method="post" action="controllers/taskRemovalController.php" class="mx-2">
                                <button class="btn border border-secondary" name="cookie" value="<?= $key ?>">Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <?php
                        if ($value === 'false') {
                            printf('<button class="btn border border-danger border-4 rounded-circle p-5"></button>');
                        } else {
                            printf('<button class="btn border border-success border-4  rounded-circle p-5"></button>');
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
</body>
</html>