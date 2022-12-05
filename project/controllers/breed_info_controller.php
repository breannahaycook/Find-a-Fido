<?php
session_start();

try {
    require_once '../model/database_model.php';
    require_once '../model/breed_info_model.php';
    
    $action = htmlspecialchars(filter_input(INPUT_POST, "action"));
    $size = htmlspecialchars(filter_input(INPUT_POST, "size"));
    $training_level = htmlspecialchars(filter_input(INPUT_POST, "training_level"));
    $hypoallergenic = htmlspecialchars(filter_input(INPUT_POST, "hypoallergenic"));
    $activity_level = htmlspecialchars(filter_input(INPUT_POST, "activity_level"));   
    $noise_level = htmlspecialchars(filter_input(INPUT_POST, "noise_level"));
    $kids_temp = htmlspecialchars(filter_input(INPUT_POST, "kids_temp"));
    $grooming = htmlspecialchars(filter_input(INPUT_POST, "grooming"));
    $household_size = htmlspecialchars(filter_input(INPUT_POST, "household_size"));
    $shedding = htmlspecialchars(filter_input(INPUT_POST, "shedding"));
    
    $statement = "";
    $tags = [];
    $i = 0;
    
    // applies filters from form and creates the WHERE statement
    if ($action != "Apply Filters") {
        $breeds = get_all_breeds();
    } else {
        if (!empty($size)) {
            $statement .= " size = \"$size\" AND ";
            $tags[] .= "Size: " . $size;
            $i++;
        }

        if (!empty($training_level)) {
            $statement .= " training_level = \"$training_level\" AND ";
            $tags[] .= "Training Level: " . $training_level;
            $i++;
        }
        
        if (!empty($hypoallergenic)) {
            $statement .= " hypoallergenic = \"$hypoallergenic\" AND ";
            $tags[] .= "Hypoallergenic: " . $hypoallergenic;
            $i++;
        }
        
        if (!empty($activity_level)) {
            $statement .= " activity_level = \"$activity_level\" AND ";
            $tags[] .= "Activity: " . $activity_level;
            $i++;
        }
        
        if (!empty($noise_level)) {
            $statement .= " noise_level = \"$noise_level\" AND ";
            $tags[] .= "Noise Level: " . $noise_level;
            $i++;
        }
        
        if (!empty($kids_temp)) {
            $statement .= " kids_temp = \"$kids_temp\" AND ";
            $tags[] .= "Kids Temperament: " . $kids_temp;
            $i++;
        }
        
        if (!empty($grooming)) {
            $statement .= " grooming = \"$grooming\" AND ";
            $tags[] .= "Grooming Needs: " . $grooming;
            $i++;
        }
        
        if (!empty($household_size)) {
            $statement .= " household_size = \"$household_size\" AND ";
            $tags[] .= "Household Room Needed: " . $household_size;
            $i++;
        }
        
        if (!empty($shedding)) {
            $statement .= " shedding = \"$shedding\" AND ";
            $tags[] .= "Shedding Level: " . $shedding;
            $i++;
        }
        
        if ($statement != "") {
            $statement = " WHERE " . $statement;
            $statement = rtrim($statement," AND ");
        }  
        $breeds = get_breeds_by_filter($statement);
    }    
    
    include ('../views/dog_breed_view.php');
    
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo '<script>console.log("' . $error_message . '");</script>';
    include ('../views/dog_breed_view.php');
}