<?php
/**
 * @var string $title
 * @var string $error
 * @var int $places
 * @var string $date
 * @var string $company
 * @var string $room
 * @var string $time
 * @var string $vote
 * @var string $year
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="./css/reset.css" rel="stylesheet">
    <link href="./css/tickets-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
    <title>Billets <?php echo $title ?></title>
</head>

<body>
<div class="warning">
    <?php echo $error ?>
</div>
<div class="container">
    <?php for ($i = 1; $i <= $places; $i++) : ?>

        <div class="ticket">
            <!-- SOUCHE -->
            <div class="stub">
                <p class="ticket-number">
                    N°<?php echo $i ?>
                </p>
                <p class="date">
                    <?php echo $date ?>
                </p>
                <p class="title">
                    <?php echo $title ?>
                </p>
                <p class="company">
                    <?php echo "<small>" . $company . "</small>" ?>
                </p>
                <div class="practical-info">
                    <p class="room">
                        <?php echo $room ?>
                    </p>
                    <p class="time">
                        <?php echo " <small>" . $time . "</small>" ?>
                    </p>
                </div>
            </div>

            <!-- SPECTATOR TICKET -->
            <div class="main <?php if ($vote == 'no') {
                echo 'no-vote';
            } ?>">
                <p class="year">
                    Festival À Contre Sens <?php echo $year ?>
                </p>
                <p class="title">
                    <?php echo $title . "<br><small>" . $company . "</small>" ?>
                </p>
                <p class="date">
                    <?php echo $date ?>
                </p>
                <p class="room">
                    <?php echo $room ?>
                </p>
                <p class="time">
                    <?php echo "$time" ?>
                </p>
                <p class="spectator">
                    <?php echo $spectatorsList[$i - 1] ?? '' ?>
                </p>

            </div>
            <!-- DETACHABLE VOTE STUB -->
            <div class="<?php if ($vote == 'no') {
                echo 'no-display';
            } else {
                echo 'vote';
            } ?>">
                <p>
                    C'était comment ?
                    <br>
                    Détachez pour voter !
                </p>
            </div>
        </div>
        <?php if ($i % 10 == 0) {
            echo '<div class="page-break"></div>';
        } ?>
    <?php endfor ?>

</div>
</body>
</html>