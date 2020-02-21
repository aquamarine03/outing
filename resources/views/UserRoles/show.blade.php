
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserRoles {{ $UserRoles->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("UserRoles") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("UserRoles") ."/". $UserRoles->id . "/edit" }}" title="Edit UserRoles"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/UserRoles/{{ $UserRoles->id }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$UserRoles->id}} </td></tr>
										<tr><th>role_name</th><td>{{$UserRoles->role_name}} </td></tr>
										<tr><th>user_id</th><td>{{$UserRoles->user_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    