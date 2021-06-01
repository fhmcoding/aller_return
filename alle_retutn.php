<?php
if( $this->session->userdata('client_id') == '3509' ){
    //echo $highest_price."<br>";
    //var_dump($results);
    //die();
}
?>
<!-- START: MODIFY SEARCH -->
<?php //die(var_dump($results)); ?>
<!-- 
<div class="modify-search modify-flight">
    <div class="container clear-padding"> -->
        <!-- <form >
            <div class="col-md-2 col-sm-6">
                <div class="form-gp">
                    <label>Leaving From</label>
                    <div class="input-group margin-bottom-sm">
                        <input type="text" name="departure_city" value="<?= isset($this->session->userdata('last_flight_search')['from']) ? $this->session->userdata('last_flight_search')['from'] : ''  ?>" class="form-control" required placeholder="E.g. London">
                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="form-gp">
                    <label>Leaving To</label>
                    <div class="input-group margin-bottom-sm">
                        <input type="text" name="destination_city" value="<?= isset($this->session->userdata('last_flight_search')['to']) ? $this->session->userdata('last_flight_search')['to'] : ''  ?>" class="form-control" required placeholder="E.g. New York">
                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="form-gp">
                    <label>Departure</label>
                    <div class="input-group margin-bottom-sm">
                        <input type="text" id="departure_date" value="<?= isset($this->session->userdata('last_flight_search')['dep_time']) ? date('m/d/Y', strtotime($this->session->userdata('last_flight_search')['dep_time'])) : ''  ?>" name="departure_date" class="form-control" required placeholder="MM/DD/YYYY">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="form-gp">
                    <label>Return</label>
                    <div class="input-group margin-bottom-sm">
                        <input type="text" id="return_date" name="return_date" class="form-control" required placeholder="DD/MM/YYYY">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 col-xs-3">
                <div class="form-gp">
                    <label>Adult</label>
                    <select class="selectpicker">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 col-xs-3">
                <div class="form-gp">
                    <label>Child</label>
                    <select class="selectpicker">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="form-gp">
                    <button type="submit" class="modify-search-button btn transition-effect">MODIFY SEARCH</button>
                </div>
            </div>
        </form> -->
    <!-- </div>
</div> -->
<!-- END: MODIFY SEARCH -->

