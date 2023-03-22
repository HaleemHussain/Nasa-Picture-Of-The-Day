@extends('theme.default')
<script type="module"
        src="https://1.www.s81c.com/common/carbon/web-components/version/v1.21.0/date-picker.min.js"></script>
<script type="module"
        src="https://1.www.s81c.com/common/carbon/web-components/tag/v1/latest/date-picker.min.js"></script>
@section('content')
    <div class="my-5 text-center">
        <h1>Pick a date and see NASA's picture of the day!</h1>
        <div class="col-lg-6 pt-5 mx-auto d-flex align-items-center justify-content-center">
            <div class="col-md-6 mb-5">
                <label class="form-label"> Select Date</label>
                <form method="POST" action="{{route('dateSelection')}}">
                    @csrf
                    <input type="date" class="form-control" name="date">
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
@endsection
