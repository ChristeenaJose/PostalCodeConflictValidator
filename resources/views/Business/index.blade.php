@php
$currentUrl = URL::current();
$rootUrl = URL::to('') . '/task2';
@endphp

@extends("layouts.theam")
@section("title", "Business Types")

@section("pageHeader")
<ul>
    <li class=""><a href="{{URL::to('')}}/" accesskey="1" title=""><strong>Task 1</strong></a></li>	
    <li class="current_page_item"><a href="{{URL::to('')}}/task2" accesskey="2" title=""><strong>Task 2</strong></a>
    </li>
</ul>
@endsection

@section("pageContent")

<!-- Search Start-->
<!--<form name="searchPostCode" method="GET" action="{{$rootUrl}}">
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
</form>-->
<!-- Search End-->

@if(!empty($message))
<!-- Message -->
<div class="alert alert-{{ $message['flag'] === 'success' ? 'success' : 'danger' }}" role="alert">
    <strong>{{$message["content"]}}!</strong>
</div>
@endif

<!-- Add Button -->
<p style="height:70px;">
    <a href="{{$rootUrl}}/create" class="btn btn-dark btn-lg pull-right">
        <span class="glyphicon glyphicon-plus"></span>Add New Record
    </a>
</p>

<p>
<!-- Business Types Listing-->
@if(isset($dbBusiness))
    @if(count($dbBusiness) > 0)

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th style="text-align:center">Branches</th>
                    <th style="text-align:center">Unbearbeltet</th>
                    <th style="text-align:center">GF fehlt</th>
                    <th style="text-align:center">Nicht Erreicht</th> 
                    <th style="text-align:center">Wiedervorlage</th> 
                    <th style="text-align:center">Kein Interesse</th>
                    <th style="text-align:center">Zu viele Versuche</th>
                    <th style="text-align:center">Termine</th>
                    <th style="text-align:center">Kunden</th>
                    <th style="text-align:center">Blacklist</th>
                    <th style="text-align:center">Insgesamt</th>
                </tr>
            </thead>

            <tbody class="thead-light">
            @php
            $totalTxt1 = 0;
            $totalTxt2 = 0;
            $totalTxt3 = 0;
            $totalTxt4 = 0;
            $totalTxt5 = 0;
            $totalTxt6 = 0;
            $totalTxt7 = 0;
            $totalTxt8 = 0;
            $totalTxt9 = 0;
            $totalTxt10 = 0;
            @endphp

            @foreach($dbBusiness as $Business)
                @php
                    $totalTxt1 += $Business->txt1;
                    $totalTxt2 += $Business->txt2;
                    $totalTxt3 += $Business->txt3;
                    $totalTxt4 += $Business->txt4;
                    $totalTxt5 += $Business->txt5;
                    $totalTxt6 += $Business->txt6;
                    $totalTxt7 += $Business->txt7;
                    $totalTxt8 += $Business->txt8;
                    $totalTxt9 += $Business->txt9;
                    $totalTxt10 += $Business->txt10;

                @endphp
                <tr>
                    <td style="text-align:center">{{$Business->name}}</td>
                    <td style="text-align:center">{{$Business->txt1}}</td>
                    <td style="text-align:center">{{$Business->txt2}}</td>
                    <td style="text-align:center">{{$Business->txt3}}</td>
                    <td style="text-align:center">{{$Business->txt4}}</td> 
                    <td style="text-align:center">{{$Business->txt5}}</td>
                    <td style="text-align:center">{{$Business->txt6}}</td>
                    <td style="text-align:center">{{$Business->txt7}}</td>
                    <td style="text-align:center">{{$Business->txt8}}</td>
                    <td style="text-align:center">{{$Business->txt9}}</td>
                    <td style="text-align:center">{{$Business->txt10}}</td>
                </tr>
            @endforeach
            </tbody>
            
            <!-- Total -->
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th style="text-align:center">{{$totalTxt1}}</th>
                    <th style="text-align:center">{{$totalTxt2}}</th>
                    <th style="text-align:center">{{$totalTxt3}}</th>
                    <th style="text-align:center">{{$totalTxt4}}</th>
                    <th style="text-align:center">{{$totalTxt5}}</th>
                    <th style="text-align:center">{{$totalTxt6}}</th>
                    <th style="text-align:center">{{$totalTxt7}}</th>
                    <th style="text-align:center">{{$totalTxt8}}</th>
                    <th style="text-align:center">{{$totalTxt9}}</th>
                    <th style="text-align:center">{{$totalTxt10}}</th>
                </tr>
            </thead>
        </table>
    @else
        <!-- Message -->
        <div class="alert alert-success" role="alert">
            <strong>No Record Exist..</strong>
        </div>
        <!-- Message End-->
    @endif
@endif
<!-- Business Type Listing End-->
@endsection
</p>