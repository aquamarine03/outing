
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">likes {{ $likes->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("likes") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("likes") ."/". $likes->id . "/edit" }}" title="Edit likes"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/likes/{{ $likes->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$likes->id}} </td></tr>
										<tr><th>user_id</th><td>{{$likes->user_id}} </td></tr>
										<tr><th>post_id</th><td>{{$likes->post_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    