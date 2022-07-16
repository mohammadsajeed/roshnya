
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

            <div class="card">
                <form class="form-horizontal"  action="add_donor"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Donors & Organizations </h4>
                        <div class="form-group row">


                            <div class="col-sm-4">
                                <label for="name">Organization Name :</label>
                                <input type="text" class="form-control" id="fname"  name="organizationName"   placeholder="Please Type Donor Or Organization Name  ">
                                @error('organizationName')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>

                            <div class="col-sm-4">
                                <label for="name">Description:</label>
                                <input type="text" class="form-control" id="edtor1" name="description" placeholder=" Description  Here">
                                @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label for="name">Logo :</label>
                                <input type="file" class="form-control"  name="picture" id="picture" >
                                @error('picture')
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
                <h5 class="card-title">Organizations & Donors  Table</h5>
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Organization Name</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Description</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Logo</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Edit</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.575px;">Delete</th>
                            </thead>
                        <tbody>

                         @foreach ( $read_donor as $donor )
                          <tr role="row" class="even">
                                <td class="sorting_1">{{$donor->organization_name}}</td>
                                <td class="sorting_1">{{$donor->description}}</td>
                                <td class="sorting_1"><a href="images/{{$donor->pic}}" target="blank"><img src="images/{{$donor->pic}}" alt="" height="60px" width="60px"></a></td>

                                <td class="sorting_1"><a type="button" href="donor_update/{{$donor->id}}" class="btn btn-outline-success">Edit</a></td>
                                <td class="sorting_1"><a type="button" href="donor_delete/{{$donor->id}}" class="btn btn-outline-danger">Delete</a></td>


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
