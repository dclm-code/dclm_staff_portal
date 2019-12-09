@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('group_lgas/getFile') }}" title="upload file">
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
            <a href="{{ route('group_lgas.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="group_lga" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>STATE ID </th>
            <th>REGION ID </th>
            <th>LOCAL GOVT NAME </th>
            <th>LOCAL GOVT CODE </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($group_lgas as $group_lga)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $group_lga->state_id }}</td>
                <td>{{ $group_lga->region_id }}</td>
                <td>{{ $group_lga->local_govt_name }}</td>
                <td>{{ $group_lga->local_govt_code }}</td>
                <td>
                    <a href="{{ URL::to('group_lgas/'.$group_lga->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('group_lgas.show',$group_lga->id) }}" title="View.">
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
            var table = $("#group_lga").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
