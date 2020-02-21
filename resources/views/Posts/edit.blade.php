
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit Posts #{{ $posts->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("posts") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/posts/{{ $posts->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$posts->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{$posts->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="place_id" class="col-md-4 control-label">place_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="place_id" type="text" id="place_id" value="{{$posts->place_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="rating" class="col-md-4 control-label">rating: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="rating" type="text" id="rating" value="{{$posts->rating}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="comment" class="col-md-4 control-label">comment: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="comment" type="text" id="comment" value="{{$posts->comment}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="post_img" class="col-md-4 control-label">post_img: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="post_img" type="text" id="post_img" value="{{$posts->post_img}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    