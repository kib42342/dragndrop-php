<?php

var_dump($_FILES);
echo $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
?>
