<?php require_once('include/header.php'); ?>

<section class="section">
  <div class="swiper-form-wrap context-dark bg-secondary-2">
    <div class="swiper-container">
      <!-- seat lay out-->
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
      <div class="row row-fix justify-content-sm-center justify-content-lg-end pt-5">
        <div class="col-lg-6 col-xxl-5">
          <!-- Seat layout-->
           <div class="pt-5 mt-5">
            <table class="table">
              <thead>
                  <tr>
                    <th scope="col">R1</th>
                    <th scope="col">R2</th>
                    <th scope="col"></th>
                    <th scope="col">R3</th>
                    <th scope="col">R4</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td></button></td>
                  <td></button></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">A1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">A2</button></td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">A3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">A3</button></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">B1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">B2</td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">B3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">B4</button></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">C1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">C2</button></td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">C3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">C4</button></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">D1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">D2</button></td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">D3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">D4</button></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">E1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">E2</button></td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">E3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">E4</button></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">F1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">F2</button></td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">F3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">F4</button></td>
                </tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">G1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">G2</button></td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">G3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">G4</button></td>
                </tr>
                </tr>
                  <td><button type="button" class="btn btn-outline-primary" value="">H1</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">H2</button></td>
                  <td></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">H3</button></td>
                  <td><button type="button" class="btn btn-outline-primary" value="">H4</button></td>
                </tr>
              </thead>
            </table>
           </div>
        </div>
        <div class="pt-5 col-lg-6 col-xxl-5">
          <div class="mt-5 form-request form-request-modern bg-gray-lighter novi-background">
            <h4>Find your Tour</h4>
            <!-- RD Mailform-->
            <form class="rd-mailform form-fix">
              <div class="row row-20 row-fix">
                <div class="col-sm-12">
                  <label class="form-label-outside">From</label>
                  <div class="form-wrap form-wrap-inline">
                    <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                      <option value="1">New York</option>
                      <option value="2">Lisbon</option>
                      <option value="3">Stockholm</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <label class="form-label-outside">To</label>
                  <div class="form-wrap form-wrap-inline">
                    <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                      <option value="1">Chicago</option>
                      <option value="2">Madrid</option>
                      <option value="3">Paris</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                  <label class="form-label-outside">Depart Date</label>
                  <div class="form-wrap form-wrap-validation">
                    <!-- Select -->
                    <input class="form-input" id="dateForm" name="date" type="text" data-time-picker="date">
                    <label class="form-label" for="dateForm">Choose the date</label>
                    <!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
                    <!--  option(value="1") Choose the date-->
                    <!--  option(value="2") Primary-->
                    <!--  option(value="3") Middle-->
                  </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                  <label class="form-label-outside">Duration</label>
                  <div class="form-wrap form-wrap-validation">
                    <!-- Select 2-->
                    <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                      <option value="1">Any length</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="form-label-outside">Adults</label>
                  <div class="form-wrap form-wrap-modern">
                    <input class="form-input input-append" id="form-element-stepper" type="number" min="0" max="300" value="2">
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="form-label-outside">Children</label>
                  <div class="form-wrap form-wrap-modern">
                    <input class="form-input input-append" id="form-element-stepper-1" type="number" min="0" max="300" value="0">
                  </div>
                </div>
              </div>
              <div class="form-wrap form-button">
                <button class="button button-block button-secondary" type="submit">search</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once('include/footer.php'); ?>