@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('next_of_kins/getFile') }}" title="upload file">
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
            <a href="{{ route('next_of_kins.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="next_of_kin" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>NAME</th>
            <th>MOBILE PHONE </th>
            <th>HOME PHONE </th>
            <th>OFFICE PHONE </th>
            <th>HOME ADDRESS </th>
            <th>POSTAL ADDRESS </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($next_of_kins as $next_of_kin)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $next_of_kin->name }}</td>
                <td>{{ $next_of_kin->mobile_phone }}</td>
                <td>{{ $next_of_kin->home_phone }}</td>
                <td>{{ $next_of_kin->office_phone }}</td>
                <td>{{ $next_of_kin->home_address }}</td>
                <td>{{ $next_of_kin->postal_address }}</td>
                <td>
                    <a href="{{ URL::to('next_of_kins/'.$next_of_kin->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('next_of_kins.show',$next_of_kin->id) }}" title="View.">
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
            var table = $("#next_of_kin").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
