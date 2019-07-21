@extends('layouts.app')

@section('content')
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Category : {{ $currentCat[0]->category_name }}</h1>
                
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">

                @foreach($cat as $row)
                <article class="col-block">
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="{{ url('/post/'.$row->slug) }}" class="item-entry__thumb-link">
                                <img src="{{ URL::to('/') }}/images/{{ $row->image }}" 
                                     " alt="">
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


    </section> <!-- end s-content -->

@endsection