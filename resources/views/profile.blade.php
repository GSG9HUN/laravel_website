@extends('layouts.layout')
@include('layouts.login_modal')
@section('content')
    @if(@auth)
        @foreach($details as $data)

            @if($data['email'] == Auth::user()['email'])
                @break
            @endif

        @endforeach
           <form method="GET" action="{{route('save',$data['id'])}}">
               @csrf
            <div >
                <div class="input-group">
                <label class="custom-label">E-mail</label>
                    <input id="input" name="email" type="email" value="{{$data['email']}}"   class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                @if(Session::has('email'))
                    <div class="alert-danger text-danger text-center">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ Session::get('email') }}</strong>
                    </span>
                    </div>
                @endif

                <div class="input-group">
                    <label class="custom-label">First Name</label>
                    <input id="input" name='First name' type="text" value="{{$data['FirstName']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>


                <div class="input-group">
                    <label class="custom-label">Last name</label>
                    <input id="input" name='Last name' type="text" value="{{$data['LastName']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="input-group">
                    <label class="custom-label">Country</label>
                    <input id="input" name='Country' type="text" value="{{$data['Country']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="input-group">
                    <label class="custom-label">City</label>
                    <input id="input" name="City" type="text" value="{{$data['City']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="input-group">
                    <label class="custom-label">Address</label>
                    <input  id="input" name="Address" type="text" value="{{$data['Address']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>


                <div class="input-group">
                    <label class="custom-label">Phone</label>
                    <input id="input" name="Phone" type="tel" value="{{$data['Phone']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>


               <div class="input-group login_button">
                   <button class="btn btn-success btn-block" type="submit">Save</button>
               </div>
           </form>
    @endif

@endsection



















































