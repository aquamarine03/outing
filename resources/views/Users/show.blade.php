
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Users {{ $Users->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Users") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Users") ."/". $Users->id . "/edit" }}" title="Edit Users"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Users/{{ $Users->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Users->id}} </td></tr>
										<tr><th>name</th><td>{{$Users->name}} </td></tr>
										<tr><th>email</th><td>{{$Users->email}} </td></tr>
										<tr><th>password</th><td>{{$Users->password}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    