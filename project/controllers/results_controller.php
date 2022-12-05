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
    
    
    if (!empty($size)) {
        $breeds_size_statement = " WHERE size = \"$size\" ";
        $breeds_size_array = filter_breeds($breeds_size_statement);
        foreach ($breeds_size_array as $breed) :
           $name = $breed->get_breed ();
           switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
           }
        endforeach;
    }

   if (!empty($training_level)) {
        $statement = " WHERE training_level = \"$training_level\" ";
        $breeds_training_level_array = filter_breeds($statement);
        foreach ($breeds_training_level_array as $breed) :
           $name = $breed->get_breed ();
           switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }
    
    if (!empty($hypoallergenic)) {
        $statement = " WHERE hypoallergenic = \"$hypoallergenic\" ";
        $breeds_hypoallergenic_array = filter_breeds($statement);
        foreach ($breeds_hypoallergenic_array as $breed) :
            $name = $breed->get_breed ();
            switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }

    if (!empty($activity_level)) {
        $statement = " WHERE activity_level = \"$activity_level\" ";
        $breeds_activity_level_array = filter_breeds($statement);
        foreach ($breeds_activity_level_array as $breed) :
            $name = $breed->get_breed ();
            switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }

    if (!empty($noise_level)) {
        $statement = " WHERE noise_level = \"$noise_level\" ";
        $breeds_noise_level_array = filter_breeds($statement);
        foreach ($breeds_noise_level_array as $breed) :
            $name = $breed->get_breed ();
            switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }

    if (!empty($kids_temp)) {
        $statement = " WHERE kids_temp = \"$kids_temp\" ";
        $breeds_kids_temp_array = filter_breeds($statement);
        foreach ($breeds_kids_temp_array as $breed) :
            $name = $breed->get_breed ();
            switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }

    if (!empty($grooming)) {
        $statement = " WHERE grooming = \"$grooming\" ";
        $breeds_grooming_array = filter_breeds($statement);
        foreach ($breeds_grooming_array as $breed) :
            $name = $breed->get_breed ();
            switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }

    if (!empty($household_size)) {
        $statement = " WHERE household_size = \"$household_size\" ";
        $breeds_household_size_array = filter_breeds($statement);
        foreach ($breeds_household_size_array as $breed) :
            $name = $breed->get_breed ();
            switch ($name) {
                case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }

    if (!empty($shedding)) {
        $statement = " WHERE shedding = \"$shedding\" ";
        $breeds_shedding_array = filter_breeds($statement);
        foreach ($breeds_shedding_array as $breed) :
            $name = $breed->get_breed ();
            switch ($name) {
               case 'Basset Hound':
                   $results_array['Basset Hound']++;
                   break;
                case 'Bolognese':
                   $results_array['Bolognese']++;
                   break;
                case 'Border Collie':
                   $results_array['Border Collie']++;
                   break;
                case 'Chihuahua':
                   $results_array['Chihuahua']++;
                   break;
                case 'Doberman Pinscher':
                   $results_array['Doberman Pinscher']++;
                   break;
                case 'French Bulldog':
                   $results_array['French Bulldog']++;
                   break;
                case 'Golden Retriever':
                   $results_array['Golden Retriever']++;
                   break;
                case 'Irish Water Spaniel':
                   $results_array['Irish Water Spaniel']++;
                   break;
                case 'Poodle':
                   $results_array['Poodle']++;
                   break;
                case 'Siberian Husky':
                   $results_array['Siberian Husky']++;
                   break;
                case 'Standard Schnauzer':
                   $results_array['Standard Schnauzer']++;
                   break;
                case 'Yorkshire Terrier':
                   $results_array['Yorkshire Terrier']++;
                   break;
            }
        endforeach;
    }

        arsort($results_array);
        $value = array_values($results_array)[0];
        $breed_key = array_search(array_values($results_array)[0], $results_array);
        $breed_obj = new Breed($breed_key, '', '', '', '', '', '', '', '', '', '', 0);
        $results = get_breed_by_name($breed_obj);
    
//    for ($i = 0; $i > sizeof($results_array); $i++ ){
//        $j = $i++;
//        if ($results_array[$j] != null) {
//            if ($results_array[$i] != $$results_array[$j]) {
//                break;
//            } else {
//                
//            }
//        }
//    }

    include ('../views/results_view.php');
    
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo '<script>console.log("' . $error_message . '");</script>';
    include ('../views/results_view.php');
}

