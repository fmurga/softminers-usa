<?php require 'diferentials-data.php' ?>

<div class="diferentials_custom">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="container our_solution_category">
                <div class="row justify-content-center align-items-stretch">
                    <?php foreach ($cards as $card) { ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="so_top_icon">
                                <img src="<?php echo $card['imagePath']; ?>" alt="Solutions Icon">
                            </div>
                            <div class="solu_title">
                                <h3><?php echo $card['title']; ?></h3>
                            </div>
                            <div class="solu_description">
                                <p><?php echo $card['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>