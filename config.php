<?php
if(isset($inDevelopment)) {
    if($inDevelopment == true) {
        header("Location: development");
    } 
} else {
    header("Location: development");
}
?>