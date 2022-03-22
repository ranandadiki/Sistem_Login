<!-- Begin Page Content -->
<div class="container fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-900"><?= $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8" id="main-page">
            <div class="jumbotron">
                <p class="lead">
                    <font color="black">
                        Melalui website ini anda dapat menghitung cost dengan menggunakan Vogel Approximation Algorithm and Modified Distribution.
                    </font>
                </p>
                <form action="input" method="post">
                    <table class="table">
                        <tr>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">
                                    <font color="black">
                                        Supply :
                                    </font>
                                </label>
                                <input type="text" class="form-control" placeholder="Masukkan Jumlah Supply" name="supply">
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">
                                    <font color="black">
                                        Demand :
                                    </font>
                                </label>
                                <input type="text" class="form-control" placeholder="Masukkan Jumlah Demand" name="demand">
                            </div>
                        </tr>
                    </table>
                    <button class="btn btn-info btn-md" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>