<!-- START: LISTING AREA-->
<div class="content_flight" style="background-color: #eee;padding:30px 0px;">
<div class="container">
    <div class="row flight_content">
        <!-- START: FILTER AREA -->
        <div class="col-md-3 clear-padding">
          <div class="sticky">
          <aside class="aside-filter" style="margin-top:-10px;">
                <div class="aside-filter-head" style="border-top-right-radius: 5px !important;border-top-left-radius: 5px !important;">
                  <h5><?= $n_results ?> Result Found.   </h5>
                </div>				
                <div class="aside-filter-body">
                    <div class="price-filter filter">
                        <h5>Price</h5>
                        <p>
                            <label></label>
                            <input type="text" id="amount" readonly>
                        </p>
                        <div id="price-range"></div>
                    </div>
                    <div class="airline aside-filter-body-item airline-filter">
                      <h5> Airline </h5>  
                      <?php foreach($airlines as $al): ?>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="<?= $al ?>" id="airline<?= $al ?>" checked="checked">
                          <label class="form-check-label" for="<?= $al ?>" id="airline<?= $al ?>">
                            <img src="/v2/assets/images/airline/<?= $al ?>.gif" alt="cruise"  style="width: 40px;position: relative;top: -4px;"> <span><?= $al ?></span>
                          </label>
                        </div>
                      <?php endforeach; ?>         
                    </div>     
                    <div class="stop-filter aside-filter-body-item" >
                      <h5> Stops</h5>
                      <div class="form-radio">
                        <input class="form-radio-input stops" type="radio" name="options" value="0" id="option1">
                        <label class="form-radio-label  " for="option1">
                          0 Stop
                        </label>
                      </div>
                      <div class="form-radio">
                        <input class="form-radio-input stops"  type="radio" name="options" value="1" id="option2">
                        <label class="form-radio-label " for="option2">
                          +1 Stops
                        </label>
                      </div>
                      <div class="form-radio">
                        <input class="form-radio-input stops" type="radio" name="options" value="2" id="option3">
                        <label class="form-radio-label " for="option3">
                          +2 StopS
                        </label>
                      </div>
                      <div class="form-radio">
                        <input class="form-radio-input stops" type="radio" name="options" value="-1" id="option4">
                        <label class="form-radio-label " for="option4">
                          All Result
                        </label>
                      </div>
                    </div>		
                </div>
              </aside>
          </div>
        </div>
        <!-- END: FILTER AREA -->
        <div class="col-md-9">
            <div class="agine-serche d-flex">
                <span></span>
                <a href="<?=site_url('/') ?>" style="display: flex;align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> 
                    <span class="mx-1">New Search</span> 
                </a>
            </div>
        <?php if( $results->count_a > 0 && $results->count_r > 0 ): ?>
            <div class="col-md-12 mb-25" id="rt-separate" style="padding: 0px !important;margin: 0px !important;">
                <h3 style="margin-left: 15px; margin-top: 0px; font-size: 22px;">Meilleure flexibilité</h3>
                <div class="flight-listing" style="max-height: 280px !important;overflow-x: hidden;">
                    <div class="clearfix"></div>
                    <!-- START: DIRECT FLIGHT ONE WAY -->
                    <div class="row">
                        <!-- Going flights listing -->
                        <div class="col-md-6 pl-0">
                            <?php foreach($results->flight_data as $flight): ?>
                                <!-- data amad aller -->
                                <?php if( $flight->ProviderType == 'AmadeusProvider' && $flight->type_ar == 'A' ): ?>
                                    <?php 
                                        //$provider = $flight->ProviderType == 'Arabia' ? 'AR':'AM'; 
                                        /* if($flight->ProviderType == 'Arabia'){
                                            $provider = 'AR';
                                            $provider_id = 2;
                                        }else{ */
                                            $provider = 'AM';
                                            $provider_id = 1;
                                        //}
                                    ?>
                                    <?php foreach($flight->options as $option):?>
                                            <?php
                                                $departure_time = date("H:i", strtotime($option->segments[0]->DepartureDateTime));
                                                $departure_date = date('l F jS', strtotime($option->segments[0]->DepartureDateTime));
                                                $arrival_time = date("H:i", strtotime($option->segments[count($option->segments)-1]->ArrivalDateTime));
                                                $arrival_date = date('l F jS', strtotime($option->segments[count($option->segments)-1]->ArrivalDateTime));
                                                $stops = count($option->segments) - 1;
                                            ?>
                                        <!-- START: DIRECT FLIGHT ONE WAY -->
                                        <div class="flight-list-v2" style="background-color: #fff!important;margin-bottom:5px !important;" data-airline="<?= $option->segments[0]->OperatingAirline ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="display: block;">
                                            <div class="flight-list-main row">
                                                <div class="col-md-2 col-sm-12 text-center airline" style="padding: 6px 0px;">
                                                    <img width="35" src="<?= site_url('assets/images/airline/'.$option->segments[0]->OperatingAirline) ?>.gif" alt="<?= $option->segments[0]->OperatingAirline ?>">
                                                    <h6 style="margin-bottom: 3px;"><?= $option->segments[0]->OperatingAirline .'-'. $option->segments[0]->FlightNumber?></h6>
                                                    
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 departure">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                    <h3 class="departure-time"><?= $option->segments[0]->DepartureAirport .' '. $departure_time ?></h3>
                                                    <h5 class="bold"><?= $departure_date ?></h5>
                                                    <h5><?= $option->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                                <div class="col-md-4 col-sm-12 stop-duration" style="padding: 6px 18px 7px;z-index: 1 !important;" >
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= $stops ?> Stop</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 destination">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                    <h3 class="destination-time"><?= $option->segments[count($option->segments)-1]->ArrivalAirport .' '. $arrival_time ?></h3>
                                                    <h5 class="bold"><?= $arrival_date ?></h5>
                                                    <h5><?= $option->segments[count($option->segments)-1]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[count($option->segments)-1]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="flight-list-footer">
                                                <div class="clear-padding">
                                                    <input type="radio" class="flight-radio" data-price="<?= $flight->priceInclTaxes ?>" data-global="<?= $flight->GlobalSequenceNumber ?>" data-combination="<?= $option->RefNumber ?>" data-provider="<?= $provider_id ?>" name="flight-going-way"> <?= $provider ?> | 
                                                    <span style="cursor:pointer;" data-toggle="modal" href="<?= site_url('flights/flight_details/') ?><?= $option->RefNumber ?>/<?= $flight->GlobalSequenceNumber ?>" class="flight_details" ><i class="fa fa-info-circle"></i> Details</span> |
                                                    <span><i class="fa fa-plane"></i> <?= $this->session->userdata('last_flight_search')['cabin'] ?></span> |
                                                    <span><i class="fa fa-suitcase"></i> 1 PC</span>
                                                    <div class="pull-right">
                                                        <span style="font-size: 18px;"><?= $this->session->userdata('client_divisa') ?> <?= $flight->priceInclTaxes ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <?php if( $flight->ProviderType == 'Arabia' && $flight->type_ar == 'A'): ?>
                                    <?php 
                                        
                                            $provider = 'AR';
                                            $provider_id = 2;
                                        
                                    ?>
                                    <?php //foreach($flight->options as $option):?>
                                            <?php
                                                $departure_time = date("H:i", strtotime($flight->options[0]->segments[0]->DepartureDateTime));
                                                $departure_date = date('l F jS', strtotime($flight->options[0]->segments[0]->DepartureDateTime));
                                                $arrival_time = date("H:i", strtotime($flight->options[count($flight->options)-1]->segments[0]->ArrivalDateTime));
                                                $arrival_date = date('l F jS', strtotime($flight->options[count($flight->options)-1]->segments[0]->ArrivalDateTime));
                                                $stops = count($flight->options) - 1;
                                            ?>
                                        <!-- START: DIRECT FLIGHT ONE WAY -->
                                        <div class="flight-list-v2" style="background-color: #fff!important;margin-bottom:5px !important;" data-airline="<?= $flight->options[0]->segments[0]->OperatingAirline ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="display: block;">
                                            <div class="flight-list-main row">
                                                <div class="col-md-2 col-sm-12 text-center airline" style="padding: 6px 0px;">
                                                    <img width="35" src="<?= site_url('assets/images/airline/'.$flight->options[0]->segments[0]->OperatingAirline) ?>.gif" alt="<?= $flight->options[0]->segments[0]->OperatingAirline ?>">
                                                    <h6 style="margin-bottom: 3px;"><?= $flight->options[0]->segments[0]->OperatingAirline .'-'. $flight->options[0]->segments[0]->FlightNumber?></h6>
                                                    
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 departure">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                    <h3 class="departure-time"><?= $flight->options[0]->segments[0]->DepartureAirport .' '. $departure_time ?></h3>
                                                    <h5 class="bold"><?= $departure_date ?></h5>
                                                    <h5><?= $flight->options[0]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[0]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                                <div class="col-md-4 col-sm-12 stop-duration" style="padding: 6px 18px 7px;z-index: 1 !important;" >
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= $stops ?> Stop</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 destination">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                    <h3 class="destination-time"><?= $flight->options[count($flight->options)-1]->segments[0]->ArrivalAirport .' '. $arrival_time ?></h3>
                                                    <h5 class="bold"><?= $arrival_date ?></h5>
                                                    <h5><?= $flight->options[count($flight->options)-1]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[count($flight->options)-1]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="flight-list-footer">
                                                <div class="clear-padding">
                                                    <input type="radio" class="flight-radio" data-price="<?= $flight->priceInclTaxes ?>" data-global="<?= $flight->GlobalSequenceNumber ?>" data-combination="<?= $flight->options[0]->RefNumber ?>" data-provider="<?= $provider_id ?>" name="flight-going-way"> <?= $provider ?> | 
                                                    <span style="cursor:pointer;" data-toggle="modal" href="<?= site_url('flights/flight_details/') ?><?= $flight->options[0]->RefNumber ?>/<?= $flight->GlobalSequenceNumber ?>" class="flight_details" ><i class="fa fa-info-circle"></i> Details</span> |
                                                    <span><i class="fa fa-plane"></i> <?= $this->session->userdata('last_flight_search')['cabin'] ?></span> |
                                                    <span><i class="fa fa-suitcase"></i> 1 PC</span>
                                                    <div class="pull-right">
                                                        <span style="font-size: 18px;"><?= $this->session->userdata('client_divisa') ?> <?= $flight->priceInclTaxes ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php //endforeach; ?>
                                <?php endif; ?>


                                <!-- data sht aller -->
                                <?php if($flight->ProviderType == 'SHT' && $flight->type_ar == 'A'): ?>
                                    <?php
                                        $departure_time = $flight->info->horasalida.':'.$flight->info->minsalida;
                                        $departure_date = date('l F jS', strtotime($this->session->userdata('last_flight_search')['dep_time']));
                                        $arrival_time = $flight->info->horallegada.':'.$flight->info->minllegada;
                                        $arrival_date = date('l F jS', strtotime($this->session->userdata('last_flight_search')['dep_time']));
                                        $stops = 0;
                                        $n_vol = explode(' ', $flight->info->nvol)[1];
                                    ?>
                                    <div class="flight-list-v2" style="background-color: #fff!important;margin-bottom:5px !important;" data-airline="<?= $flight->info->codigocompania ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="display: block;">
                                        <div class="flight-list-main row">
                                            <div class="col-md-2 col-sm-12 text-center airline" style="padding: 6px 0px;">
                                                <img width="35" src="<?= site_url('assets/images/airline/'.$flight->info->codigocompania) ?>.gif" alt="<?= $flight->info->codigocompania ?>">
                                                <h6 style="margin-bottom: 3px;"><?= $flight->info->codigocompania .'-'. $n_vol?></h6>
                                            </div>
                                            <div class="col-md-3 col-sm-12 col-xs-12 departure">
                                                <h3><i class="fa fa-plane"></i></h3>
                                                <h3 class="departure-time"><?= $flight->info->origen .' '. $departure_time ?></h3>
                                                <h5 class="bold"><?= $departure_date ?></h5>
                                                <h5></h5>
                                            </div>
                                            <div class="col-md-4 col-sm-12 stop-duration" style="z-index: 1 !important;" style="padding: 6px 18px 7px;z-index: 1 !important;">
                                                <div class="flight-direction">
                                                </div>
                                                <div class="stop">
                                                </div>
                                                <div class="stop-box p-3">
                                                    <span style="font-size: 12px; display: block;"><?= $stops ?> Stop</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 destination">
                                                <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                <h3 class="destination-time"><?= $flight->info->destino .' '. $arrival_time ?></h3>
                                                <h5 class="bold"><?= $arrival_date ?></h5>
                                                <h5></h5>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="flight-list-footer">
                                            <div class="clear-padding">
                                                <input type="radio" class="flight-radio" data-price="<?= $flight->priceInclTaxes ?>" data-global="<?= $flight->GlobalSequenceNumber ?>" data-combination="0" data-provider="0" name="flight-going-way"> SH | 
                                                <span style="cursor:pointer;" data-toggle="modal" href="<?= site_url('flights/flight_details_sht/') ?><?= $flight->GlobalSequenceNumber ?>" class="flight_details"><i class="fa fa-info-circle"></i> Details</span> |
                                                <span><i class="fa fa-plane"></i> <?= $this->session->userdata('last_flight_search')['cabin'] ?></span> |
                                                <span><i class="fa fa-suitcase"></i> 1 PC</span>
                                                <div class="pull-right">
                                                    <span style="font-size: 18px;"><?= $this->session->userdata('client_divisa') ?> <?= $flight->priceInclTaxes ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <!-- Retour flights listing -->
                        <div class="col-md-6 pl-0">
                            <?php foreach($results->flight_data as $flight): ?>
                                <!-- data amad aller -->
                                <?php if( $flight->ProviderType == 'AmadeusProvider' && $flight->type_ar == 'R'): ?>
                                    <?php 
                                            //$provider = $flight->ProviderType == 'Arabia' ? 'AR':'AM'; 
                                            /* if($flight->ProviderType == 'Arabia'){
                                                $provider = 'AR';
                                                $provider_id = 2;
                                            }else{ */
                                                $provider = 'AM';
                                                $provider_id = 1;
                                            //}
                                    ?>
                                    <?php foreach($flight->options as $option):?>
                                            <?php
                                                $departure_time = date("H:i", strtotime($option->segments[0]->DepartureDateTime));
                                                $departure_date = date('l F jS', strtotime($option->segments[0]->DepartureDateTime));
                                                $arrival_time = date("H:i", strtotime($option->segments[count($option->segments)-1]->ArrivalDateTime));
                                                $arrival_date = date('l F jS', strtotime($option->segments[count($option->segments)-1]->ArrivalDateTime));
                                                $stops = count($option->segments) - 1;
                                            ?>
                                        <!-- START: DIRECT FLIGHT ONE WAY -->
                                        <div class="flight-list-v2" style="background-color: #fff!important;margin-bottom:5px !important;"  data-airline="<?= $option->segments[0]->OperatingAirline ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="display: block;">
                                            <div class="flight-list-main row">
                                                <div class="col-md-2 col-sm-12 text-center airline" style="padding: 6px 0px;">
                                                    <img width="35" src="<?= site_url('assets/images/airline/'.$option->segments[0]->OperatingAirline) ?>.gif" alt="<?= $option->segments[0]->OperatingAirline ?>">
                                                    <h6 style="margin-bottom: 3px;"><?= $option->segments[0]->OperatingAirline .'-'. $option->segments[0]->FlightNumber?></h6>
                                                    
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 departure">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                    <h3 class="departure-time"><?= $option->segments[0]->DepartureAirport .' '. $departure_time ?></h3>
                                                    <h5 class="bold"><?= $departure_date ?></h5>
                                                    <h5><?= $option->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                                <div class="col-md-4 col-sm-12 stop-duration" style="padding: 6px 18px 7px;z-index: 1 !important;">
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= $stops ?> Stop</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 destination">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                    <h3 class="destination-time"><?= $option->segments[count($option->segments)-1]->ArrivalAirport .' '. $arrival_time ?></h3>
                                                    <h5 class="bold"><?= $arrival_date ?></h5>
                                                    <h5><?= $option->segments[count($option->segments)-1]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[count($option->segments)-1]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="flight-list-footer">
                                                <div class="clear-padding">
                                                    <input type="radio" class="flight-radio" data-price="<?= $flight->priceInclTaxes ?>" data-global="<?= $flight->GlobalSequenceNumber ?>" data-combination="<?= $option->RefNumber ?>" data-provider="<?= $provider_id ?>" name="flight-return-way"> <?= $provider ?> | 
                                                    <span style="cursor:pointer;" data-toggle="modal" href="<?= site_url('flights/flight_details/') ?><?= $option->RefNumber ?>/<?= $flight->GlobalSequenceNumber ?>" class="flight_details"><i class="fa fa-info-circle"></i> Details</span> |
                                                    <span><i class="fa fa-plane"></i> <?= $this->session->userdata('last_flight_search')['cabin'] ?></span> |
                                                    <span><i class="fa fa-suitcase"></i> 1 PC</span>
                                                    <div class="pull-right">
                                                        <span style="font-size: 18px;"><?= $this->session->userdata('client_divisa') ?> <?= $flight->priceInclTaxes ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <?php if( $flight->ProviderType == 'Arabia' && $flight->type_ar == 'R'): ?>
                                    <?php 
                                            //$provider = $flight->ProviderType == 'Arabia' ? 'AR':'AM'; 
                                            
                                                $provider = 'AR';
                                                $provider_id = 2;
                                            
                                    ?>
                                    <?php //foreach($flight->options as $option):?>
                                            <?php
                                                $departure_time = date("H:i", strtotime($flight->options[0]->segments[0]->DepartureDateTime));
                                                $departure_date = date('l F jS', strtotime($flight->options[0]->segments[0]->DepartureDateTime));
                                                $arrival_time = date("H:i", strtotime($flight->options[count($flight->options)-1]->segments[0]->ArrivalDateTime));
                                                $arrival_date = date('l F jS', strtotime($flight->options[count($flight->options)-1]->segments[0]->ArrivalDateTime));
                                                $stops = count($flight->options) - 1;
                                            ?>
                                        <!-- START: DIRECT FLIGHT ONE WAY -->
                                        <div class="flight-list-v2" style="background-color: #fff!important;margin-bottom:5px !important;"  data-airline="<?= $flight->options[0]->segments[0]->OperatingAirline ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="display: block;">
                                            <div class="flight-list-main row">
                                                <div class="col-md-2 col-sm-12 text-center airline" style="padding: 6px 0px;">
                                                    <img width="35" src="<?= site_url('assets/images/airline/'.$flight->options[0]->segments[0]->OperatingAirline) ?>.gif" alt="<?= $flight->options[0]->segments[0]->OperatingAirline ?>">
                                                    <h6 style="margin-bottom: 3px;"><?= $flight->options[0]->segments[0]->OperatingAirline .'-'. $flight->options[0]->segments[0]->FlightNumber?></h6>
                                                    
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 departure">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                    <h3 class="departure-time"><?= $flight->options[0]->segments[0]->DepartureAirport .' '. $departure_time ?></h3>
                                                    <h5 class="bold"><?= $departure_date ?></h5>
                                                    <h5><?= $flight->options[0]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[0]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                                <div class="col-md-4 col-sm-12 stop-duration" style="padding: 6px 18px 7px;z-index: 1 !important;">
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= $stops ?> Stop</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 destination">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                    <h3 class="destination-time"><?= $flight->options[count($flight->options)-1]->segments[0]->ArrivalAirport .' '. $arrival_time ?></h3>
                                                    <h5 class="bold"><?= $arrival_date ?></h5>
                                                    <h5><?= $flight->options[count($flight->options)-1]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[count($flight->options)-1]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                    <h5></h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="flight-list-footer">
                                                <div class="clear-padding">
                                                    <input type="radio" class="flight-radio" data-price="<?= $flight->priceInclTaxes ?>" data-global="<?= $flight->GlobalSequenceNumber ?>" data-combination="<?= $flight->options[0]->RefNumber ?>" data-provider="<?= $provider_id ?>" name="flight-return-way"> <?= $provider ?> | 
                                                    <span style="cursor:pointer;" data-toggle="modal" href="<?= site_url('flights/flight_details/') ?><?= $flight->options[0]->RefNumber ?>/<?= $flight->GlobalSequenceNumber ?>" class="flight_details"><i class="fa fa-info-circle"></i> Details</span> |
                                                    <span><i class="fa fa-plane"></i> <?= $this->session->userdata('last_flight_search')['cabin'] ?></span> |
                                                    <span><i class="fa fa-suitcase"></i> 1 PC</span>
                                                    <div class="pull-right">
                                                        <span style="font-size: 18px;"><?= $this->session->userdata('client_divisa') ?> <?= $flight->priceInclTaxes ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php //endforeach; ?>
                                <?php endif; ?>
                                <!-- data sht aller -->
                                <?php if($flight->ProviderType == 'SHT' && $flight->type_ar == 'R'): ?>
                                    <?php
                                        $departure_time = $flight->info->horasalida.':'.$flight->info->minsalida;
                                        $departure_date = date('l F jS', strtotime($this->session->userdata('last_flight_search')['ret_time']));
                                        $arrival_time = $flight->info->horallegada.':'.$flight->info->minllegada;
                                        $arrival_date = date('l F jS', strtotime($this->session->userdata('last_flight_search')['ret_time']));
                                        $stops = 0;
                                        $n_vol = explode(' ', $flight->info->nvol)[1];
                                    ?>
                                    <div class="flight-list-v2" style="background-color: #fff!important;margin-bottom:5px !important;" data-airline="<?= $flight->info->codigocompania ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="display: block;">
                                        <div class="flight-list-main">
                                            <div class="col-md-2 col-sm-12 text-center airline" style="padding: 6px 0px;">
                                                <img width="35" src="<?= site_url('assets/images/airline/'.$flight->info->codigocompania) ?>.gif" alt="<?= $flight->info->codigocompania ?>">
                                                <h6 style="margin-bottom: 3px;"><?= $flight->info->codigocompania .'-'. $n_vol?></h6>
                                            </div>
                                            <div class="col-md-3 col-sm-12 col-xs-12 departure">
                                                <h3><i class="fa fa-plane"></i></h3>
                                                <h3 class="departure-time"><?= $flight->info->origen .' '. $departure_time ?></h3>
                                                <h5 class="bold"><?= $departure_date ?></h5>
                                                <h5></h5>
                                            </div>
                                            <div class="col-md-4 col-sm-12 stop-duration" style="padding: 6px 18px 7px;z-index: 1 !important;" >
                                                <div class="flight-direction">
                                                </div>
                                                <div class="stop">
                                                </div>
                                                <div class="stop-box p-3">
                                                    <span style="font-size: 12px; display: block;"><?= $stops ?> Stop</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 destination">
                                                <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                <h3 class="destination-time"><?= $flight->info->destino .' '. $arrival_time ?></h3>
                                                <h5 class="bold"><?= $arrival_date ?></h5>
                                                <h5></h5>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="flight-list-footer">
                                            <div class="clear-padding">
                                                <input type="radio" class="flight-radio" data-price="<?= $flight->priceInclTaxes ?>" data-global="<?= $flight->GlobalSequenceNumber ?>" data-combination="0" data-provider="0" name="flight-return-way"> SH | 
                                                <span style="cursor:pointer;" data-toggle="modal" href="<?= site_url('flights/flight_details_sht/') ?><?= $flight->GlobalSequenceNumber ?>" class="flight_details"><i class="fa fa-info-circle"></i> Details</span> |
                                                <span><i class="fa fa-plane"></i> <?= $this->session->userdata('last_flight_search')['cabin'] ?></span> |
                                                <span><i class="fa fa-suitcase"></i> 1 PC</span>
                                                <div class="pull-right">
                                                    <span style="font-size: 18px;"><?= $this->session->userdata('client_divisa') ?> <?= $flight->priceInclTaxes ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END: FLIGHT LIST VIEW -->
                </div>
                
                <div id="bookings-ammount-area" class="listing-footer d-hide">
                    <div class="arrow-top"></div>   
                    <div>
                        <span id="total-select-flight">00.00 DH</span>   
                        <span style="cursor:pointer;" data-toggle="modal" href="" class="flight_details" id="detail-link">
                            <i class="fa fa-info-circle"></i> Details
                        </span>
                        <a class="btn btn-primary book-button" href="" id="book-btn">Book</a>
                        
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- START: INDIVIDUAL LISTING AREA -->
        
        <div class="col-md-12 flight-listing flight-listing-v3">
            <h3 style="margin-left: 15px; margin-top: 0px; margin-bottom: 0px; font-size: 22px;">Meilleure prix</h3>
            <!-- START: LOWEST FARE SLIDER -->
            <!-- <div class="lowest-fare-slider col-md-12">
                <div class="owl-carousel" id="lowest-fare">
                    <div class="text-center">
                        <h5>22 Aug</h5>
                        <span>From $129</span>
                    </div>
                    <div class="text-center">
                        <h5>23 Aug</h5>
                        <span>From $119</span>
                    </div>
                    <div class="text-center">
                        <h5>24 Aug</h5>
                        <span>From $299</span>
                    </div>
                    <div class="text-center">
                        <h5>25 Aug</h5>
                        <span>From $200</span>
                    </div>
                    <div class="text-center">
                        <h5>26 Aug</h5>
                        <span>From $150</span>
                    </div>
                    <div class="text-center">
                        <h5>27 Aug</h5>
                        <span>From $300</span>
                    </div>
                    <div class="text-center">
                        <h5>28 Aug</h5>
                        <span>From $400</span>
                    </div>
                    <div class="text-center">
                        <h5>29 Aug</h5>
                        <span>From $500</span>
                    </div>
                </div>
            </div> -->
            <!-- END: LOWEST FARE SLIDER -->

            <!-- START: SORT AREA -->
            <!-- <div class="sort-area col-md-12">
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="selectpicker">
                        <option>Price</option>
                        <option> Low to High</option>
                        <option> High to Low</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="selectpicker">
                        <option>Airline</option>
                        <option> Vistara</option>
                        <option> Indigo</option>
                        <option> Jet</option>
                        <option> Spicejet</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="selectpicker">
                        <option>User Rating</option>
                        <option> Low to High</option>
                        <option> High to Low</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="selectpicker">
                        <option>Name</option>
                        <option> Ascending</option>
                        <option> Descending</option>
                    </select>
                </div>
            </div> -->
            <!-- END: SORT AREA -->
            <div class="clearfix"></div>
            <div class="text-center no-results" style="margin-top:15px;display:none;">
                <h5>No results to show.</h5>
            </div>
            <div id="list-flight-view-v3 row">
            
            <?php foreach($results->flight_data as $flight): ?>
                <?php if( $flight->ProviderType == 'AmadeusProvider' && $flight->type_ar == 'AR' ): ?>
                    <?php 
                        //var_dump($flight);
                        //$provider = $flight->ProviderType == 'Arabia' ? 'AR':'AM'; 
                        if($flight->ProviderType == 'Arabia'){
                            $provider = 'AR';
                            $provider_id = 2;
                        }else{
                            $provider = 'AM';
                            $provider_id = 1;
                        }
                    ?>
                    <?php foreach($flight->options as $option):?>
                    
                        <?php
                        //var_dump($option);
                            $ref = $option->RefNumber;
                            $direction = $option->DirectionId;
                            if($direction != 0) continue;
                            $first_flight = $option;
                            foreach ($flight->options as $key => $value) {
                            if($value->DirectionId == 1 && $value->RefNumber == $ref){
                                    $return_flight = $value;
                            }
                            }
                            if(!isset($first_flight) || !isset($return_flight)){
                                continue;
                            }
                        ?>
                        <?php
                            $departure_time = date("H:i", strtotime($first_flight->segments[0]->DepartureDateTime));
                            $departure_date = date('l F jS', strtotime($first_flight->segments[0]->DepartureDateTime));
                            $arrival_time = date("H:i", strtotime($first_flight->segments[count($first_flight->segments)-1]->ArrivalDateTime));
                            $arrival_date = date('l F jS', strtotime($first_flight->segments[count($first_flight->segments)-1]->ArrivalDateTime));

                            $departure_time2 = date("H:i", strtotime($return_flight->segments[0]->DepartureDateTime));
                            $departure_date2 = date('l F jS', strtotime($return_flight->segments[0]->DepartureDateTime));
                            $arrival_time2 = date("H:i", strtotime($return_flight->segments[count($return_flight->segments)-1]->ArrivalDateTime));
                            $arrival_date2 = date('l F jS', strtotime($return_flight->segments[count($return_flight->segments)-1]->ArrivalDateTime));

                            $total_fight_time = (strtotime($return_flight->segments[count($return_flight->segments)-1]->ArrivalDateTime) - strtotime($first_flight->segments[0]->DepartureDateTime));
                            $Start = new DateTime($first_flight->segments[0]->DepartureDateTime);
                            $Finish = new DateTime($return_flight->segments[count($return_flight->segments)-1]->ArrivalDateTime);
                            //$Interval = $Start->format('U') - $Finish->format('U');
                            $Interval = $Start->diff($Finish);
                            //die(var_dump($Interval));
                            //$Hours = gmdate("H:i", $Interval);
                            $stops = count($option->segments) - 1;
                            $RefNumber = $flight->ProviderType == 'Arabia' ? '0' : $option->RefNumber;
                        ?>
                        <div class="flight-list-view" style="background-color: #fff!important;margin-bottom:5px !important;" data-airline="<?= $option->segments[0]->OperatingAirline ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="margin-top: 15px; border: 1px solid #e6e6e6; display: block;">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center clear-padding flight-desc">
                                <div class="row"> 
                                    <div class="col-md-10"> 
                                        <div class="take-off">
                                            <div class="row">
                                                <div class="col-md-2 aireline">
                                                    <img width="25" src="<?= site_url('assets/images/airline/'.$option->segments[0]->OperatingAirline) ?>.gif" alt="cruise">
                                                    <?php if($option->segments[0]->OperatingAirline != $option->segments[count($option->segments)-1]->OperatingAirline){ ?>
                                                        <img width="25" src="<?= site_url('assets/images/airline/'.$option->segments[count($option->segments)-1]->MarketingAirline) ?>.gif" alt="cruise">
                                                    <?php }?>
                                                    <h6><?= $option->segments[0]->OperatingAirline .'-'. $option->segments[0]->FlightNumber?></h6>
                                                </div>
                                                <div class="col-md-3 departure">
                                                    <h4><b><?= $first_flight->segments[0]->DepartureAirport .' '. $departure_time ?></b></h4>
                                                    <h5><?= $departure_date ?></h5>
                                                    <h5><?= $option->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                </div>
                                                <div class="col-md-2 col-sm-12 stop-duration" style="padding: 2px 5px;z-index: 1;">
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= count($option->segments) -1; ?> <?= count($option->segments) -1 > 1 ? 'Stops' : 'Stop' ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                </div>
                                                <div class="col-md-3 destination">
                                                    <h4><b><?= $first_flight->segments[count($first_flight->segments)-1]->ArrivalAirport .' '. $arrival_time ?></b></h4>
                                                    <h5><?= $departure_date ?></h5>
                                                    <h5><?= $option->segments[count($first_flight->segments)-1]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[count($first_flight->segments)-1]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="landing">
                                            <div class="row">
                                                <div class="col-md-2 aireline">
                                                    <img width="25" src="<?= site_url('assets/images/airline/'.$option->segments[0]->OperatingAirline) ?>.gif" alt="cruise">
                                                    <?php if($option->segments[0]->OperatingAirline != $option->segments[count($option->segments)-1]->OperatingAirline){ ?>
                                                        <img width="25" src="<?= site_url('assets/images/airline/'.$option->segments[count($option->segments)-1]->MarketingAirline) ?>.gif" alt="cruise">
                                                    <?php }?>
                                                    <h6><?= $return_flight->segments[0]->OperatingAirline .'-'. $return_flight->segments[0]->FlightNumber?></h6>
                                                </div>
                                                <div class="col-md-3 departure">
                                                    <h4><b><?= $return_flight->segments[0]->DepartureAirport .' '. $departure_time2 ?></b></h4>
                                                    <h5><?= $arrival_date2 ?></h5>
                                                    <h5><?= $option->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                </div>
                                                <div class="col-md-2 col-sm-12 stop-duration" style="padding: 2px 5px;z-index: 1;">
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= count($option->segments) -1; ?> <?= count($option->segments) -1 > 1 ? 'Stops' : 'Stop' ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                </div>
                                                <div class="col-md-3 destination">
                                                    <h4><b><?= $return_flight->segments[count($return_flight->segments)-1]->ArrivalAirport .' '. $arrival_time2 ?></b></h4>
                                                    <h5><?= $arrival_date2 ?></h5>
                                                    <h5><?= $option->segments[count($return_flight->segments)-1]->DepartureAirportTerminal ? 'Terminal: '.$option->segments[count($return_flight->segments)-1]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-book text-center clear-padding">       
                                        </div>
                                    </div>    
                                    <div class="col-md-2">
                                        <div class="price">
                                            <h4><?= $this->session->userdata('client_divisa') . ' ' . $flight->priceInclTaxes ?></h4>
                                        </div>
                                        <div class="book">
                                            <a href="<?= site_url('flights/booking/') ?><?= $provider_id ?>/<?= $flight->GlobalSequenceNumber ?>/<?= $RefNumber ?>">BOOK</a>
                                            <h6 data-toggle="modal" data-target="#exampleModal" href="<?= site_url('flights/flight_details/') ?><?= $RefNumber ?>/<?= $flight->GlobalSequenceNumber ?>" class="flight_details" >Show Details <i class="fa fa-plus"></i> | <?= $provider ?> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php unset($return_flight); ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if( $flight->ProviderType == 'Arabia' && $flight->type_ar == 'AR' ): ?>
                    <?php 
                            $provider = 'AR';
                            $provider_id = 2;
                    ?>
                    <?php //foreach($flight->options as $option):?>
                    
                        <?php
                        //var_dump($option);
                            //$ref = $option->RefNumber;
                            /* $direction = $option->DirectionId;
                            if($direction != 0) continue;
                            $first_flight = $option;
                            foreach ($flight->options as $key => $value) {
                                if($value->DirectionId == 1 && $value->RefNumber == $ref){
                                        $return_flight = $value;
                                }
                            } */
                            
                        ?>
                        <?php
                            $departure_time = date("H:i", strtotime($flight->options[0]->segments[0]->DepartureDateTime));
                            $departure_date = date('l F jS', strtotime($flight->options[0]->segments[0]->DepartureDateTime));
                            $arrival_time = date("H:i", strtotime($flight->options[(count($flight->options)/2)-1]->segments[0]->ArrivalDateTime));
                            $arrival_date = date('l F jS', strtotime($flight->options[(count($flight->options)/2)-1]->segments[0]->ArrivalDateTime));

                            $departure_time2 = date("H:i", strtotime($flight->options[(count($flight->options)/2)]->segments[0]->DepartureDateTime));
                            $departure_date2 = date('l F jS', strtotime($flight->options[(count($flight->options)/2)]->segments[0]->DepartureDateTime));
                            $arrival_time2 = date("H:i", strtotime($flight->options[(count($flight->options))-1]->segments[0]->ArrivalDateTime));
                            $arrival_date2 = date('l F jS', strtotime($flight->options[(count($flight->options))-1]->segments[0]->ArrivalDateTime));

                            //$total_fight_time = (strtotime($return_flight->segments[count($return_flight->segments)-1]->ArrivalDateTime) - strtotime($first_flight->segments[0]->DepartureDateTime));
                            //$Start = new DateTime($first_flight->segments[0]->DepartureDateTime);
                            //$Finish = new DateTime($return_flight->segments[count($return_flight->segments)-1]->ArrivalDateTime);
                            //$Interval = $Start->format('U') - $Finish->format('U');
                            //$Interval = $Start->diff($Finish);
                            //die(var_dump($Interval));
                            //$Hours = gmdate("H:i", $Interval);
                            $stops = count($flight->options) - 1;
                            $RefNumber = '0';
                        ?>
                        <div class="flight-list-view" style="background-color: #fff!important;margin-bottom:5px !important;" data-airline="<?= $flight->options[0]->segments[0]->OperatingAirline ?>" data-price="<?= $flight->priceInclTaxes ?>" data-stops="<?= $stops ?>" style="margin-top: 15px; border: 1px solid #e6e6e6; display: block;">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center clear-padding flight-desc">
                                <div class="row"> 
                                    <div class="col-md-10"> 
                                        <div class="take-off">
                                            <div class="row">
                                                <div class="col-md-2 aireline">
                                                    <img width="25" src="<?= site_url('assets/images/airline/'.$flight->options[0]->segments[0]->OperatingAirline) ?>.gif" alt="cruise">
                                                    <?php if($flight->options[0]->segments[0]->OperatingAirline != $flight->options[(count($flight->options)/2)-1]->segments[0]->OperatingAirline){ ?>
                                                        <img width="25" src="<?= site_url('assets/images/airline/'.$flight->options[(count($flight->options)/2)-1]->segments[0]->MarketingAirline) ?>.gif" alt="cruise">
                                                    <?php }?>
                                                    <h6><?= $flight->options[0]->segments[0]->OperatingAirline .'-'. $flight->options[0]->segments[0]->FlightNumber?></h6>
                                                </div>
                                                <div class="col-md-3 departure">
                                                    <h4><b><?= $flight->options[0]->segments[0]->DepartureAirport .' '. $departure_time ?></b></h4>
                                                    <h5><?= $departure_date ?></h5>
                                                    <h5><?= $flight->options[0]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[0]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                </div>
                                                <div class="col-md-2 col-sm-12 stop-duration" style="padding: 2px 5px;z-index: 1;">
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= (count($flight->options)/2)-1; ?> <?= (count($flight->options)/2)-1 > 1 ? 'Stops' : 'Stop' ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                </div>
                                                <div class="col-md-3 destination">
                                                    <h4><b><?= $flight->options[(count($flight->options)/2)-1]->segments[0]->ArrivalAirport .' '. $arrival_time ?></b></h4>
                                                    <h5><?= $departure_date ?></h5>
                                                    <h5><?= $flight->options[(count($flight->options)/2)-1]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[(count($flight->options)/2)-1]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="landing">
                                            <div class="row">
                                                <div class="col-md-2 aireline">
                                                    <img width="25" src="<?= site_url('assets/images/airline/'.$flight->options[(count($flight->options)/2)]->segments[0]->OperatingAirline) ?>.gif" alt="cruise">
                                                    <?php if($flight->options[(count($flight->options)/2)]->segments[0]->OperatingAirline != $flight->options[(count($flight->options))-1]->segments[0]->OperatingAirline){ ?>
                                                        <img width="25" src="<?= site_url('assets/images/airline/'.$flight->options[(count($flight->options))-1]->segments[0]->MarketingAirline) ?>.gif" alt="cruise">
                                                    <?php }?>
                                                    <h6><?= $flight->options[(count($flight->options)/2)]->segments[0]->OperatingAirline .'-'. $flight->options[(count($flight->options)/2)]->segments[0]->FlightNumber?></h6>
                                                </div>
                                                <div class="col-md-3 departure">
                                                    <h4><b><?= $flight->options[(count($flight->options)/2)]->segments[0]->DepartureAirport .' '. $departure_time2 ?></b></h4>
                                                    <h5><?= $arrival_date2 ?></h5>
                                                    <h5><?= $flight->options[(count($flight->options)/2)]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[(count($flight->options)/2)]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane"></i></h3>
                                                </div>
                                                <div class="col-md-2 col-sm-12 stop-duration" style="padding: 2px 5px;z-index: 1;">
                                                    <div class="flight-direction">
                                                    </div>
                                                    <div class="stop">
                                                    </div>
                                                    <div class="stop-box p-3">
                                                        <span style="font-size: 12px; display: block;"><?= (count($flight->options)/2)-1; ?> <?= (count($flight->options)/2)-1 > 1 ? 'Stops' : 'Stop' ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 aireicon">
                                                    <h3><i class="fa fa-plane fa-rotate-90"></i></h3>
                                                </div>
                                                <div class="col-md-3 destination">
                                                    <h4><b><?= $flight->options[(count($flight->options)-1)]->segments[0]->ArrivalAirport .' '. $arrival_time2 ?></b></h4>
                                                    <h5><?= $arrival_date2 ?></h5>
                                                    <h5><?= $flight->options[(count($flight->options)-1)]->segments[0]->DepartureAirportTerminal ? 'Terminal: '.$flight->options[(count($flight->options)-1)]->segments[0]->DepartureAirportTerminal : '' ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-book text-center clear-padding">       
                                        </div>
                                    </div>    
                                    <div class="col-md-2">
                                        <div class="price">
                                            <h4><?= $this->session->userdata('client_divisa') . ' ' . $flight->priceInclTaxes ?></h4>
                                        </div>
                                        <div class="book">
                                            <a href="<?= site_url('flights/booking/') ?><?= $provider_id ?>/<?= $flight->GlobalSequenceNumber ?>/<?= $RefNumber ?>">BOOK</a>
                                            <h6 data-toggle="modal" data-target="#exampleModal" href="<?= site_url('flights/flight_details/') ?><?= $RefNumber ?>/<?= $flight->GlobalSequenceNumber ?>" class="flight_details" >Show Details <i class="fa fa-plus"></i> | <?= $provider ?> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php //unset($return_flight); ?>
                    <?php //endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
            <div class="clearfix"></div>
            <!-- END: FLIGHT LIST VIEW -->

        </div>
        </div>
        <!-- END: INDIVIDUAL LISTING AREA -->
    </div>
