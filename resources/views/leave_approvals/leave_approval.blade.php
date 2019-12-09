@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('leave_approvals/getFile') }}" title="upload file">
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
            <a href="{{ route('leave_approvals.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="leave_approval" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>DAYS APPROVED </th>
            <th>CS APPROVAL </th>
            <th>HOD APPROVAL </th>
            <th>ADMIN APPROVAL </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($leave_approvals as $leave_approval)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $leave_approval->days_approved }}</td>
                <td>{{ $leave_approval->cs_approval }}</td>
                <td>{{ $leave_approval->hod_approval }}</td>
                <td>{{ $leave_approval->admin_approval }}</td>
                <td>
                    <a href="{{ URL::to('leave_approvals/'.$leave_approval->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('leave_approvals.show',$leave_approval->id) }}" title="View.">
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
            var table = $("#leave_approval").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
