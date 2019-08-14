@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Multiple File Upload using Ajax and Jquery</h1><br>                
                    <div class="form-group">
                        <div class="file-loading">
                            <input id="image-file" type="file" name="file" accept="image/*" data-min-file-count="1" multiple>
                        </div>
                    </div>                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("#image-file").fileinput({
            theme: 'fa',
            uploadUrl: "{{route('image.upload')}}",
            uploadExtraData: function() {
                return {
                    _token: "{{ csrf_token() }}",
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            overwriteInitial: false,
            maxFileSize:2048,
            maxFilesNum: 10
        });
    </script>
@endsection