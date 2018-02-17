@extends('Template')

@section('content')

                  <div class="panel-heading"><h3>Dashboard</h3>
                    <dl>
                    You are logged in!
                    <br>
                    <br>
                          <dd><a href="#">Add Payment Options</a></dd>
                  </dl>
              	</div>
              </div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


					<br>
					<br>

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
					<p><input type="submit" value="Update" name="submit"></p>
					</form><br><br>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
