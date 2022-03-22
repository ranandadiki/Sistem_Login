<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-900"><?= $title; ?></h1>
    <?php
    if ($_POST != NULL) {

        $supply = $_POST['supply'];
        $demand = $_POST['demand'];

        if ($supply > 6 && $demand > 6) {
            echo '<div class="alert alert-danger">Demand atau Supply tidak boleh lebih dari 6!</div>';
            echo '<a class="btn btn-info btn-md" href="index.php" role="button">Kembali Ke Halaman Utama</a>';
        } else {
    ?>
            <form action="algo" method="post">
                <table class="table">
                    <tr>
                        <td>
                            <font color="black">Supply/Demand</font>
                        </td>
                        <?php
                        for ($count = 1; $count <= $demand; $count++) {
                            //label demand
                            echo "<td> daerah $count </td>";
                        }
                        ?>
                        <td>
                            <font color="black">Supply Needed</font>
                        </td>
                    </tr>
                    <?php
                    for (
                        $count_a = 1;
                        $count_a <= $supply;
                        $count_a++
                    ) {
                        //label supply
                        echo "<tr><td>kandang $count_a</td>";
                        for ($count_b = 1; $count_b <= $demand; $count_b++) {
                    ?>
                            <td>
                                <div class="form-group" style="width: 50px;">
                                    <input type="text" class="form-control" name="cost[<?= $count_a ?>][<?php echo $count_b ?>]" value="">
                                </div>
                            </td>
                        <?php
                        }
                        ?>
                        <td>
                            <div class="form-group" style="width: 50px;">
                                <input type="text" class="form-control" name="supply[<?php echo $count_a ?>]">
                            </div>
                        </td>
                    <?php
                        echo '</tr>';
                    }
                    ?>
                    <tr>
                        <td>
                            <font color="black">Demand Requested</font>
                        </td>
                        <?php
                        for ($count_c = 1; $count_c <= $demand; $count_c++) {
                        ?>
                            <td>
                                <div class="form-group" style="width: 50px;">
                                    <input type="text" class="form-control" name="demand[<?php echo $count_c ?>]">
                                </div>
                            </td>
                        <?php
                        }
                        ?>
                        <td>
                        </td>
                    </tr>
                    <div class="form-group" style="width: 50px;" hidden>
                        <input type="text" class="form-control" name="s_demand" value="<?php echo $demand ?>">
                    </div>
                    <div class="form-group" style="width: 50px;">
                        <input type="text" class="form-control" name="s_supply" value="<?php echo $supply ?>" hidden>
                    </div>
                </table>
                <button class="btn btn-info btn-md" type="submit" style="float: right;">Submit</button>
            </form>
    <?php
        }
    }
    ?>
</div>