
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserDetails {{ $UserDetails->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("UserDetails") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("UserDetails") ."/". $UserDetails->id . "/edit" }}" title="Edit UserDetails"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/UserDetails/{{ $UserDetails->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$UserDetails->id}} </td></tr>
										<tr><th>user_id</th><td>{{$UserDetails->user_id}} </td></tr>
										<tr><th>address</th><td>{{$UserDetails->address}} </td></tr>
										<tr><th>gender</th><td>{{$UserDetails->gender}} </td></tr>
										<tr><th>age</th><td>{{$UserDetails->age}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    