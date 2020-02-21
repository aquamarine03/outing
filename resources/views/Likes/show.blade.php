
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Likes {{ $Likes->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Likes") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Likes") ."/". $Likes->id . "/edit" }}" title="Edit Likes"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Likes/{{ $Likes->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Likes->id}} </td></tr>
										<tr><th>user_id</th><td>{{$Likes->user_id}} </td></tr>
										<tr><th>post_id</th><td>{{$Likes->post_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    