@extends('layout')
@section('content')

    <div class="container">
        <h2>Inventory</h2>
        <table id="inventory" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Manufacturer Name</th>
                    <th>Model Name</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($inventories as $inventory)
                    <tr class="table-row" id="car-{{$inventory->car->id}}">
                        <td>{{$i++}}</td>
                        <td>{{$inventory->manufacturer->name}}</td>
                        <td>{{$inventory->car->name}}</td>
                        <td>{{$inventory->count}}</td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        @foreach($inventories as $inventory)
            <!-- Modal -->
            <div id="modal-{{$inventory->car->id}}" class="modal" role="dialog">
                <div class="modal-dialog">    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Car Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-4">
                                <label>Manufacturer</label>
                            </div>
                            <div class="col-md-8">
                                <p>{{$inventory->manufacturer->name}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Model</label>
                            </div>
                            <div class="col-md-8">
                                <p>{{$inventory->car->name}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Color</label>
                            </div>
                            <div class="col-md-8">
                                <p>{{$inventory->car->color}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Manufacturing year</label>
                            </div>
                            <div class="col-md-8">
                                <p>{{$inventory->car->manufacturing_year}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Registration number</label>
                            </div>
                            <div class="col-md-8">
                                <p>{{$inventory->car->registration_number}}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Description</label>
                            </div>
                            <div class="col-md-8">
                                <p>{{$inventory->car->description}}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-success btn-lg" href="{{route('sold', ['id' =>$inventory->id ])}}">Sold</a> 
                        </div>
                    </div>    
                </div>
            </div>
        @endforeach
    </div>
    <script>
        $(document).ready(function() {
            $('#inventory').DataTable();

            $("[id^=car]").click(function(){
               var id = $(this).attr('id');
               id = id.split('-')[1];
               $("#modal-" + id).modal("show");
            });
        });
    </script>
@endsection