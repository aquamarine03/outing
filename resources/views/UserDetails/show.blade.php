
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserDetails {{ $userDetails->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("userDetails") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("userDetails") ."/". $userDetails->id . "/edit" }}" title="Edit UserDetails"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/userDetails/{{ $userDetails->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$userDetails->id}} </td></tr>
										<tr><th>user_id</th><td>{{$userDetails->user_id}} </td></tr>
										<tr><th>address</th><td>{{$userDetails->address}} </td></tr>
										<tr><th>gender</th><td>{{$userDetails->gender}} </td></tr>
										<tr><th>age</th><td>{{$userDetails->age}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    