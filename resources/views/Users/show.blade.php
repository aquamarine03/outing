
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">users {{ $users->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("users") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("users") ."/". $users->id . "/edit" }}" title="Edit Users"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/users/{{ $users->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$users->id}} </td></tr>
										<tr><th>name</th><td>{{$users->name}} </td></tr>
										<tr><th>email</th><td>{{$users->email}} </td></tr>
										<tr><th>password</th><td>{{$users->password}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    