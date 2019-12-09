@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('recommendations/getFile') }}" title="upload file">
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
            <a href="{{ route('recommendations.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="recommendation" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>STAFF ID </th>
            <th>COMMENTS</th>
            <th>DATE RECOMMENDED </th>
            <th>DATE EFFECTED </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($recommendations as $recommendation)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $recommendation->staff_id }}</td>
                <td>{{ $recommendation->comments }}</td>
                <td>{{ $recommendation->date_recommended }}</td>
                <td>{{ $recommendation->date_effected }}</td>
                <td>
                    <a href="{{ URL::to('recommendations/'.$recommendation->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('recommendations.show',$recommendation->id) }}" title="View.">
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
            var table = $("#recommendation").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
