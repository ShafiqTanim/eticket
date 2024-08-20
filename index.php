<?php require_once('include/header.php'); ?>


      <section class="section">
        <div class="swiper-form-wrap">
          
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper">
              <div class="swiper-slide " data-slide-bg="<?= $baseurl?>asset/images/bus1.jpeg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-sectionp-3">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="<?= $baseurl?>asset/images/bus2.png">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="<?= $baseurl?>asset/images/bus3.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper controls-->
            <div class="swiper-pagination-wrap">
              <div class="container container-bigger">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container container-bigger form-request-wrap form-request-wrap-modern">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
              <div class="col-lg-6 col-xxl-5">
                <div class="form-request form-request-modern bg-gray-lighter novi-background">
                  <h4>Choose Your Destination</h4>
                  <!-- RD Mailform-->
                   <!-- form start -->
                  <form action="bus.php" method="get" class="form-fix">
                    <div class="row row-20 row-fix">
                      <div class="col-sm-12">
                        <label class="form-label-outside">From</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" required name="area_from" id="area_from" data-placeholder="Choose One"  >
                          <option value=""></option>
                              <?php 
                                  $result=$mysqli->common_select('area');
                                  if($result){
                                    if($result['data']){
                                      foreach($result['data'] as $data){
                              ?>
                                  <option value="<?= $data->id ?>"><?= $data->name ?></option>
                              <?php } } } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label-outside">To</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="Choose One" required name="area_to" id="area_to">
                          <option value=""></option>
                            <?php 
                                $result=$mysqli->common_select('area');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $data){
                            ?>
                                <option value="<?= $data->id ?>"><?= $data->name ?></option>
                            <?php } } } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label-outside">Depart Date</label>
                        <div class="form-wrap form-wrap-validation">
                          <!-- Select -->
                          <input class="form-input" id="dateForm" name="dep_date" type="text" data-time-picker="date">
                          <label class="form-label" for="dateForm">Choose the date</label>
                        </div>
                      </div>
                    </div>
                   
                    <div class="form-wrap form-button">
                      <button class="button button-block button-secondary" type="submit">search</button>
                    </div>
                  </form>
                  <!-- form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php require_once('include/footer.php'); ?>