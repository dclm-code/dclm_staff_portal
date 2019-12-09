@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('leaves/getFile') }}" title="upload file">
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
            <a href="{{ route('leaves.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="leafe" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>STAFF ID </th>
            <th>RELIEVER</th>
            <th>DAYS REQUESTED </th>
            <th>BALANCE OF LEAVE </th>
            <th>PUBLIC HOLIDAY </th>
            <th>BASICS</th>
            <th>ALLOWANCE</th>
            <th>DATE RESUME </th>
            <th>ENTITLED</th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($leaves as $leafe)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $leafe->staff_id }}</td>
                <td>{{ $leafe->reliever }}</td>
                <td>{{ $leafe->days_requested }}</td>
                <td>{{ $leafe->balance_of_leave }}</td>
                <td>{{ $leafe->public_holiday }}</td>
                <td>{{ $leafe->basics }}</td>
                <td>{{ $leafe->allowance }}</td>
                <td>{{ $leafe->date_resume }}</td>
                <td>{{ $leafe->entitled }}</td>
                <td>
                    <a href="{{ URL::to('leaves/'.$leafe->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('leaves.show',$leafe->id) }}" title="View.">
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
            var table = $("#leafe").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
