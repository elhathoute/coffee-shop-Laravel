<h1>lis of posts </h1>

<ul>
    @foreach ($posts as $post )

    <li>
        <h2><a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a> </h2>
        <p>{{$post->content}}</p>
        <em>{{$post->created_at}}</em>
    </li>
    @endforeach

</ul>
