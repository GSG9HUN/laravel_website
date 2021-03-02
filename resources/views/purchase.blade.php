@extends('layouts.layout')

@section('content')
    <div class="">
        <!--SHIPPING METHOD-->
        <div class="panel panel-info">
            <div class="panel-heading">Address</div>
            <div class="panel-body">
                <div class="address col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4>Shipping Address</h4>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <strong>First Name:</strong>
                            <input disabled type="text" name="first_name" class="form-control" value="{{$user_details->FirstName}}"/>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-6">
                            <strong>Last Name:</strong>
                            <input disabled type="text" name="last_name" class="form-control" value="{{$user_details->LastName}}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 ">
                            <strong>Country:</strong>
                            <input disabled type="text" name="first_name" class="form-control" value="{{$user_details->Country}}"/>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-12">
                            <strong>City</strong>
                            <input disabled type="text" name="last_name" class="form-control" value="{{$user_details->City}}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <strong>Address:</strong>
                            <input disabled type="text" name="first_name" class="form-control" value="{{$user_details->Address}}"/>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-6">
                            <strong>Phone:</strong>
                            <input disabled type="text" name="last_name" class="form-control" value="{{$user_details->Phone}}"/>
                        </div>
                    </div>

                </div>
                <div class="items col-md-6">
                    <table>
                        @foreach($items as $item)
                            <tr>
                                <td >
                                    <div>
                                        <img  class="col-md-6 col-xs-12" src="{{$item->image}}">
                                    </div>
                                </td>
                                <td class="text">
                                    <div class="col-md-6">
                                        {{$item->name}}
                                    </div>
                                </td>
                            </tr>




                    @endforeach
                    </table>
                </div>
                </div>
            </div>

            <!--SHIPPING METHOD END-->
            <!--CREDIT CART PAYMENT-->
        <div id="card_payment" class="panel panel-info" style="display: none">
            <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-12"><strong>Card Type:</strong></div>
                    <div class="col-md-12">
                        <select id="CreditCardType" name="CreditCardType" class="form-control">
                            <option value="5">Visa</option>
                            <option value="6">MasterCard</option>
                            <option value="7">American Express</option>
                            <option value="8">Discover</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                    <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Card CVV:</strong></div>
                    <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <strong>Expiration Date</strong>
                    </div>
                    <div class=" col-md-6">
                        <select class="form-control" name="">
                            <option value="">Month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="">
                            <option value="">Year</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <span>Pay secure using your credit card.</span>
                    </div>
                    <div class="col-md-12">
                        <ul class="cards">
                            <li class="visa hand">Visa</li>
                            <li class="mastercard hand">MasterCard</li>
                            <li class="amex hand">Amex</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
        <!--CREDIT CART PAYMENT END-->


        <div class="panel panel-info">
            <form id="sender" method="post" action="{{route('confirm',auth()->id())}}">
                @csrf
            </form>
            <div class="panel-heading"></div>
            <div class="panel-body">
                <div id="inputs">
                    <p><input type="checkbox" id="card" value="Pay with card"><span>Pay with card</span></p>
                    <p><input type="checkbox" id="cash" value="Cash on delivery"><span>Pay with cash</span></p>
                </div>
                <div class="form-group">
                    <div>
                        <input type="checkbox" value="agree" id="agree">
                        <span id="agrees">I have read and agree to the Terms and Conditions and Privacy Policy</span>
                    </div>
                    <div class="text-center">
                        <button id="place_order" class="btn btn-primary btn-submit-fix">Place Order</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        window.onload = function () {
            var card = document.getElementById('card');
            var cash = document.getElementById('cash');
            var card_place_order = document.getElementById('place_order')
            card_place_order.onclick=function (){

                var policy =document.getElementById('agree');
                if(!document.getElementById('card').checked && !document.getElementById('cash').checked){
                    alert('Please select one of the pay methods');
                    document.getElementById('inputs').style.border="2px solid red";
                    return;
                }else{
                    document.getElementById('inputs').style.border="none";
                }
                if(!policy.checked){
                    alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                    document.getElementById('agrees').style.border="2px solid red";
                }else{
                    document.getElementById('sender').submit();
                }
            }

            card.onclick = function () {
                if(card.checked)
                {document.getElementById('card_payment').style.display= "block";
                cash.checked=false;
                }
                else
                    document.getElementById('card_payment').style.display= "none";
            }
            cash.onclick = function () {
                if(cash.checked){
                    document.getElementById('card_payment').style.display= "none";
                    card.checked=false;
                }


            }

        }
    </script>
@endsection
