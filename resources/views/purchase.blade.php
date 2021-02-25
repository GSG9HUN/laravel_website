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
                        <div class="col-md-6 col-xs-12">
                            <strong>First Name:</strong>
                            <input disabled type="text" name="first_name" class="form-control" value="{{$user_details->FirstName}}"/>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-6 col-xs-12">
                            <strong>Last Name:</strong>
                            <input disabled type="text" name="last_name" class="form-control" value="{{$user_details->LastName}}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <strong>Country:</strong>
                            <input disabled type="text" name="first_name" class="form-control" value="{{$user_details->Country}}"/>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-12 col-xs-12">
                            <strong>City</strong>
                            <input disabled type="text" name="last_name" class="form-control" value="{{$user_details->City}}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <strong>Address:</strong>
                            <input disabled type="text" name="first_name" class="form-control" value="{{$user_details->Address}}"/>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-6 col-xs-12">
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
                                        <img  class="col-md-6" src="{{$item->image}}">
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
        {{--<div class="panel panel-info">
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
                    <div class="col-md-12"><input disabled type="text" class="form-control" name="car_number" value="" /></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Card CVV:</strong></div>
                    <div class="col-md-12"><input disabled type="text" class="form-control" name="car_code" value="" /></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <strong>Expiration Date</strong>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="">
                            <option value="">Year</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
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
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                    </div>
                </div>
            </div>
        </div>--}}
        <!--CREDIT CART PAYMENT END-->
        </div>
@endsection
