<?php
$id = $_POST['id'];
header('Location:index.php?action=confirmDeletePost&id=' . $id);
