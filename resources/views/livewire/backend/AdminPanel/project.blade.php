
 @extends('livewire.backend.AdminPanel.admin')

 @section('body')
<div class="row">

        <div class="col-md-12">
             @if (session()->has('msg'))
             <div class="alert alert-success">{{session('msg')}} </div>

             @endif
             @if (session()->has('delete'))
             <div class="alert alert-danger">{{session('delete')}} </div>

             @endif
             @if (session()->has('w'))
             <div class="alert alert-warning">{{session('w')}} </div>

             @endif

            <div class="card">
                <form class="form-horizontal"  action="add_project"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Roshanya Projects Managment </h4>
                        <div class="form-group row">


                            <div class="col-sm-4">
                                <label for="name">Title:</label>
                                <input type="text" class="form-control" id="title"    name="title" placeholder=" Please type project title here ">
                                @error('title')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>


                            <div class="col-sm-4">
                                <label for="name">Picture:</label>
                                <input type="file" class="form-control"  name="picture" id="picture" >
                                @error('picture')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="col-sm-4">
                                <label for="name">Start Date:</label>
                                <input type="date" class="form-control"  name="date" placeholder=" Please type Project start Date" >
                                @error('date')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="col-sm-4">
                                <label for="name">Goal Monney:</label>
                                <input type="text" class="form-control"  name="goal" placeholder=" Please type project goal money" >
                                @error('goal')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="col-sm-4">
                                <label for="name"> Raised Money:</label>
                                <input type="text" class="form-control"  name="raised" placeholder=" Please type project Rasied money" >
                                @error('raised')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>


                            <div class="col-sm-12">
                                <label for="name">Proejct Description:</label>
                                <textarea type="text" class="form-control" cols="3" id="editor1" name="description" placeholder=" Please type News Description  Here">
                                </textarea>
                                @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary"">Insert Data</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Porject Table</h5>
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;"> Title</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Description</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Picture</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Start Date</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Goal Money</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Raised Money</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Edit</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Delete</th>
                            </thead>
                        <tbody>

                          @foreach ( $read_proejct as $project )
                          <tr role="row" class="even">
                                <td class="sorting_1">{{$project->title}}</td>
                                <td class="sorting_1">{!! $project->description !!}</td>
                                <td class="sorting_1"><a href="images/{{$project->pic}}" target="blank"><img src="images/{{$project->pic}}" alt="" height="60px" width="60px"></a></td>
                                <td class="sorting_1">{{$project->date}}</td>
                                <td class="sorting_1">{{$project->goal_money}}</td>
                                <td class="sorting_1">{{$project->raised_money}}</td>
                                <td class="sorting_1"><a type="button" href="project_update/{{$project->id}}" class="btn btn-outline-success">Edit</a></td>
                                <td class="sorting_1"><a type="button" href="project_delete/{{$project->id}}" class="btn btn-outline-danger">Delete</a></td>


                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
