<aside class="col-md-4 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="font-italic">Цитата из библии</h4>
      <p class="mb-0">{{ $bibleQuote->description }}</p>
      <p class="font-weight-bold text-right"><i>{{ $bibleQuote->address }}</i></p>
    </div>

    <div class="p-4">
      <h4 class="font-italic">Все теги</h4>
      <ol class="list-unstyled mb-0">
        @foreach ($tagsCloud as $tag)
          <li><a class="text-info" href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a></li>
        @endforeach
      
      </ol>
    </div>
  </aside><!-- /.blog-sidebar -->