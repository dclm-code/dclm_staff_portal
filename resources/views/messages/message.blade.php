@extends('layouts.table')
@section('upload')
    <a href="{{ URL::to('messages/getFile') }}" title="upload file">
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
            <a href="{{ route('messages.create') }}" class="tag">Add New</a>
        </div>
    </div>
@endsection

@section('data-table')
    <table id="message" class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <th>S/N</th>
            <th>SENDER</th>
            <th>RECEIVER</th>
            <th>SUBJECT</th>
            <th>MESSAGE</th>
            <th>DATE SENT </th>
            <th>DATE READ </th>
            <th>REPLIED</th>
            <th>READSTATE</th>
            <th>DELETED</th>
            <th>FORWARDED</th>
            <th>FORWARDEDTO</th>
            <th style="width:5%;">&nbsp;</th>
            <th style="width:5%;">&nbsp;</th>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach($messages as $message)
            <?php $i += 1; ?>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $message->sender }}</td>
                <td>{{ $message->receiver }}</td>
                <td>{{ $message->subject }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->date_sent }}</td>
                <td>{{ $message->date_read }}</td>
                <td>{{ $message->replied }}</td>
                <td>{{ $message->readstate }}</td>
                <td>{{ $message->deleted }}</td>
                <td>{{ $message->forwarded }}</td>
                <td>{{ $message->forwardedto }}</td>
                <td>
                    <a href="{{ URL::to('messages/'.$message->id.'/edit') }}" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('messages.show',$message->id) }}" title="View.">
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
            var table = $("#message").DataTable({
                buttons:[
                    'copy', 'excel', 'pdf'
                ]
            });
            table.buttons().container()
                .appendTo( $('.downloads') );
        });
    </script>
@endsection
