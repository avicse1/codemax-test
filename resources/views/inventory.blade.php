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
                <tr>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                </tr>
                <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                </tr>
                <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                </tr>
            </tbody>
        </table>
        
    </div>
    <script>
        $(document).ready(function() {
            $('#inventory').DataTable();
        });
    </script>
@endsection