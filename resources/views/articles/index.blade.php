<h1>
    ciao
</h1>

@foreach ($articlesPublished as $article)
    <h2>{{$article->title}}</h2>
    <small>{{$article->created_at}}</small>
@endforeach
