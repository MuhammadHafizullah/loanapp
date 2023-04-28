<?php include("header.php");
$form_heading="Consumer Proposal Request";
?>


<h1 class="text-center text-white col-sm-10 mx-auto">Consumer Proposal Consultation</h1>
            <div class="row preloaded_app panel panel-default mx-auto mt-4 py-4">
                <div class="panel-body">
                    <div class="row">
                        <h2 class='panel-subheading text-center'>
                        Speak with a debt relief specialist
                        </h2>
                        <div id="preloaded_app-container">
                            <div class="row">
                                <div class="col-sm-10 mx-auto">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                            <span class="completed">0% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <form id="form" method="post" autocomplete="off" class="row g-3 form needs-validation" novalidate>
                                <input type="hidden" value="personal_loan" name="product_name" id="product_name">
                                <?php include("debt_form.php") ?>

                                <div class="row mt-3">
                                    <div class="text-center">
                                        <button class="btn-preloaded_app-next btn btn-lg btn-green btn-next">Next</button>
                                        <button type="submit" class="btn-preloaded_app-next btn btn-lg btn-green btn-submit">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php include("footer.php"); ?>