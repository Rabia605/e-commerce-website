<?php
    if(isset($_GET['delete_category'])){
        $delete_id = $_GET['delete_category'];

        // Check if the category exists
        $check_query = "SELECT * FROM categories WHERE category_id = $delete_id";
        $check_result = mysqli_query($con, $check_query);
        if(mysqli_num_rows($check_result) > 0){
            
            // Try to delete the category
            $delete_query = "DELETE FROM `categories` WHERE category_id = $delete_id";
            $delete_result = mysqli_query($con, $delete_query);

            if($delete_result){
                echo "<script>window.alert('Category deleted successfully');</script>";
                echo "<script>window.open('index.php?view_categories','_self');</script>";
            } else {
                // Error handling if delete fails
                echo "<script>window.alert('Error deleting category: " . mysqli_error($con) . "');</script>";
            }

        } else {
            // Category doesn't exist
            echo "<script>window.alert('Category not found.');</script>";
        }
    }
?>
