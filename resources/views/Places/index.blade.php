
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Places</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("Places/create") }}" class="btn btn-success btn-sm" title="Add New Places">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("Places") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>place_name</th><th>place_address</th><th>place_img</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Places as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->place_name}} </td>

                                            <td>{{ $item->place_address}} </td>

                                            <td>{{ $item->place_img}} </td>
  
                                                <td><a href="{{ url("/Places/" . $item->id) }}" title="View Places"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/Places/" . $item->id . "/edit") }}" title="Edit Places"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/Places/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $Places->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    