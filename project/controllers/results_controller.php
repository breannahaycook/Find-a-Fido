<?php
    session_start();

try {
    require_once '../model/database_model.php';
    require_once '../model/breed_info_model.php';
    
    $size = htmlspecialchars(filter_input(INPUT_POST, "size"));
    $training_level = htmlspecialchars(filter_input(INPUT_POST, "training_level"));
    $hypoallergenic = htmlspecialchars(filter_input(INPUT_POST, "hypoallergenic"));
    $activity_level = htmlspecialchars(filter_input(INPUT_POST, "activity_level"));
    $noise_level = htmlspecialchars(filter_input(INPUT_POST, "noise_level"));
    $kids_temp = htmlspecialchars(filter_input(INPUT_POST, "kids_temp"));
    $grooming = htmlspecialchars(filter_input(INPUT_POST, "grooming"));
    $household_size = htmlspecialchars(filter_input(INPUT_POST, "household_size"));
    $shedding = htmlspecialchars(filter_input(INPUT_POST, "shedding"));
    
    $statement= "";
    
    $results_array = [
        'Basset Hound' => 0,
        'Bolognese' => 0,
        'Border Collie' => 0,
        'Chihuahua' => 0,
        'Doberman Pinscher' => 0,
        'French Bulldog' => 0,
        'Golden Retriever' => 0,
        'Irish Water Spaniel' => 0,
        'Poodle' => 0,
        'Siberian Husky' => 0,
        'Standard Schnauzer' => 0,
        'Yorkshire Terrier' => 0
    ];
    
    // get all breed information to match
    $breeds = get_all_breeds();
    
    // matches user input with breed information
    foreach ($breeds as $breed) :
        $name = $breed->get_breed();
    
        if ($breed->get_size() === $size) {
            $results_array[$name]++;
        }
        
        if ($breed->get_training_level() === $training_level) {
            $results_array[$name]++;
        }
        
        if ($breed->get_hypoallergenic() === $hypoallergenic) {
            $results_array[$name]++;
        }
        
        if ($breed->get_noise_level() === $noise_level) {
            $results_array[$name]++;
        }
        
        if ($breed->get_kids_temp() === $kids_temp) {
            $results_array[$name]++;
        }
        
        if ($breed->get_grooming() === $grooming) {
            $results_array[$name]++;
        }
        
        if ($breed->get_household_size() === $household_size) {
            $results_array[$name]++;
        }
        
        if ($breed->get_shedding() === $shedding) {
            $results_array[$name]++;
        }
    endforeach;

    // puts array in decending order
    arsort($results_array);
    
    $dog = array_keys($results_array);
        
    // array for top matches
    $results_key_array[0] = $dog[0];
    
    // checks if the first value matches the second
    for ($i = 1; $i <= count($dog); $i++) {
        // if value matches break and display only match
        if ($results_array[$dog[0]] != $results_array[$dog[$i]]){
            break;
        } else {
            // if there is more than one top number add to multi array
           array_push($results_key_array, $dog[$i]);
        }
    }

    // if there is more than one item in the $multi_array combine the WHERE statement then display results
    if (count($results_key_array) != 1) {
        $message = "Congratulations! You have " . count($results_key_array) . " top matches!";
        $statement = " WHERE breed IN (";
        
        foreach ($results_key_array as $breed) :
            $statement .= "\"$breed\", ";
        endforeach;

        $statement = rtrim($statement,", ");
        $statement .= ")";
        
        $results = get_breeds_by_filter($statement);
        
    } else {
        // display results for the top match
        $message = "Congratulations! Here is your top match!";
        
        foreach ($results_key_array as $breed) :
            $breed_obj = new Breed($breed, '', '', '', '', '', '', '', '', '', '', 0);
            $results = get_breed_by_name($breed_obj);
        endforeach;
    }

    include ('../views/results_view.php');
    
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo '<script>console.log("' . $error_message . '");</script>';
    include ('../views/results_view.php');
}

