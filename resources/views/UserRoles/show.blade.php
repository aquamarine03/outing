
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserRoles {{ $userRoles->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("userRoles") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("userRoles") ."/". $userRoles->id . "/edit" }}" title="Edit UserRoles"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/userRoles/{{ $userRoles->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$userRoles->id}} </td></tr>
										<tr><th>role_name</th><td>{{$userRoles->role_name}} </td></tr>
										<tr><th>user_id</th><td>{{$userRoles->user_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    