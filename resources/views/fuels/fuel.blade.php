@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('fuels/getFile') }}" title="upload file">
        <i class="fas fa-file-upload fa-2x"></i>
    </a>
@endsection
@section('download-icons')
    <div class="downloads"></div>
@endsection
@section('add-new')
    <div class="control">
        <div class="tags has-addons">
            <span class="tag is-success">
                +
            </span>
            <a href="{{ route('fuels.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="fuel" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>USER ID </th>
            <th>DEPARTMENT ID </th>
            <th>MODEL</th>
            <th>PLATE</th>
            <th>MILAGE</th>
            <th>LITRE</th>
            <th>ADMIN</th>
            <th>AUDIT</th>
            <th>STORE</th>
            <th>DISPENSER</th>
            <th>LITRE DISPENSED </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($fuels as $fuel)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $fuel->user_id }}</td>
                <td>{{ $fuel->department_id }}</td>
                <td>{{ $fuel->model }}</td>
                <td>{{ $fuel->plate }}</td>
                <td>{{ $fuel->milage }}</td>
                <td>{{ $fuel->litre }}</td>
                <td>{{ $fuel->admin }}</td>
                <td>{{ $fuel->audit }}</td>
                <td>{{ $fuel->store }}</td>
                <td>{{ $fuel->dispenser }}</td>
                <td>{{ $fuel->litre_dispensed }}</td>
                <td>
                    <a href="{{ URL::to('fuels/'.$fuel->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('fuels.show',$fuel->id) }}" title="View.">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            var table = $("#fuel").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
