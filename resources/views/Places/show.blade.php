
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Places {{ $places->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("places") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("places") ."/". $places->id . "/edit" }}" title="Edit Places"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/places/{{ $places->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$places->id}} </td></tr>
										<tr><th>place_name</th><td>{{$places->place_name}} </td></tr>
										<tr><th>place_address</th><td>{{$places->place_address}} </td></tr>
										<tr><th>place_img</th><td>{{$places->place_img}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    