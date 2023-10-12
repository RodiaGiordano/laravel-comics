@extends('layouts.app')

@section('page-title', 'Homepage')


@section('main-content')

<div class="jumbo">
    <img src="{{ Vite::asset('public\images\jumbotron.jpg')}}" alt="" />
    
  </div>
  <div class="main_wrapper">
    <span class="label_series">CURRENT SERIES</span>



    @foreach ($config as $item)
        
    <div class="card border-0 gap-2 align-items-center">
        <img src="{{$item['thumb']}}" alt="" />
        <span>{{$item['series']}}</span>
    </div>
    
    @endforeach




    <span class="load_more">LOAD MORE</span>
  </div>

@endsection