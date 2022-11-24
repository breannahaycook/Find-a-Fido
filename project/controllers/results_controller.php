<?php
    session_start();

try {
    require_once '../model/database_model.php';
    
    
    if (!empty($size)) {
        $statement = " WHERE size = \"$size\" ";
        $breeds_size_array = filter_breeds($statement);
        foreach ($breeds_size_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($training_level)) {
        $statement .= " WHERE training_level = \"$training_level\" ";
        $breeds_training_level_array = filter_breeds($statement);
                foreach ($breeds_training_level_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($hypoallergenic)) {
        $statement .= " WHERE hypoallergenic = \"$hypoallergenic\" ";
        $breeds_hypoallergenic_array = filter_breeds($statement);
                foreach ($breeds_hypoallergenic_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($activity_level)) {
        $statement .= " WHERE activity_level = \"$activity_level\" ";
        $breeds_activity_level_array = filter_breeds($statement);
                foreach ($breeds_activity_level_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($noise_level)) {
        $statement .= " WHERE noise_level = \"$noise_level\" ";
        $breeds_noise_level_array = filter_breeds($statement);
                foreach ($breeds_noise_level_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($kids_temp)) {
        $statement .= " WHERE kids_temp = \"$kids_temp\" ";
        $breeds_kids_temp_array = filter_breeds($statement);
                foreach ($breeds_kids_temp_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($grooming)) {
        $statement .= " WHERE grooming = \"$grooming\" ";
        $breeds_grooming_array = filter_breeds($statement);
                foreach ($breeds_grooming_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($household_size)) {
        $statement .= " WHERE household_size = \"$household_size\" ";
        $breeds_household_size_array = filter_breeds($statement);
                foreach ($breeds_household_size_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }

    if (!empty($shedding)) {
        $statement .= " WHERE shedding = \"$shedding\" ";
        $breeds_shedding_array = filter_breeds($statement);
                foreach ($breeds_shedding_array as $breed) :
           $name = $breed->get_breed ();
           
           switch ($name) {
               case 'Basset Hound':
                   $basset_hound++;
                   break;
                case 'Bolognese':
                   $bolognese++;
                   break;
                case 'Border Collie':
                   $border_collie++;
                   break;
                case 'Chihuahua':
                   $chihuahua++;
                   break;
                case 'Doberman Pinscher':
                   $doberman_pinscher++;
                   break;
                case 'French Bulldog':
                   $french_bulldog++;
                   break;
                case 'Golden Retriever':
                   $golden_retriever++;
                   break;
                case 'Irish Water Spaniel':
                   $irish_water_spaniel++;
                   break;
                case 'Poodle':
                   $Poodle++;
                   break;
                case 'Siberian Husky':
                   $siberian_husky++;
                   break;
                case 'Standard Schnauzer':
                   $standard_schnauzer++;
                   break;
                case 'Yorkshire Terrier':
                   $yorkshire_terrier++;
                   break;
           }
        endforeach;
    }
    
    include ('../views/results_view.php');
} catch (Exception $e) {
    $error_message = $e->getMessage();
    include('../views/error.php');
}

