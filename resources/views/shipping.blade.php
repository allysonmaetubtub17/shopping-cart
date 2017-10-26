
@extends('master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
    
    .panel{
        font-family: "bradley hand itc";
        font-weight: bolder;
        font-size: 1.5em;
    }

    .panel-heading{
        background-color: #f8bbd0; 
        }

</style>

</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SHIPPING INFORMATION</div>
                <div class="panel-body">
		<form>	
			Please fill out the following: <br><br>

			<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
				<label for="full_name" class="col-md-4 control-label">Full Name:</label>
			<div class="col-md-6">
                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus>
                </div>
            </div>

            <br><br>

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">E-mail:</label>
			<div class="col-md-6">
                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>
            </div>

            <br><br>

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
				<label for="address" class="col-md-4 control-label">Address:</label>
			<div class="col-md-6">
                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
                </div>
            </div>

            <br><br>

            <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
				<label for="region" class="col-md-4 control-label">Region:</label>
			<div class="col-md-6">
                <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required autofocus>
                </div>
            </div>

            <br><br>

            <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
				<label for="postal_code" class="col-md-4 control-label">Postal Code:</label>
			<div class="col-md-6">
                <input id="postal_code" type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" required autofocus>
                </div>
            </div>

		</form>
	</div>
</div>
</div>

	</div>
</body>
</html>

@endsection
