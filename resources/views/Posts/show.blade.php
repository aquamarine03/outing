
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Posts {{ $posts->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("posts") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("posts") ."/". $posts->id . "/edit" }}" title="Edit Posts"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/posts/{{ $posts->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$posts->id}} </td></tr>
										<tr><th>user_id</th><td>{{$posts->user_id}} </td></tr>
										<tr><th>place_id</th><td>{{$posts->place_id}} </td></tr>
										<tr><th>rating</th><td>{{$posts->rating}} </td></tr>
										<tr><th>comment</th><td>{{$posts->comment}} </td></tr>
										<tr><th>post_img</th><td>{{$posts->post_img}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    