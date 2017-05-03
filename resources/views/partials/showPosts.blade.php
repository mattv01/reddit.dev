	@foreach($posts as $post)
        <article class="col-md-4" style="height: 20em">
            <!-- POST TITLE -->
            <h3><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h3>

            <!-- POST URL -->
            <p>{{ $post->url }}</p>

            <!-- POST DESCRIPTION -->
            @if (strlen($post->content)>125)
                <p>{{ substr($post->content, 0, 125). "... " }}<a href="{{ action('PostsController@show', $post->id) }}">Full Description</a></p>
            @else
                <p>{{$post->content}}</p>
            @endif

            <!-- POSTED BY -->
            @if (Auth::id() == $post->created_by)
            	<p>Posted By <strong>You</strong></p>
            @else
            	<p>Posted By <strong>{{$post->user->name}}</strong></p>
            @endif

            <!-- WRITTEN ON -->
            <p>Written on: {{ $post->created_at->toDayDateTimeString() }}</p> 

            <!-- EDITED -->
            @if($post->created_at != $post->updated_at)
                <p>Edited {{ $post->updated_at->diffForHumans() }}</p>
            @endif

        </article>
    @endforeach