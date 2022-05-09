<?php

if($_FILES['file']['name'] != ''){
    $filename = $_FILES['file']['name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $valid_extension = array("pdf","doc","png");
    if(in_array($extension, $valid_extension)){
        $new_name = rand() . "." . $extension;
        $path = "files/" . $new_name;

        if(move_uploaded_file($_FILES['file']['tem_name'], $path)){
            echo '<img src=".$path.'" /><br><br>
            <button data-path=".$path.'" id="delete_btn">Delete<button/>';
        }
    }else{
        echo '<script>alert("Invalid File Format")</script>';
    }
}else{
    echo '<script>alert("Please select file")</script>';
}


?>