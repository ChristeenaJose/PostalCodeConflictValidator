@php
$currentUrl = URL::current();
$rootUrl = URL::to('') . '/Search';
@endphp

@extends("layouts.theam")
@section("title", "Postal Code Conflict Validator")

@section("pageHeader")
<ul>
    <li class="current_page_item"><a href="{{URL::to('')}}/" accesskey="1" title=""><strong>Task 1</strong></a></li>	
    <li class=""><a href="{{URL::to('')}}/task2" accesskey="2" title=""><strong>Task 2</strong></a>
    </li>
</ul>
@endsection

@section("pageContent")

<!-- Search Start-->
<form name="searchPostCode" method="GET" action="{{$rootUrl}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="txtPostcode">Please Enter Postcode</label>
        
        @if($errors->has('txtPostcode'))
        @unset($dbPostConflicts)
            <input type="text" value="{{old('txtPostcode')}}" id="txtPostcode" name="txtPostcode" class="form-control" maxlength="5" >
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txtPostcode')}}</strong></div>
        @else
            <input type="text" value="{{isset($searchQry) ? $searchQry : ''}}" id="txtPostcode" name="txtPostcode" class="form-control" maxlength="5" >
        @endif

    </div>
    <div class="form-group">
        <button class="btn btn-primary" >SEARCH</button>
    </div>
</form>
<!-- Search End-->

<!-- Conflict Listing-->
@if(isset($dbPostConflicts))

    @if(count($dbPostConflicts) > 0)

        <!-- Message -->
        <div class="alert alert-danger" role="alert">
            <strong>Conflict found..</strong>
        </div>
        <!-- Message End-->

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th style="text-align:center"> Sales Person Name</th>
                    <th style="text-align:center"> Post Code</th>
                </tr>
            </thead>
            <tbody class="thead-light">
            @foreach($dbPostConflicts as $PostConflicts)
            <tr>
                <td style="text-align:center">{{$PostConflicts->salesPersonName}}</td>
                <td style="text-align:center">{{$PostConflicts->postCode}}</td> 
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <!-- Message -->
        <div class="alert alert-success" role="alert">
            <strong>No Conflict found..</strong>
        </div>
        <!-- Message End-->
    @endif
@endif
<!-- Conflict Listing End-->
@endsection
