
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Wishes {{ $wishes->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("wishes") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("wishes") ."/". $wishes->id . "/edit" }}" title="Edit Wishes"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/wishes/{{ $wishes->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$wishes->id}} </td></tr>
										<tr><th>user_id</th><td>{{$wishes->user_id}} </td></tr>
										<tr><th>place_id</th><td>{{$wishes->place_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    