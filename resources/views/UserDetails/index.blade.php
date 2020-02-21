
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserDetails</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("UserDetails/create") }}" class="btn btn-success btn-sm" title="Add New UserDetails">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("UserDetails") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>user_id</th><th>address</th><th>gender</th><th>age</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($UserDetails as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->address}} </td>

                                            <td>{{ $item->gender}} </td>

                                            <td>{{ $item->age}} </td>
  
                                                <td><a href="{{ url("/UserDetails/" . $item->id) }}" title="View UserDetails"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/UserDetails/" . $item->id . "/edit") }}" title="Edit UserDetails"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/UserDetails/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $UserDetails->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    