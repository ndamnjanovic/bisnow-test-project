<h2 class="col-md-8 col-md-offset-2"> Stories and articles </h2>

<div class="col-md-8 col-md-offset-2 contents">

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Content ID</th>
          <th>Content Title</th>
          <th>Content Text</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contents as $content)
            <tr>
              <td>{{{$content->id}}}</td>
              <td>
                  @if($content->article != null)
                    {{{$content->article->title}}}
                  @else
                    {{{$content->story->title}}}
                  @endif
              </td>
              <td>
                  @if($content->article != null)
                    {{{$content->article->content}}}
                  @else
                    {{{$content->story->content}}}
                  @endif
              </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="col-md-8 col-md-offset-2">
    <a class="btn btn-primary add-story" href="/new-story">Submit new story</a>
</div>