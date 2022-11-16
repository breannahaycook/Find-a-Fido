<?php

class Breed {
    private $breed, $size, $training_level, $hypoallergenic, $activity_level, 
            $noise_level, $kids_temp, $grooming, $household_size, $shedding, $information, $id;
    
    public function __construct($breed, $size, $training_level, $hypoallergenic, $activity_level, 
            $noise_level, $kids_temp, $grooming, $household_size, $shedding, $information, $id = 0) {
        $this-> set_breed($breed);
        $this-> set_size($size);
        $this-> set_training_level($training_level);
        $this-> set_hypoallergenic($hypoallergenic);
        $this-> set_activity_level($activity_level);
        $this-> set_noise_level($noise_level);
        $this-> set_kids_temp($kids_temp);
        $this-> set_grooming($grooming);
        $this-> set_household_size($household_size);
        $this-> set_shedding($shedding);
        $this-> set_information($information);
        $this-> id = $id;
    }
    
    public function get_breed() {
        return $this-> breed;
    }

    public function get_size() {
        return $this-> size;
    }

    public function get_training_level() {
        return $this-> training_level;
    }

    public function get_hypoallergenic() {
        return $this-> hypoallergenic;
    }

    public function get_activity_level() {
        return $this-> activity_level;
    }

    public function get_noise_level() {
        return $this-> noise_level;
    }

    public function get_kids_temp() {
        return $this-> kids_temp;
    }

    public function get_grooming() {
        return $this-> grooming;
    }

    public function get_household_size() {
        return $this-> household_size;
    }

    public function get_shedding() {
        return $this-> shedding;
    }
    
    public function get_information() {
        return $this-> information;
    }

    public function get_id() {
        return $this-> id;
    }

    public function set_breed($breed) {
        $this-> breed = $breed;
    }

    public function set_size($size) {
        $this-> size = $size;
    }

    public function set_training_level($training_level) {
        $this-> training_level = $training_level;
    }

    public function set_hypoallergenic($hypoallergenic) {
        $this-> hypoallergenic = $hypoallergenic;
    }

    public function set_activity_level($activity_level) {
        $this-> activity_level = $activity_level;
    }

    public function set_noise_level($noise_level) {
        $this-> noise_level = $noise_level;
    }

    public function set_kids_temp($kids_temp) {
        $this-> kids_temp = $kids_temp;
    }

    public function set_grooming($grooming) {
        $this-> grooming = $grooming;
    }

    public function set_household_size($household_size) {
        $this-> household_size = $household_size;
    }

    public function set_shedding($shedding) {
        $this-> shedding = $shedding;
    }
    
    public function set_information($information) {
        $this-> information = $information;
    }
}

function get_all_breeds() {
    global $database;
    
    // read breeds info
    $breeds_query = 'SELECT breed, size, training_level, hypoallergenic, activity_level, 
            noise_level, kids_temp, grooming, household_size, shedding, information, id FROM breed_info ORDER BY breed ASC';
    $breeds_statement = $database->prepare($breeds_query);
    $breeds_statement->execute();
    $breeds = $breeds_statement->fetchAll();
    $breeds_statement->closeCursor();
    
    $breeds_array = array();
    
    foreach($breeds as $breed) {
        $breeds_array[] = new Breed($breed['breed'], $breed['size'], $breed['training_level'],
                $breed['hypoallergenic'], $breed['activity_level'], $breed['noise_level'],
                $breed['kids_temp'], $breed['grooming'], $breed['household_size'],
                $breed['shedding'], $breed['information'], $breed['id']);
    }
    
    return $breeds_array;
}

function get_breed_by_name($breed) {
    global $database;
    
    // read one breed info
    $breeds_query = 'SELECT size, training_level, hypoallergenic, activity_level, 
            noise_level, kids_temp, grooming, household_size, shedding, information, id FROM breed_info WHERE breed = :breed';
    $breeds_statement = $database->prepare($breeds_query);
    $breeds_statement->bindValue(":breed", $breed);
    $breeds_statement->execute();
    $breeds = $breeds_statement->fetch();
    $breeds_statement->closeCursor();
    
    return $breeds;
}

function filter_breeds($filter) {
    global $database;

    $breeds_query = 'SELECT breed, size, training_level, hypoallergenic, activity_level, noise_level, kids_temp, grooming, household_size, shedding, information, id FROM breed_info' . $filter . ' ORDER BY breed ASC';
    
    $breeds_statement = $database->prepare($breeds_query);
    $breeds_statement->execute();
    $breeds = $breeds_statement->fetchAll();
    $breeds_statement->closeCursor();
    $breeds_array = array();
    foreach($breeds as $breed) {
        $breeds_array[] = new Breed($breed['breed'], $breed['size'], $breed['training_level'], $breed['hypoallergenic'], $breed['activity_level'], $breed['noise_level'], $breed['kids_temp'], $breed['grooming'], $breed['household_size'], $breed['shedding'], $breed['information'], $breed['id']);
    } return $breeds_array;
}