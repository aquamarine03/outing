
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New Places</div>
                            <div class="panel-body">
                                <a href="{{ url("/places") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/places/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="place_name" class="col-md-4 control-label">place_name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="place_name" type="text" id="place_name" value="{{old('place_name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="place_address" class="col-md-4 control-label">place_address: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="place_address" type="text" id="place_address" value="{{old('place_address')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="place_img" class="col-md-4 control-label">place_img: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="place_img" type="text" id="place_img" value="{{old('place_img')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    