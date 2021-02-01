@extends('layouts.layout')

@section('content')
    @if(@auth)
        <?php
        $user = "none"
        ?>
        @foreach($details as $data)

            @if($data['email'] == Auth::user()['email'])
                @break
            @endif

        @endforeach
        <div id="user_detail_wrapper">
           <form method="GET" action="{{route('save',$data['id'])}}">
               @csrf
            <div >
                <label>E-mail</label>
                <div>
                    <input name="email" type="email" value="{{$data['email']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <label>First Name</label>
                <div>
                    <input name='First name' type="text" value="{{$data['FirstName']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <label>Last name</label>
                <div>
                    <input name='Last name' type="text" value="{{$data['LastName']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <label>Country</label>
                <div>
                    <input name='Country' type="text" value="{{$data['Country']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <label>City</label>
                <div>
                    <input name="City" type="text" value="{{$data['City']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <label>Address</label>
                <div>
                    <input name="Address" type="text" value="{{$data['Address']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <label>Phone</label>
                <div>
                    <input name="Phone" type="tel" value="{{$data['Phone']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

               <button type="submit">Save</button>
           </form>



        </div>
    @endif

@endsection



















































