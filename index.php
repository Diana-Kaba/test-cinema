<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кінотеатр</title>
</head>
<body>
    <h1>Кінотеатр</h1>
    <form action="db-actions.php" method="POST" name="search">
    <!-- <label for="request">Оберіть за чим запит: </label>
    <select name="request">
            <option value="director">Режисер</option>
            <option value="year">Дата випуску</option>
            <option value="name">Назва</option>
            <option value="genre">Жанр</option>
            <option value="rating">Рейтинг</option>
            <option value="studio">Кіностудія</option>
            <option value="sessions">Сеанси</option>
    </select> -->
    <label for="inputData">Введіть запит: </label>
    <input type="text" name="inputData" required>
    <input type="submit" value="Зберегти" name="sendingSearch">
    </form>
    <form action="db-actions.php" method="POST" name="sort">
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
</body>
</html>