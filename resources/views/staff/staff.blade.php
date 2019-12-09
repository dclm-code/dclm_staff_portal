@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('staff/getFile') }}" title="upload file">
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
            <a href="{{ route('staff.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="staff" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>USER ID </th>
            <th>STAFF NUMBER </th>
            <th>FIRST NAME </th>
            <th>MIDDLE NAME </th>
            <th>SURNAME</th>
            <th>GENDER</th>
            <th>DATE OF BIRTH </th>
            <th>DATE OF EMPLOYMENT </th>
            <th>MARITAL STATUS </th>
            <th>HOME ADDRESS </th>
            <th>NEXT OF KIN ID </th>
            <th>GRADE LEVEL ID </th>
            <th>QUALIFICATION ID </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($staff as $staff)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $staff->user_id }}</td>
                <td>{{ $staff->staff_number }}</td>
                <td>{{ $staff->first_name }}</td>
                <td>{{ $staff->middle_name }}</td>
                <td>{{ $staff->surname }}</td>
                <td>{{ $staff->gender }}</td>
                <td>{{ $staff->date_of_birth }}</td>
                <td>{{ $staff->date_of_employment }}</td>
                <td>{{ $staff->marital_status }}</td>
                <td>{{ $staff->home_address }}</td>
                <td>{{ $staff->next_of_kin_id }}</td>
                <td>{{ $staff->grade_level_id }}</td>
                <td>{{ $staff->qualification_id }}</td>
                <td>
                    <a href="{{ URL::to('staff/'.$staff->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('staff.show',$staff->id) }}" title="View.">
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
            var table = $("#staff").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
