@extends('layouts.app')

@section('content')


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">

            <div class="entry__media col-full">
                <div class="entry__post-thumb" align="center">
                    <img src="{{ URL::to('/') }}/images/{{ $post->image }}" 
                         srcset="{{ URL::to('/') }}/images/{{ $post->image }} 2000w, 
                                 {{ URL::to('/') }}/images/{{ $post->image }} 1000w, 
                                 {{ URL::to('/') }}/images/{{ $post->image }} 500w" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    {{ $post->title }}
                </h1>
                <ul class="entry__header-meta">
                    <li class="date">{{ $post->updated_at }}</li>
                    <li class="byline">
                        By
                        <a href="#0">Admin</a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">

                {!! $post->content !!}



                <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5>Posted In: </h5>
                        <span class="entry__tax-list">
                            <a href="#0">{{ $post->category_name }}</a>
                        </span>
                    </div> <!-- end entry__cat -->

                </div> <!-- end s-content__taxonomies -->

            </div> <!-- s-entry__main -->

        </article> <!-- end entry/article -->

        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                @if (! empty($prev))
                <div class="col-six s-content__prev">
                    <a href="{{ url('/post/'.$prev->slug) }}" rel="prev">
                        <span>Previous Post</span>
                        {{ $prev->title }} 
                    </a>
                </div>
                @endif
                @if (! empty($next))
                   <div class="col-six s-content__next">
                    <a href="{{ url('/post/'.$next->slug) }}" rel="next">
                        <span>Next Post</span>
                        {{ $next->title }}
                    </a>
                </div>
                @endif
               
            </div>
        </div> <!-- end s-content__pagenav -->

    </section> <!-- end s-content -->



@endsection