

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <a href="index">Home</a>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
					<br>
					<br>
					<h2>Update Your Information!</h2>
					<form action= "/insert" method="post">
					{{csrf_field()}}
					<p>First Name:<br><input type="text" name="firstname"></p>
					<p>Last Name:<br><input type="text" name="lastname"></p>
					<p>Address:<br><input type="text" name="Address"></p>
					<p>Phone Number:<br><input type="text" name="mobile"></p>
					<p>City:<br><input type="text" name="City"></p>
					<p>State:<br><input type="text" name="State"></p>
					<p><input type="submit" value="add" name="submit"></p>
					</form><br><br>
					<form
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
