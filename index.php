<?php
$todos = [];
if (file_exists('todo.txt')) {
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
}

if (isset($_POST['todo'])) {
    $data = $_POST['todo'];

    if (!empty($data)) {
        $todos[] = [
            'todo' => $data,
            'status' => 0
        ];

        saveData($todos);
    }
}

if (isset($_GET['status'])) {
    $todos[$_GET['key']]['status'] = $_GET['status'];
    saveData($todos);
}

if (isset($_GET['hapus'])) {
    unset($todos[$_GET['key']]);
    saveData($todos);
}

function saveData($todos)
{
    file_put_contents('todo.txt', serialize($todos));
    header('Location:index.php');
}

?>

<h1>Todo App</h1>

<form method="POST">
    <label for="todo">Apa kegiatanmu hari ini</label><br>
    <input type="text" name="todo">
    <button type="submit">Simpan</button>
</form>

<ul>
    <?php foreach ($todos as $key => $value) : ?>
        <li>
            <input type="checkbox" name="todos" onclick="window.location.href = 'index.php?status=<?php if ($value['status'] == 1) echo '0';
                                                                                                    else echo '1'; ?>&key=<?php echo $key; ?>'" <?php if ($value['status'] == 1) echo 'checked'; ?>>
            <label for="todos">
                <?php
                if ($value['status'] == 1)
                    echo "<del>" . $value['todo'] . "</del>";
                else
                    echo  $value['todo'];
                ?>
            </label>
            <a href="index.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apa kamu yakin akan menghapus todo ini?')">hapus</a>
        </li>
    <?php endforeach; ?>
</ul>