@extends('layouts.main') @section('content')
<section>
    <div class="container">
        <form id="msform" action="{{ route('booking_submit') }}" method="POST">
            @csrf
            <input type="hidden" name="rt" id="rt" />
            <input type="hidden" name="ml" id="ml" />
            <input type="hidden" name="amt" id="amt" />
            <input type="hidden" name="amt" id="f_p" />
            <input type="hidden" name="amt" id="f_d" />
                        
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"></li>
                <li></li>
                <li></li>
                <!--<li></li>-->
            </ul>
            <!-- fieldsets -->
            <fieldset class="setup-content" id="step-1">
                <h2 class="fs-title text-center">Ride Information</h2>
                <hr />
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 text-center m-2">
                            <span class="step1_error text-danger"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label for="inputType">Type</label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <select name="type" class="select form-control type" id="booking-type" title="Number of Types">
                                <option value="One Way">One Way</option>
                                <option value="Return" >Return</option>
                                {{-- <option value="Hourly" class="d-none">Hourly</option> --}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group pickup-location">
                    <div class="row">
                        <div class="col-md-3"><label for="inputPickupLocation">Pickup Location</label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <input type="text" name="pickup_location" class="form-control location_fields" id="inputPickupLocation" placeholder="Choose Location..." />
                            <input type="hidden" class="longitutde" name="longitutde[]"/>
                            <input type="hidden" class="latitude" name="latitude[]"/>
                            <div class="row mt-2">
                                <div class="col-md-9">
                                    <input type="text" name="pickup_full_address" id="inputPickupLocationAddress" class="form-control d-none" placeholder="Full Address" />
                                    <input type="text" name="pick_street_address" id="add-pick-street" class="form-control" placeholder="Add Door Number" />
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="pickup_postal_code" id="inputPickupLocationPostal" class="form-control d-none" value="None" placeholder="Postal Code" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{--
                <div class="form-group via-location d-none">
                    <div class="row">
                        <div class="col-md-3"><label for="inputViaLocation">Via Location (Optional)</label> :</div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="text" name="via_location" class="form-control location_fields" id="inputViaLocation" placeholder="Choose Location..." />
                                    <div class="row mt-2">
                                        <div class="col-md-9">
                                            <input type="text" name="via_full_address" id="inputViaLocationAddress" class="form-control" placeholder="Full Address" />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="via_postal_code" id="inputViaLocationPostal" class="form-control" placeholder="Postal Code" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <input type="button" class="btn addViaLocationBtn text-success" value="Add" />
                                </div>
                            </div>
                            <div class="ViaLocationDivForAppend"></div>
                        </div>
                        
                        <!--<div class="col-md-2">-->
                        <!--    <input id="addViaLocation" type="button" value="Add More" />-->
                        <!--</div>-->
                    
                        <input type="hidden" id="total_amount_get" value="0">
                    </div>
                </div>
                --}}
                <div class="form-group destination-location">
                    <div class="row">
                        <div class="col-md-3"><label for="inputDestinationLocation">Drop Off Location </label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <input type="text" name="destination_location" class="form-control location_fields" id="inputDestinationLocation" placeholder="Choose Location..." />
                            <input type="hidden" class="longitutde" name="longitutde[]"/>
                            <input type="hidden" class="latitude" name="latitude[]"/>
                            <div class="row mt-2">
                                <div class="col-md-9">
                                    <input type="text" name="destination_full_address" id="inputDestinationLocationAddress" class="form-control d-none" placeholder="Full Address" />
                                    <input type="text" name="drop_street_address" id="add-drop-street" class="form-control" placeholder="Add Door Number" />
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="destination_postal_code" id="inputDestinationLocationPostal" class="form-control d-none" value="None" placeholder="Postal Code" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="set-different-return" class="d-none">
                    <div class="form-group return-pickup-location">
                        <div class="row">
                            <div class="col-md-3"><label for="inputPickupLocation">Return Pick-Up Location</label> : <span class="text-danger">*</span></div>
                            <div class="col-md-9">
                                <input type="text" name="return_pickup_location" data-reserve="" class="form-control location_fields_return" id="return_inputPickupLocation" placeholder="Choose Return Pick-Up Location..." />
                                <input type="hidden" class="longitutde" data-reserve="" name="longitutde[]"/>
                                <input type="hidden" class="latitude" data-reserve="" name="latitude[]"/>
                                <div class="row mt-2">
                                    <div class="col-md-9">
                                        <input type="text" name="return_pickup_full_address" data-reserve="" id="return_inputPickupLocationAddress" class="form-control d-none" placeholder="Full Address" />
                                        <input type="text" name="return_pick_street_address" data-reserve="" id="add-pick-street" class="form-control" placeholder="Add Door Number" />
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="return_pickup_postal_code" data-reserve="" id="return_inputPickupLocationPostal" class="form-control d-none" value="None" placeholder="Postal Code" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group return-destination-location">
                        <div class="row">
                            <div class="col-md-3"><label for="inputDestinationLocation">Return Drop-Off Location </label> : <span class="text-danger">*</span></div>
                            <div class="col-md-9">
                                <input type="text" name="return_destination_location" data-reserve="" class="form-control location_fields_return" id="return_inputDestinationLocation" placeholder="Choose Return Drop-Off Location..." />
                                <input type="hidden" class="longitutde" data-reserve="" name="longitutde[]"/>
                                <input type="hidden" class="latitude" data-reserve="" name="latitude[]"/>
                                <div class="row mt-2">
                                    <div class="col-md-9">
                                        <input type="text" data-reserve="" name="return_destination_full_address" id="return_inputDestinationLocationAddress" class="form-control d-none" placeholder="Full Address" />
                                        <input type="text" data-reserve="" name="return_drop_street_address" id="return_add-drop-street" class="form-control" placeholder="Add Door Number" />
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" data-reserve="" name="return_destination_postal_code" id="return_inputDestinationLocationPostal" class="form-control d-none" value="None" placeholder="Postal Code" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr />
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"><label for="inputPickup">Pickup Date&Time</label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <input type="datetime-local" value="<?php echo date("Y-m-d", strtotime(' + 2 days')); ?>T00:00" min="<?php echo date("Y-m-d", strtotime(' + 2 days')); ?>T00:00" name="pickup_date" class="form-control" id="pickupDate" />
                        </div>
                    </div>
                </div>
                <div class="form-group return-date d-none">
                    <div class="row">
                        <div class="col-md-3"><label for="inputRetrn">Return Date</label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <input type="datetime-local" value="<?php echo date("Y-m-d", strtotime(' + 2 days')); ?>T00:00" min="<?php echo date("Y-m-d", strtotime(' + 2 days')); ?>T00:00" class="form-control" name="return_date" id="returnDate" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="estimate-distance-block" class="controls bg-primary text-white p-3 ml-3" style="height: auto !important; display: none;">
                        <h5 class="text-center">ESTIMATE</h5>
                        <div class="estimate_div"></div>
                    </div>
                </div>
                <div class="form-group d-none">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="response"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map" class="d-none"></div>
                        </div>
                    </div>
                </div>
                <input type="button" name="next" class="next action-button first-btn" value="Next" />
            </fieldset>
            
            <fieldset class="setup-content" id="step-2">
                <div class="form-group ir-type">
                    <div class="row">
                        <div class="col-12 text-center m-2">
                            <span class="step2_error text-danger"></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-2"><label>Select Car Type</label> :</div>
                        <div class="col-md-10" id="passenager-val">
                            <div class="row" id="generate-vehicle">
                                <img src="{{asset('images/Loader.gif')}}" style="height: 10%;">
                            </div>
                            
                        </div>
                    </div>
                </div>    
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            
            <fieldset class="setup-content" id="step-3">
                <h2 class="fs-title text-center">Billing Information</h2>
                <hr />
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"><label for="inputFullName">Full Name</label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="inputFullName" placeholder="Enter full name" name="name"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"><label for="inputPhoneNumber">Phone Number</label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="inputPhoneNumber" name="contact_number" placeholder="Enter Contact Number" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"><label for="inputEmail">Email</label> : <span class="text-danger">*</span></div>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email Address" name="email" />
                        </div>
                    </div>
                </div>

                <h2 class="fs-title">Booking Details</h2>
                <div id="routes"></div>

                <table class="table">
                    <tbody>
                        <thead>
                            <tr>
                                <th scope="row">#</th>
                                <th>Pickup</th>
                                <th>Drop-Off</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                    </tbody>

                    <tbody id="route_details">
                            <!--<tr>-->
                            <!--    <th scope="row">#</th>-->
                            <!--    <th class="f_p">XXXX XXXXX</th>-->
                            <!--    <th class="f_d">XXXX XXXXX</th>-->
                            <!--    <th class="f_a">£ XXX.XX</th>-->
                            <!--</tr>-->
                    </tbody>
                    <tfoot>
                        <tr>
                        <td></td><td></td><td></td>
                        <td id="total_cost">XXX</td>
                        </tr>
                    </tfoot>
                </table>

                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" id="booking-form-submit" class="submit action-button pay_now" value="Proceed" />
                
            </fieldset>
           

        </form>
    </div>
