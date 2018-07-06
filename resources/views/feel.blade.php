@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('feel.post') }}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        
        <div class="form-group">
            <label>temp</label><span class="label label-danger">必須</span>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="feel" value=1>HOT
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="feel" value=-1>COLD
                </label>
            </div>
            <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">send</button>
            </div>
        </div>
        </div>
            </form>
@endsection