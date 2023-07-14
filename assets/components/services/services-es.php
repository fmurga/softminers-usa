<?php require 'services-data-es.php' ?>

<div class="splide hide-on-med-and-up" id="services-carousel" aria-labelledby="carousel-heading ">
  <div class="splide__track">
    <ul class="splide__list">
      <?php foreach ($cards as $card) { ?>
      <li class="splide__slide">
        <div class="services-card">
          <img loading="lazy" width="406px" height="256px" src="<?php echo $card['imagePath']; ?>" alt="Solutions Icon">
          <div class="services-info">
            <h3 class="services-title"><?php echo $card['title']; ?></h3>
            <p class="services-text"><?php echo $card['description']; ?></p>
          </div>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
<div class="services-grid hide-on-med-and-down">
  <div class="diferentials_custom">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="container our_solution_category">
          <div class="row justify-content-center">
            <?php foreach ($cards as $card) { ?>
            <div class="col-sm-12 col-md-6 col-lg-<?php echo $card['size']; ?>">
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
</div>