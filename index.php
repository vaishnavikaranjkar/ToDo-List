<?php 
    // initialize errors variable
        $errors = "";
        $i = 1;

        // connect to database
        $db = mysqli_connect("localhost", "root", "root123", "todolist");

        // insert a quote if submit button is clicked
        if (isset($_POST['submit'])) {
                if (empty($_POST['task'])) {
                        $errors = "You must fill in the task";
                }else{
                        $task = $_POST['task'];
                        $sql = "INSERT INTO tasks VALUES ('$i','$task')";
                        mysqli_query($db, $sql);
                        header('location: index.php');
                        $i++;
                }
        }  
        if (isset($_GET['del_task'])) {
                $t = $_GET['del_task'];
                $query_delete="DELETE FROM tasks WHERE task='$t'";
                mysqli_query($db, $query_delete);
                header('location: index.php');
        }
?>   
<!DOCTYPE html>
<html>
<head>
        <title>ToDo List Application PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="heading">
                <h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
        </div>
        <form method="post" action="index.php" class="input_form">
            <?php if (isset($errors)) { ?>
                <p><?php echo $errors; ?></p>
        <?php } ?>
                <input type="text" name="task" class="task_input">
                <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
        </form>
        <table>
        <thead>
                <tr>
                        <th>N</th>
                        <th>Tasks</th>
                        <th style="width: 60px;">Action</th>
                </tr>
        </thead>

        <tbody>
                <?php 
                // select all tasks if page is visited or refreshed
                $tasks = mysqli_query($db, "SELECT * FROM tasks");

                while ($row = mysqli_fetch_array($tasks)) 
                { ?>
                        <tr>
                                <td> <?php echo $i; ?> </td>
                                <td class="task"> <?php echo $row['task']; ?> </td>
                                <td class="delete"> 
                                        <a href="index.php?del_task=<?php echo $row['task'] ?>">x</a> 
                                </td>
                        </tr>
                <?php $i++; } 
                ?>  
        </tbody>
</table>
</body>
</html>