
@extends('reports.layout')
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-family: 'Poppins', sans-serif">Add New Report</h2>
            </div>
            <div style="text-align: right">
                <a class="btn btn-primary" href="{{ route('reports.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('reports.store') }}" method="POST" class="was-validated">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 position-relative">
                <div class="form-group">
                    <label for="validationTooltip03" class="form-label">Bill No</label>
                    <input type="text"  name="billNo" class="form-control" id="validationTooltip03" pattern="[B]{1}[0-9]{4}" placeholder="Bill No" required>
                    <div class="invalid-tooltip">
                        Please provide a Bill No.
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="col-xs-12 col-sm-12 col-md-12 position-relative">
                 <div class="form-group">
                    <label for="validationTooltip03" class="form-label">Item No</label>
                    <input type="text"  name="itemNo" class="form-control" id="validationTooltip03" pattern="[I]{1}[0-9]{4}" placeholder="Item No" required>
                    <div class="invalid-tooltip">
                        Please provide a Item No.
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 position-relative">
                <div class="card-body">
                    <div class="form-group">
                        <label for="validationTooltip03" class="form-label">Reason</label>
                        <textarea class="form-control" name="reason" id="summernote" maxlength="150"></textarea>
                    </div>
                    <div class="invalid-tooltip">
                        Please type at least 100 word.
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Submit Report</button>
            </div>
        </div>
    </form>

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>

@endsection
