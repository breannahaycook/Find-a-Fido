<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews | Find-A-Fido</title>
</head>
    <body>
        <main>
            <table>
                <?php foreach($reviews as $review) : ?>
                <tr>
                    <td><?php echo $review-> get_user_id(); ?></td>
                    <td><?php echo $review-> get_breed(); ?></td>
                    <td><?php echo $review-> get_review(); ?></td>
                    <td><?php echo $review-> get_timestamp(); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </main>
    </body>
</html>