
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Posts</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("Posts/create") }}" class="btn btn-success btn-sm" title="Add New Posts">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("Posts") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>user_id</th><th>place_id</th><th>rating</th><th>comment</th><th>post_img</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Posts as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->place_id}} </td>

                                            <td>{{ $item->rating}} </td>

                                            <td>{{ $item->comment}} </td>

                                            <td>{{ $item->post_img}} </td>
  
                                                <td><a href="{{ url("/Posts/" . $item->id) }}" title="View Posts"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/Posts/" . $item->id . "/edit") }}" title="Edit Posts"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/Posts/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $Posts->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    