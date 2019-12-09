@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('documents/getFile') }}" title="upload file">
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
            <a href="{{ route('documents.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="document" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>DOCUMENT TYPE ID </th>
            <th>FILEPATH</th>
            <th>USER ID </th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($documents as $document)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $document->document_type_id }}</td>
                <td>{{ $document->filepath }}</td>
                <td>{{ $document->user_id }}</td>
                <td>
                    <a href="{{ URL::to('documents/'.$document->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('documents.show',$document->id) }}" title="View.">
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
            var table = $("#document").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
