<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кінотеатр</title>
</head>
<body>
    <h1>Кінотеатр</h1>
    <?php
    include('db-movies.php');
    include('db-actions.php');

    echo '<h3>Зараз у кіно:</h3>';
    if (isset($_POST["sort"])) {
        $how_to_sort = $_POST["sort"];
        sorting($how_to_sort);
    }
    array_walk($movies, "show");
    echo "<p><i>$str</i></p>";
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="sort">
    <label for="sort">Оберіть сортування: </label>
    <select name="sort">
            <option value="cmp_director">Режисер</option>
            <option value="cmp_year">Дата випуску</option>
            <option value="cmp_name">Назва</option>
            <option value="cmp_genre">Жанр</option>
            <option value="cmp_rating">Рейтинг</option>
            <option value="cmp_studio">Кіностудія</option>
            <option value="cmp_sessions">Сеанси</option>
    </select>
    <input type="submit" value="Зберегти" name="sendingSort">
    </form>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="search">    
    <label for="inputData">Введіть запит: </label>
    <input type="text" name="inputData" required>
    <input type="submit" value="Зберегти" name="sendingSearch">
    </form>
    <?php
    if (isset($_POST['sendingSearch'])) {
        global $str;
        $data = $_POST["inputData"];
        $res = search($movies, $data);
        if (!$res) {
            echo "<p>На жаль, на Ваш запит інформація <b>відсутня</b>.</p>";
        }
        else {
            echo '<h3>Результат пошуку:</h3>';
            array_walk($res, "show");
        }
    }
    ?>
</body>
</html>