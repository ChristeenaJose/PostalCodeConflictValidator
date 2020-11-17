@extends("layouts.theam")
@php
$currentUrl = URL::current();
$rootUrl = URL::to('') . '/task2';
@endphp

@section("title", "Business Types")

@section("pageHeader")
<ul>
    <li class=""><a href="{{URL::to('')}}/" accesskey="1" title=""><strong>Task 1</strong></a></li>	
    <li class="current_page_item"><a href="{{URL::to('')}}/task2" accesskey="2" title=""><strong>Task 2</strong></a>
    </li>
</ul>
@endsection

@section("pageContent")
<form name="addBusiness" method="post" action="{{$rootUrl}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="txtName">Name</label>
        <input type="text" value="{{old('txtName')}}" id="txtName" name="txtName" class="form-control">

        @if($errors->has('txtName'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txtName')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt1">Unbearbeltet</label>
        <input type="text" value="{{old('txt1')}}" id="txt1" name="txt1" class="form-control">
        @if($errors->has('txt1'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt1')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt2">GF fehlt</label>
        <input type="text" value="{{old('txt2')}}" id="txt2" name="txt2" class="form-control">
        @if($errors->has('txt2'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt2')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt3">Nicht Erreicht</label>
        <input type="text" value="{{old('txt3')}}" id="txt3" name="txt3" class="form-control">
        @if($errors->has('txt3'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt3')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt4">Wiedervorlage</label>
        <input type="text" value="{{old('txt4')}}" id="txt4" name="txt4" class="form-control">
        @if($errors->has('txt4'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt4')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt5">Kein Interesse</label>
        <input type="text" value="{{old('txt5')}}" id="txt5" name="txt5" class="form-control">
        @if($errors->has('txt5'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt5')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt6">Zu viele Versuche</label>
        <input type="text" value="{{old('txt6')}}" id="txt6" name="txt6" class="form-control">
        @if($errors->has('txt6'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt6')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt7">Termine</label>
        <input type="text" value="{{old('txt7')}}" id="txt7" name="txt7" class="form-control">
        @if($errors->has('txt7'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt7')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt8">Kunden</label>
        <input type="text" value="{{old('txt8')}}" id="txt8" name="txt8" class="form-control">
        @if($errors->has('txt8'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt8')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt9">Blacklist</label>
        <input type="text" value="{{old('txt9')}}" id="txt9" name="txt9" class="form-control">
        @if($errors->has('txt9'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt9')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <label for="txt10">Insgesamt</label>
        <input type="text" value="{{old('txt10')}}" id="txt10" name="txt10" class="form-control">
        @if($errors->has('txt10'))
            <div class="alert alert-danger" role="alert"><strong>{{$errors->first('txt10')}}</strong></div>
        @endif
    </div>
    <div class="form-group">
        <button class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection