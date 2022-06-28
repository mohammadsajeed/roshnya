    <div class="row">
        <dir class="aler alert-danger">

        </dir>
            <div class="col-md-12">
                 @if (session()->has('msg'))
                 <div class="alert alert-success">{{session('msg')}} </div>

                 @endif
                 <input type="file" wire:model='photo'>
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Add Slider Index Page </h4>
                            <div class="form-group row">

                            {{$photo}}
                                <div class="col-sm-4">
                                    <label for="name">Title:</label>
                                    <input type="text" class="form-control" id="fname"  wire:model.lazy="title"  name="title" placeholder="Slider Title Here ">
                                    @error('title')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="name">Description:</label>
                                    <input type="text" class="form-control" id="desctiption" wire:model.lazy="description" placeholder="Slider Description  Here">
                                    @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="name">Picture:</label>
                                    <input type="file" class="form-control" wire:model="picture" id="picture" >
                                    @error('picture')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" wire:click="store()">Insert Data</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
    </div>
