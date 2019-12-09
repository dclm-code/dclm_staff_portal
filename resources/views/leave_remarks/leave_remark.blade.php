@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('leave_remarks/getFile') }}" title="upload file">
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
            <a href="{{ route('leave_remarks.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="leave_remark" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>HOD REMARK </th>
            <th>CS REMARK </th>
            <th>ADMIN REMARK </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($leave_remarks as $leave_remark)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $leave_remark->hod_remark }}</td>
                <td>{{ $leave_remark->cs_remark }}</td>
                <td>{{ $leave_remark->admin_remark }}</td>
                <td>
                    <a href="{{ URL::to('leave_remarks/'.$leave_remark->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('leave_remarks.show',$leave_remark->id) }}" title="View.">
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
            var table = $("#leave_remark").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