</div>
</div>
<!-- START: FLIGHT MODAL -->
<div class="modal fade flight_details_modal" tabindex="-1" role="dialog" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>

<script>
$('.flight_details').on('click', function(e){
  $('.flight_details_modal').modal('show').find('.modal-body').load($(this).attr('href'));
});
</script>
    <script>
    // Get TZ offset
    var x = new Date();
    var currentTimeZoneOffset = x.getTimezoneOffset() * 60 + 3600;
    // Set the date we're counting down to
    var countDownDate = <?= ($this->session->userdata('session_timestamp') + 900 )* 1000 ?> - currentTimeZoneOffset;
    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        //document.location = "/flights/logout";
      }
    }, 1000);
</script>
<script>
	/* Price Range Slider RT */
	var min = 0;
	var max = parseFloat('<?= $highest_price ?>') + 100;
	var stops = -1;
	runFilter = function(min, max){
		// var divs = $(".flight-listing").children('.flight-list-view');
		var divs = $('.flight-list-view');
        //console.log(divs)
		matches = divs.filter(function(index, div, stops){
			if(
				$(div).data('price') <= max && 
				$(div).data('price') >= min &&
				$('input#airline' + $(div).data('airline') ).is(':checked') &&
				stopsFilter(div)
			 ){
				return true;
			}
			return false;
		});
		$('.flight-list-view').hide();
		matches.show();
		if(matches.length == 0){
			$(".no-results").show();
		}else{
			$(".no-results").hide();
		}
	}
	stopsFilter = function(div){
		if(stops == -1){
			return true;
		}else if(stops == 0){
			return stops == parseInt($(div).data('stops'));
		}else if(stops == 1){
			return stops == parseInt($(div).data('stops'));
		}else{
			return parseInt($(div).data('stops')) >= 2;
		}
	}
	$(function() {
		"use strict";
		$( "#price-range" ).slider({
		  range: true,
		  min: 0,
		  max: parseFloat('<?= $highest_price ?>') + 100,
		  values: [ 0, <?= $highest_price + 100 ?> ],
		  slide: function( event, ui ) {
				// on change
				$( "#amount" ).val( "MAD " + ui.values[ 0 ] + " - $ " + ui.values[ 1 ] );
				runFilter(ui.values[ 0 ], ui.values[ 1 ]);
				min = ui.values[ 0 ];
				max = ui.values[ 1 ];
			}
		});

		$( "#amount" ).val( "MAD " + $( "#price-range" ).slider( "values", 0 ) +
		  " - MAD " + $( "#price-range" ).slider( "values", 1 ) );
	});
	// Event listeners
	$('.airline-filter').click(function(){
		runFilter(min, max);
	});
	$('.stops').click(function(){
		stops = $(this).val();
        
		runFilter(min, max);
	});
	// init filter
	runFilter(min, max);
	
	$('.flight-radio').change(function () {
	    if($(this).prop('checked')) {
            $('input[name='+ $(this).attr('name') + ']').parent().parent().parent().removeClass('flight-list-v2-actived');
            var parentBox = $(this).parent().parent().parent();
            parentBox.addClass('flight-list-v2-actived');
        }
        //alert("test");
	    var total = parseFloat($('input[name=flight-going-way]:checked').data('price')) + parseFloat($('input[name=flight-return-way]:checked').data('price'));
        var url = "<?= site_url('flights/bookingrt/') ?>"+$('input[name=flight-going-way]:checked').data('provider')+'/'+$('input[name=flight-going-way]:checked').data('global')+'/'+$('input[name=flight-going-way]:checked').data('combination')+'/'+$('input[name=flight-return-way]:checked').data('provider')+'/'+$('input[name=flight-return-way]:checked').data('global')+'/'+$('input[name=flight-return-way]:checked').data('combination');
        //global combination provider
        console.log(url);
        if (($('input[name=flight-going-way]:checked').length == 1) && ($('input[name=flight-return-way]:checked').length == 1)) {
            $('#total-select-flight').html(total + ' MAD');
            //total-select-flight book-btn
            $('#book-btn').attr("href",url);
            /* $('#total-select-flight').removeClass('d-hide');
            $('#book-btn').removeClass('d-hide'); */
            $('.listing-footer').removeClass('d-hide');
        } else {
            /* $('#total-select-flight').addClass('d-hide');
            $('#book-btn').addClass('d-hide'); */
            $('.listing-footer').addClass('d-hide');
        }
    });
    
    
</script>
