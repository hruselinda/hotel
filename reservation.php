<!--the reservation form -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="reservation">
                <form data-parsley-validate="">
                    <div class="form-group col-md-2 col-sm-4 col-xs-6">
                           <label for="input_email">E-mail <i class="fa fa-info-circle" data-toggle="tooltip" title="Please, enter your e-mail"></i></label><br />
                           <input class="form-control" 
                           name="email" 
                           placeholder="some@example.com"
                           data-parsley-trigger="change" 
                           data-parsley-required="true" 
                           data-parsley-required-message="Please, enter your e-mail" 
                           data-parsley-type="email"
                           data-parsley-type-message="Please, type valid e-mail"
                           autocomplete="on">
                    </div>
                    <div class="form-group col-md-2 col-sm-4 col-xs-6">
                        <label for="rooms">Room type <i class="fa fa-info-circle"  data-toggle="tooltip" title="You can choose a flat or the whole hotel"></i></label><br />
                        <select class="form-control" 
                                name="room"
                                data-parsley-required="true"  
                                data-parsley-required-message="Select a room type">
                            <option value="" disabled="disabled"></option>
                            <option value="Studio">Studio</option>
                            <option value="Double room">Double room</option>
                            <option value="The whole hotel">The whole hotel</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 col-sm-4 col-xs-6">
                        <label for="input_checkin">Check-in: <a href="#" data-toggle="tooltip" title="Check-in starts from 14:00 o'clock"><i class="fa fa-info-circle"></i></a></label><br />
                        <input id="from" 
                               class="form-control" 
                               name="from" 
                               type="text" 
                               placeholder="check-in"
                               autocomplete="off"
                               data-parsley-required="true"  
                               data-parsley-required-message="Please, select a date">
                    </div>
                    <div class="form-group col-md-2 col-sm-4 col-xs-6">
                        <label for="input_checkout">Check-out: <a href="#" data-toggle="tooltip" title="Check-out must be before 12:00 o'clock"><i class="fa fa-info-circle"></i></a></label><br />
                        <input id="to" 
                               class="form-control" 
                               name="to" 
                               type="text" 
                               placeholder="check-out"
                               autocomplete="off"
                               data-parsley-required="true"  
                               data-parsley-required-message="Please, select a date">
                    </div>
                    <!-- number guests reservation form-->
                    <div id="guests" class="form-group col-md-2 col-sm-4 col-xs-6">
                        <label for="number_of_guests">Guests <i class="fa fa-info-circle"  data-toggle="tooltip" title="Click in the field to select"></i></label><br />
                        <div id="guests_c" class="form-control">1
                        </div>
                        <div id="guests_select" class="form-control">
                            <label for="guests_a">Age: 12 + </label>
                            <span class="clearfix"></span>
                            <select id="guests_a" class="form-control" name="guests_a">
                                <option value="1">1 guest</option>
                                <option value="2">2 guests</option>
                                <option value="3">3 guests</option>
                                <option value="4">4 guests</option>
                                <option value="5">5 guests</option>
                                <option value="6">6 guests</option>
                            </select>
                            <label for="guests_b">Age: 0 - 11.99</label>
                            <span class="clearfix"></span>
                            <select id="guests_b" class="form-control" name="guests_b">
                                <option value="0">No guest</option>
                                <option value="1">1 guest</option>
                                <option value="2">2 guests</option>
                                <option value="3">3 guests</option>
                                <option value="4">4 guests</option>
                                <option value="5">5 guests</option>
                                <option value="6">6 guests</option>
                            </select>
                            <span class="clearfix"></span>
                            <button id="guests_btn" class="btn btn-default" type="button">Total guests</button>
                        </div>
                    </div>
                    <div class="form-group col-md-2 col-sm-4 col-xs-6">
                        <input type="submit" class="btn btn-default send_btn" value="BOOK NOW"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


