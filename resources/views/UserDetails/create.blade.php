
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New UserDetails</div>
                            <div class="panel-body">
                                <a href="{{ url("/UserDetails") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/UserDetails/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{old('user_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="address" class="col-md-4 control-label">address: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="address" type="text" id="address" value="{{old('address')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="gender" class="col-md-4 control-label">gender: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="gender" type="text" id="gender" value="{{old('gender')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="age" class="col-md-4 control-label">age: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="age" type="text" id="age" value="{{old('age')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    