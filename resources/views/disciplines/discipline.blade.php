@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('disciplines/getFile') }}" title="upload file">
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
            <a href="{{ route('disciplines.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="discipline" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>STAFF ID </th>
            <th>COMMENTS</th>
            <th>DISCIPLINE DATE </th>
            <th>DATE RESTORED </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($disciplines as $discipline)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $discipline->staff_id }}</td>
                <td>{{ $discipline->comments }}</td>
                <td>{{ $discipline->discipline_date }}</td>
                <td>{{ $discipline->date_restored }}</td>
                <td>
                    <a href="{{ URL::to('disciplines/'.$discipline->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('disciplines.show',$discipline->id) }}" title="View.">
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
            var table = $("#discipline").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
