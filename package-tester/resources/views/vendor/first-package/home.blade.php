@extends('first-package::layout')
@section('content')
    <div>
        <h2>{{$message}}</h2>
        <h5>Transaltion:: {{trans('first-package::message.wellcome')}}</h5>
        <h6>Translation Json:: {{__('Salutaion')}}</h6>
    </div>
@endsection