</section>
@endsection 
@section('css')

@endsection 
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('API_KEY') }}&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
<script>    
    // Booking Type Change event
    // $("#booking-type").change(function(e){
    //     if($(e).find(":selected").val() == "Return"){
    //       $("#set-different-return").show() 
    //     }else{
    //         $("#set-different-return").hide()
    //     }
    // })
    
    // Booking Type Change event
    
    let meet_greet_charges = 0;
    $(".meet_greet").click(function () {
        if ($(this).is(":checked")) {
            meet_greet_charges = 10;
            $(".meet_greet_charges").html("£" + meet_greet_charges);
        } else {
            meet_greet_charges = 0;
            $(".meet_greet_charges").html("");
        }
    });
        
    $("#booking-form-submit").click(function(){
        var error = 0;
        $("#step-3 input").each(function(i,e){
            if($(e).val() == ''){
                $(e).focus();
                alert("Please fill the Billing details complete to proceed")
                error = 1;
                return false
            }
        })
        if(error == 0){
            $("#booking-form-submit").prop("type" , "submit")
        }else{
            $("#booking-form-submit").prop("type" , "button")
        }
    })
    
    // $('.first-btn').click(function() {
        
    // });
    
    function initAutocomplete() {
        //*** add via location ***//
        var count = 0;
        $(".addViaLocationBtn").click(function () {
            count++;
            var new_div =
                '<div class="row mt-2"><div class="col-md-11"><input type="text" name="via_location" class="form-control location_fields" id="inputViaLocation' +
                count +
                '" placeholder="Choose Location..."><div class="row mt-2"><div class="col-md-9"><input type="text" name="via_full_address" id="inputViaLocation' +
                count +
                'Address" class="form-control" placeholder="Full Address"></div><div class="col-md-3"><input type="text" name="via_postal_code" id="inputViaLocationPostal' +
                count +
                '"  class="form-control" placeholder="Postal Code"></div></div></div><div class="col-md-1"><input type="button" class="btn text-danger removeViaLocationBtn" value="X" /></div></div>';
            $(".ViaLocationDivForAppend").before(new_div);
        });
        //*** add via location ***//

        //*** remove via location ***//
        $("div").on("click", ".removeViaLocationBtn", function () {
            console.log($(this).closest(".row").attr("class"));
            $(this).closest(".row").remove();
        });
        //*** remove via location ***//
    
        // Pick and Drop with One Way Start
        $("div").on("keyup", ".location_fields", function () {
            $(this).removeClass("validlocation");
            $(this).removeAttr("data-lat");
            $(this).removeAttr("data-lng");
            const location_id = $(this).attr("id");

            const options = {
                componentRestrictions: {
                    country: "uk",
                },
            };

            const inputPickupLocation = document.getElementById(location_id);
            const searchBox = new google.maps.places.Autocomplete(inputPickupLocation, options);

            searchBox.addListener("place_changed", () => {
                const place = searchBox.getPlace();

                if (!place.geometry || !place.geometry.location) {
                    console.log("No details available for input: '" + place.name + "'");
                    document.getElementById(location_id).value = " ";
                    return;
                } else {
                    const location = place.geometry.location;
                    $("#" + $(this).attr("id") + "Address").val(place.formatted_address);

                    const lat = location.lat();
                    const lng = location.lng();
                    
                    $(this).closest("div").find(".longitutde").val(lng)
                    $(this).closest("div").find(".latitude").val(lat)
                    
                    $(this).addClass("validlocation");
                    $(this).attr({
                        "data-lat": lat,
                        "data-lng": lng,
                    });
                }
            });
        });
        // Pick and Drop with One Way End
        
        // Pick and Drop with Return Start
        $("div").on("keyup", ".location_fields_return", function () {
            $(this).removeClass("validlocation");
            $(this).removeAttr("data-lat");
            $(this).removeAttr("data-lng");
            const location_id = $(this).attr("id");

            const options = {
                componentRestrictions: {
                    country: "uk",
                },
            };

            const inputPickupLocation = document.getElementById(location_id);
            const searchBox = new google.maps.places.Autocomplete(inputPickupLocation, options);

            searchBox.addListener("place_changed", () => {
                const place = searchBox.getPlace();

                if (!place.geometry || !place.geometry.location) {
                    console.log("No details available for input: '" + place.name + "'");
                    document.getElementById(location_id).value = " ";
                    return;
                } else {
                    const location = place.geometry.location;
                    $("#" + $(this).attr("id") + "Address").val(place.formatted_address);

                    const lat = location.lat();
                    const lng = location.lng();
                    
                    $(this).closest("div").find(".longitutde").val(lng)
                    $(this).closest("div").find(".latitude").val(lat)
                    
                    $(this).addClass("validlocation");
                    $(this).attr({
                        "data-lat": lat,
                        "data-lng": lng,
                    });
                }
            });
        });
        // Pick and Drop with Return End

    }

    window.initAutocomplete = initAutocomplete;
