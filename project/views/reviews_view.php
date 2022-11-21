<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews | Find-A-Fido</title>
</head>
    <body>
        <?php 
            include('nav.php');
        ?>
        <main>
            <form action="../controllers/reviews_controller.php" method="post">
                <label><h4> Would you like to leave a review? </h4></label>
                <h5>Please select which breed you would like to leave a review on.</h5>
                <?php include('../utility/breed_list_drop_down.php'); ?>
                <br><br>
                <textarea style="width: 400px; height: 100px;" name="review"></textarea><br>
                <label>&nbsp;</label><br>
                <input type="hidden" name="action" value="create_review">
                <input type="submit" value="Create Review"><br>
            </form>
            
            <hr>
            <form action="../controllers/reviews_controller.php" method="post"> 
                <?php include('../utility/breed_list_drop_down.php') ?>
                <label>&nbsp;</label>
                <input type="hidden" name='action' value="filter_reviews"/>
                <input type="submit" value="Filter Reviews"><br>
            </form>  
            <br>
            <table>
                <?php foreach($reviews as $review) : ?>
                <tr>
                    <td><?php $id = $review-> get_user_id(); echo $id; ?></td>
                    <td><?php echo $review-> get_breed(); ?></td>
                    <td><?php echo $review-> get_review(); ?></td>
                    <td><?php echo $review-> get_timestamp(); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </main>
    </body>
</html>