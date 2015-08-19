<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GRID VX - 12 colunas</title>

        <link rel="stylesheet" href="css/reset.css" charset="utf-8">
        <link rel="stylesheet" href="css/grid-12-cols.css" charset="utf-8">
        <link rel="stylesheet" href="css/style.css" charset="utf-8">
    </head>
    <body>
        <div class="wrapper">
            <div class="row">
                <?php for($i = 1; $i <= 12; $i++) : ?>
                    <div class="col col1 box-custom">
                        .col1
                    </div>
                <?php endfor;?>
            </div>

            <div class="row">
                <?php for($i = 1; $i <= 6; $i++) : ?>
                    <div class="col col2 box-custom">
                        .col2
                    </div>
                <?php endfor;?>
            </div>

            <div class="row">
                <?php for($i = 1; $i <= 4; $i++) : ?>
                    <div class="col col3 box-custom">
                        .col3
                    </div>
                <?php endfor;?>
            </div>

            <div class="row">
                <?php for($i = 1; $i <= 3; $i++) : ?>
                    <div class="col col4 box-custom">
                        .col4
                    </div>
                <?php endfor;?>
            </div>

            <div class="row">
                <?php for($i = 1; $i <= 2; $i++) : ?>
                    <div class="col col5 box-custom">
                        .col5
                    </div>
                <?php endfor;?>
                <div class="col col2 box-custom">
                    .col2
                </div>
            </div>

            <div class="row">
                <?php for($i = 1; $i <= 2; $i++) : ?>
                    <div class="col col6 box-custom">
                        .col6
                    </div>
                <?php endfor;?>
            </div>

            <div class="row">
                <div class="col col7 box-custom">
                    .col7
                </div>
                <div class="col col5 box-custom">
                    .col5
                </div>
            </div>

            <div class="row">
                <div class="col col8 box-custom">
                    .col8
                </div>
                <div class="col col4 box-custom">
                    .col4
                </div>
            </div>

            <div class="row">
                <div class="col col9 box-custom">
                    .col9
                </div>
                <div class="col col3 box-custom">
                    .col3
                </div>
            </div>

            <div class="row">
                <div class="col col10 box-custom">
                    .col10
                </div>
                <div class="col col2 box-custom">
                    .col2
                </div>
            </div>

            <div class="row">
                <div class="col col11 box-custom">
                    .col11
                </div>
                <div class="col col1 box-custom">
                    .col1
                </div>
            </div>

            <div class="row">
                <div class="col col12 box-custom">
                    .col12
                </div>
            </div>

            <h1 class="titulo">GRID OFFSET</h1>

            <!-- OFFSET 1 -->

            <div class="row">
                <div class="col col1 box-custom offset1">
                    .col1 offset 1
                </div>
                <div class="col col1 box-custom offset1">
                    .col1 offset 1
                </div>
                <div class="col col1 box-custom offset1">
                    .col1 offset 1
                </div>
                <div class="col col1 box-custom offset1">
                    .col1 offset 1
                </div>
                <div class="col col1 box-custom offset1">
                    .col1 offset 1
                </div>
                <div class="col col1 box-custom offset1">
                    .col1 offset 1
                </div>
            </div>

            <!-- /OFFSET 1 -->

            <!-- OFFSET 2 -->

            <div class="row">
                <div class="col col2 box-custom offset2">
                    .col2 offset 2
                </div>
                <div class="col col2 box-custom offset2">
                    .col2 offset 2
                </div>
                <div class="col col2 box-custom offset2">
                    .col2 offset 2
                </div>
            </div>

            <!-- /OFFSET 2 -->

            <!-- OFFSET 3 -->

            <div class="row">
                <div class="col col3 box-custom offset3">
                    .col3 offset 3
                </div>
                <div class="col col3 box-custom offset3">
                    .col3 offset 3
                </div>
            </div>

            <!-- /OFFSET 3 -->

            <!-- OFFSET 4 -->

            <div class="row">
                <div class="col col4 box-custom">
                    .col4 offset 4
                </div>
                <div class="col col4 box-custom offset4">
                    .col4 offset 4
                </div>
            </div>

            <!-- /OFFSET 4 -->

            <!-- OFFSET 4 -->

            <div class="row">
                <div class="col col7 box-custom offset5">
                    .col7 offset 5
                </div>
            </div>

            <!-- /OFFSET 4 -->
        </div>
    </body>
</html>