</script>
<script>
    $(".type").change(function () {
        var type = $(this).val();
        if (type == "Return") {
            $(".hourly-hours").addClass("d-none");

            $(".return-date").removeClass("d-none");
            $(".via-location").removeClass("d-none");
            $(".destination-location").removeClass("d-none");
            $("#set-different-return").removeClass("d-none")
            $("#set-different-return input").each(function(i,e){
                var namer = $(e).prop("name");
            })
        } else {
            // One way
            $(".return-date").addClass("d-none");
            $(".hourly-hours").addClass("d-none");

            $(".via-location").removeClass("d-none");
            $(".destination-location").removeClass("d-none");
            $("#set-different-return").addClass("d-none");
        }
    });
    
    $(document).on("click",".vehicle-selection",function(){
        $("#rt").val($(this).data("rt"))
        $("#ml").val($(this).data("ml"))
        $("#amt").val($(this).data("amt"))
        $("#total_cost").text("£ "+$(this).data("amt"))
        $(".f_a").text("£ "+$(this).data("amt"))
        
    });
    
</script>

<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    // Find amount here



    $(".next").click(function () {
        
        setTimeout(function(){
 
        var temper = '';
        if($(".type").val() == "One Way"){
            temper += '<tr><th scope="row">1</th><th class="f_p">'+$(".location_fields:eq(0)").val()+'</th><th class="f_d">'+$(".location_fields:eq(1)").val()+'</th><th class="f_a">Custom</th></tr>';
        }else{
            temper += '<tr><th scope="row">1</th><th class="f_p">'+$(".location_fields:eq(0)").val()+'</th><th class="f_d">'+$(".location_fields:eq(1)").val()+'</th><th class="f_a">Custom</th></tr>';
            temper += '<tr><th scope="row">2</th><th class="f_p">'+$(".location_fields_return:eq(0)").val()+'</th><th class="f_d">'+$(".location_fields_return:eq(1)").val()+'</th><th class="f_a">Custom</th></tr>';
        }
        $("#route_details").html(temper);
        
        }, 1000);
        
        
        
        var permission = 1;
        var origin = [];
        var destination = [];
        $(".step1_error").html("");
        $(".step2_error").html("");

        //*** locations validation ***//
        var check_location_duplicates = [];
        $(".location_fields").each(function (i, e) {
            //*** remove locations axcept pickup ***//
            if ($(".type").val() == "Hourly") {
                if (!$(e).is("#inputPickupLocation")) {
                    $(e).val(" ");
                }
            }
            //*** remove locations axcept pickup ***//

            if (!$(e).hasClass("validlocation")) {
                $(e).val(" ");
            }

            check_location_duplicates.push($(e).val());
        });
        //*** locations validation ***//

        //*** current fieldset validation ***//
        var current_fieldset_id = $(this).parent("fieldset").attr("id");

        if (current_fieldset_id == "step-1") {
            $(".estimate_div").html("");
            $("#routes").html("");
            //$("#route_detail").html("");
            $("input").removeClass("border-danger");

            if ($(".type").val() == "One Way" || $(".type").val() == "Return") {
                if (permission == 1) {
                    $("#" + current_fieldset_id)
                        .find("input,select")
                        .each(function (i, e) {
                            //validate only one way
                            if (
                                $(".type").val() == "One Way" &&
                                ($("#inputPickupLocation").val() == " " || $("#inputPickupLocation").val() == "" || $("#add-pick-street") == "" || $("#inputDestinationLocation") == "" || $("#inputDestinationLocation") == " " || $("#add-drop-street") == "" || $("#pickupDate").val() == "") &&
                                !($(e).prop("name") == "return_date")
                            ) {
                                $(e).focus();
                                $(e).addClass("border-danger");
                                
                                $(".step1_error").html("");
                                $(".step1_error").html("All fields are requireds");
                                permission = 0;
                                return false;
                            } else if (
                                $(".type").val() == "Return" &&
                                ($(e).val() == " " || $(e).val() == "") &&
                                !($(e).prop("name") == "via_location" || $(e).prop("name") == "via_full_address" || $(e).prop("name") == "via_postal_code" || $(e).prop("name") == "hours")
                            ) {
                                $(e).focus();
                                $(e).addClass("border-danger");
                                
                                $(".step1_error").html("All fields are required");
                                permission = 0;
                                return false;
                            } else {
                                permission = 1;
                                $(e).removeClass("border-danger");

                                const data_lat = parseFloat($(e).attr("data-lat"));
                                const data_lng = parseFloat($(e).attr("data-lng"));

                                if (data_lat != undefined || data_lng != undefined) {
                                    /***** distance code start *****/

                                    if ($(e).prop("name") == "pickup_location" || $(e).prop("name") == "via_location" || $(e).prop("name") == "destination_location") {
                                        if ($(e).prop("name") == "pickup_location") {
                                            origin.push({
                                                lat: data_lat,
                                                lng: data_lng,
                                            });
                                            // console.log(origin + '1');
                                        } else if (!($(e).val() == " " || $(e).val() == "") && $(e).prop("name") == "via_location") {
                                            origin.push({
                                                lat: data_lat,
                                                lng: data_lng,
                                            });
                                            destination.push({
                                                lat: data_lat,
                                                lng: data_lng,
                                            });
                                            // console.log(origin + '2');
                                        } else if ($(e).prop("name") == "destination_location") {
                                            destination.push({
                                                lat: data_lat,
                                                lng: data_lng,
                                            });
                                            
                                        }
                                        
                                    }
                                    /***** distance code end *****/
                                }
                            }

                            // $(this).find('.contact_error').html("");
                        });
                }

                //*** remove duplicate locations ***//
                if (permission == 1) {
                    var check_location_duplicates_array = check_location_duplicates.sort();
                    console.log(check_location_duplicates_array);
                    for (var i = 0; i < check_location_duplicates_array.length - 1; i++) {
                        console.log(check_location_duplicates_array[i]);
                        if (check_location_duplicates_array[i + 1] == check_location_duplicates_array[i]) {
                            $(".location_fields").each(function (i, e) {
                                // console.log($(e).val());
                                // console.log(check_location_duplicates_array[i]);
                                if (!(check_location_duplicates_array[i] == " " || check_location_duplicates_array[i] == "") && $(e).val() == check_location_duplicates_array[i]) {
                                    // console.log($(e).val());
                                    permission = 0;
                                    console.log("Locations must be different");
                                    $(".step1_error").html("Locations must be different");
                                    $(e).focus();
                                    $(e).addClass("border-danger");
                                    return false;
                                }
                            });
                        }
                    }
                }
                

                //*** dates must be different ***//
                if (permission == 1 && $(".type").val() == "Return") {
                    var pickupDate = new Date($("#pickupDate").val()).toLocaleDateString();
                    pickupDate = pickupDate.split("/");
                    pickup_date = pickupDate[2] + "-" + (pickupDate[0].length == 1 ? "0" + pickupDate[0] : pickupDate[0]) + "-" + (pickupDate[1].length == 1 ? "0" + pickupDate[1] : pickupDate[1]);

                    var returnDate = new Date($("#returnDate").val()).toLocaleDateString();
                    returnDate = returnDate.split("/");
                    return_date = returnDate[2] + "-" + (returnDate[0].length == 1 ? "0" + returnDate[0] : returnDate[0]) + "-" + (returnDate[1].length == 1 ? "0" + returnDate[1] : returnDate[1]);

                    if (return_date > pickup_date) {
                        permission = 1;
                    } else {
                        $(".step1_error").html("Return Date must be greater than from Pickup Date");
                        $("#returnDate").focus();
                        $("#returnDate").addClass("border-danger");
                        permission = 0;
                        return false;
                    }
                }
                //*** dates must be different ***//

                let est_total_price = 0;
                if (meet_greet_charges > 0) {
                    var meet_greet_row = '<tr><th scope="row">#</th><td colspan="2">Meet Greet Charges</td><td>$ ' + meet_greet_charges + "</td></tr>";
                    $("#route_detail").append(meet_greet_row);
                    est_total_price = est_total_price + meet_greet_charges;
                } else {
                    est_total_price = 0;
                }

                if ($(".type").val() == "Hourly") {
                    const charge = 5;
                    var total_time = $("#hours").find(":selected").val();
                    var est_price = total_time * charge;
                    est_total_price = est_total_price + est_price;
                    var total_price = est_total_price.toFixed(2);

                    var content2 = '<tr><th>#</th><th scope="row"></th><th>' + total_time + "</th><th> " + est_total_price + "</th></tr>";
                    $("#route_detail").html(content2);

                    $(".pay_now").val("Pay £" + total_price);
                    $(".pay_now").attr("data-amount", total_price);
                } else {
                    this.geocoder = new google.maps.Geocoder();
                    this.service = new google.maps.DistanceMatrixService();
                    this.distanceRequest = {
                        origins: origin,
                        destinations: destination,
                        travelMode: google.maps.TravelMode.DRIVING,
                        unitSystem: google.maps.UnitSystem.METRIC,
                        avoidHighways: false,
                        avoidTolls: false,
                    };

                    this.service.getDistanceMatrix(this.distanceRequest).then((response) => {
                        response_originAddresses_array = response.originAddresses;
                        response_destinationAddresses_array = response.destinationAddresses;
                        response_array = response.rows[0];

                        document.getElementById("response").innerText = JSON.stringify(response, null, 2);
                        
                        // Code here
                        const charge = 5;


                        let firstKey = Object.keys(response_array)[0];
                        let firstobject = Object.values(response_array)[0];

                        let routes = "";
                        let sno = 0;
                        let est_total_seconds = 0;
                        let est_total_distance = 0;
                        firstobject.forEach(function (e, key) {
                            
                            sno++;
                            const est_distance_value = (e.distance.value / 1000).toFixed(2);
                            const est_distance_value2 = e.distance.value / 1000;
                            var charge = 0;
                            
                            var longitutde_data = $('input.longitutde').serializeArray();
                            var latitude_data = $('input.latitude').serializeArray();
                            var booking_type = $(".type").val();
                            var calc_locations = [];
                            $('.location_fields').each(function(i, e) {
                                calc_locations.push($(e).val());
                            })
                            $('.location_fields_return').each(function(i, e) {
                                calc_locations.push($(e).val());
                            })
                            console.log(calc_locations);
                            $.ajax({
                                type:'POST',
                                
                                data: {longitutde_data:longitutde_data,latitude_data:latitude_data,booking_type:booking_type,calc_locations:calc_locations},
                                url:"{{route('calc_miles')}}",
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                success:function(data){
                                    
                                    setTimeout(function(){
                                        $("#generate-vehicle").html(data);    
                                    }, 1000);
                                    
                                    //return data;
                                },
                                error: function (e) {
                                    console.log("Error");
                                    console.log(e);
                                },
                            });


                            console.log("----------------")
                            charge = document.getElementById("total_amount_get").value;
                            console.log("Charge id will  be" + charge);
                            const est_distance = est_distance_value + " km";
                            const est_time = e.duration.text;
                            const est_time_value = e.duration.value;

                            const est_price = charge;
                            const est_price2 = charge;

                            console.log("Est Price "+est_price);
                            console.log("Est Price 2 "+est_price2);
                            est_total_price = est_total_price + est_price2;
                            est_total_seconds = est_total_seconds + est_time_value;
                            est_total_distance = est_total_distance + est_distance_value2;

                            const startAddresses = response_originAddresses_array[key];
                            const endAddresses = response_destinationAddresses_array[key];

                            if (key == 0) {
                                var routes = '<p><i class="fa fa-location text-danger"></i> ' + startAddresses + '</p><p><i class="fa fa-map-marker text-danger"></i> ' + endAddresses + "</p>";
                                $("#routes").append(routes);
                            } else {
                                var routes = '<p><i class="fa fa-map-marker text-danger"></i> ' + endAddresses + "</p>";
                                $("#routes").append(routes);
                            }
                            var content = '<div class="row"><div class="col-md-12"><p>From : <i class="fa fa-location text-danger"></i> '+startAddresses+'</p><p>TO : <i class="fa fa-map-marker text-danger"></i> '+endAddresses+'</p></div><div class="col-md-12"><p style="font-size: 12px;"><strong><span id="est-price">Price : $ '+est_price+'</span><br><span id="est-distance">Distance : '+est_distance+'</span><br><span id="est-time">Time : '+est_time+'</span></strong></p></div></div>';
                            var content = '<table class="table"><tbody><tr><th scope="row">From</th><td>'+startAddresses+'</td></tr><tr><th scope="row">TO</th><td>'+endAddresses+'</td></tr><tr><th scope="row">Price</th><td>$ '+est_price+'</td></tr><tr><th scope="row">Distance</th><td>'+est_distance+'</td></tr><tr><th scope="row">Time</th><td>'+est_time+'</td></tr></tbody></table>';
                            $('.estimate_div').append(content);

                            var content1 = '<tr><th scope="row">'+sno+'</th><td>'+est_distance+'</td><td>'+est_time+'</td><td>$ '+est_price+'</td></tr>';
                            $("#route_detail").append(content1);
                        });
                        
                        console.log("here");
                        // calc_amount(est_total_price);
                        console.log("here 2");
                        var total_seconds = est_total_seconds;
                        var hoursLeft = Math.floor(total_seconds / 3600);
                        var min = Math.floor((total_seconds - hoursLeft * 3600) / 60);
                        var total_secondsLeft = total_seconds - hoursLeft * 3600 - min * 60;
                        total_secondsLeft = Math.round(total_secondsLeft * 100) / 100;
                        var total_time = hoursLeft < 10 ? "0" + hoursLeft : hoursLeft;
                        total_time += " hours " + (min < 10 ? "0" + min : min);
                        total_time += " mins " + (total_secondsLeft < 10 ? "0" + total_secondsLeft : total_secondsLeft);
                        total_time += " sec ";

                        var total_distance = est_total_distance.toFixed(2);
                        var total_price = est_total_price.toFixed(2);

                        var content2 = '<tr><th>#</th><th scope="row">' + total_distance + " km</th><th>" + total_time + "</th><th> " + total_price + "</th></tr>";
                        $("#route_detail").append(content2);
                        $(".pay_now").val("Pay £" + total_price);
                        $(".pay_now").attr("data-amount", total_price);
                        // document.getElementById("estimate-distance-block").style.display = "block";
                    });
                }

                if (permission == 1) {
                   
                }
            } else {
                console.log("Selected option is not valid");
            }
        } else if (current_fieldset_id == "step-2") {
            var is_check = 0;
            $("#passenager-val input").each(function(i,e){
                if($(e).is(':checked')){ 
                    is_check = 1;    
                }
            })
            if(is_check == 0){
                $(".step2_error").html("Please choose a Car first");
                return false;
            }
            
            $(".location_fields").each(function(i,e){
                if(i == 0){
                    $("#f_p").val($(e).val())
                    $(".f_p").text($(e).val())
                }else{
                    $("#f_d").val($(e).val())
                    $(".f_d").text($(e).val())
                }
            })
            
            
        } else if (current_fieldset_id == "step-3") {
            
            
            $("#" + current_fieldset_id)
                .find("input")
                .each(function (i, e) {
                    if ($(e).val() == " " || $(e).val() == "") {
                        $(e).focus();
                        $(e).addClass("border-danger");

                        permission = 0;
                        return false;
                    } else {
                        permission = 1;
                        $(e).removeClass("border-danger");
                    }
                });
            
            // Set final details
            $(".location_fields").each(function(i,e){
                if(i == 0){
                    $("#f_p").val($(e).val())
                    $(".f_p").text($(e).val())
                }else{
                    $("#f_d").val($(e).val())
                    $(".f_d").text($(e).val())
                }
            })
            
        } else {
            console.log("Step is not valid");
        }

        //*** current fieldset validation ***//

        //*** next fieldset ***//
        if (permission == 1) {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
        }
        //*** next fieldset ***//

        //hide the current fieldset with style
        current_fs.animate(
            {
                opacity: 0,
            },
            {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = now * 50 + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        transform: "scale(" + scale + ")",
                    });
                    next_fs.css({
                        left: left,
                        opacity: opacity,
                    });
                },
                duration: 0,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: "easeOutQuint",
            }
        );
    });

    $(".previous").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
            {
                opacity: 0,
            },
            {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = (1 - now) * 50 + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        left: left,
                    });
                    previous_fs.css({
                        transform: "scale(" + scale + ")",
                        opacity: opacity,
                    });
                },
                duration: 500,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: "easeOutQuint",
            }
        );
    });
</script>
@endsection
