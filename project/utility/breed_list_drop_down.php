<!-- drop down list for all breeds -->
<select name="breed">
    <?php foreach ( $breeds as $breed ) : ?>
        <option name="dogbreed" value='<?php echo $breed-> get_breed(); ?>'><?php echo $breed-> get_breed(); ?> </option>
    <?php endforeach; ?>
</select>