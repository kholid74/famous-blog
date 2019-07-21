@extends('layouts.app')

@section('content')

<!-- s-content
    ================================================== -->
   <section class="s-content s-content--top-padding s-content--narrow">
        
        <div class="row entries-wrap wide">
            <div class="entries">
      @foreach($data as $row)
      <article class="col-block">
        <div class="item-entry" data-aos="zoom-in" >
            <div class="item-entry__thumb">
                <a href="{{ url('/post/'.$row->slug) }}" class="item-entry__thumb-link">
                    <img src="{{ URL::to('/') }}/images/{{ $row->image }}" 
                         " alt="" >
                </a>
            </div>

            <div class="item-entry__text">    
                <div class="item-entry__cat">
                    <a href="{{ url('/category/'.$row->cat_slug) }}">{{ $row->category_name }}</a> 
                </div>

                <h1 class="item-entry__title"><a href="{{ url('/post/'.$row->slug) }}">{{ $row->title }}</a></h1>
                    
                <div class="item-entry__date">
                    <a href="{{ url('/post/'.$row->slug) }}">{{ $row->updated_at }}</a>
                </div>
            </div>
        </div> <!-- item-entry -->

    </article> <!-- end article -->
    @endforeach
    
            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

    <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    {{ $data->links() }}
            </div>
        </div>

    </section> <!-- end s-content --> 

     

@endsection