<div>
    @extends('livewire.backend.home')

    @section('body')

    <div class="row">
        <dir class="aler alert-danger">

        </dir>
            <div class="col-md-12">

                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Add Slider Index Page </h4>
                            <div class="form-group row">

                                {{$fname}}
                                {{$file}}
                                <div class="col-sm-4">
                                    <label for="name">Title:</label>
                                    <input type="text" class="form-control" id="fname"  wire:model="fname"  name="fname" placeholder="Slider Title Here ">
                                </div>

                                <div class="col-sm-4">
                                    <label for="name">Description:</label>
                                    <input type="text" class="form-control" id="desctiption" wire:model="SliderDescription" placeholder="Slider This Here">
                                </div>
                                <div class="col-sm-4">
                                    <label for="name">Picture:</label>
                                    <input type="file" class="form-control" wire:model="file" id="file" >
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" wire:click="tos()">Insert Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    @endsection
</div>
