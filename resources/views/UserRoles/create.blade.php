
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New UserRoles</div>
                            <div class="panel-body">
                                <a href="{{ url("/UserRoles") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/UserRoles/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="role_name" class="col-md-4 control-label">role_name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="role_name" type="text" id="role_name" value="{{old('role_name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{old('user_id')}}">
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
    