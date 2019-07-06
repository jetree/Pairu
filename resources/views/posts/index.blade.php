<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{アプリタイトル}</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://kit.fontawesome.com/77d57efb85.js"></script>
  </head>
  <body>
    <header>
      <div class="conteiner">
        <h1>{アプリタイトル}</h1>
      </div>
    </header>
    <main>
      <div class="conteiner">
        <ul>
          @foreach ($posts as $post)
          <li class="todo">
            <h2>
              {!! nl2br(e($post->todo)) !!}
            </h2>
            <ul class="submenu">
              <li>
                <a href="">
                  <i class="far fa-check-square"></i>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="far fa-comment"></i>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fas fa-pen"></i>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </li>
            </ul>
          </li>
          @endforeach
        </ul>

      </div>
      <div class="" id="todo-add">
        <i class="fas fa-edit"></i>
      </div>
      <div class="" id="todo-add-area">
        <form action="{{ url('/') }}" method="post">
          {{ csrf_field() }}
          @if ($errors->has('todo'))
          <span class="errors">{{ $errors->first('todo') }}</span>
          @endif
          <p>
            <textarea name="todo" placeholder="enter todo" value="{{ old('todo') }}"></textarea>
          </p>
          <p>
            <input type="submit" value="登録">
          </p>
        </form>
      </div>
    </main>
    <footer>
      <div class="conteiner">
        <h2>おまけ</h2>
      </div>
    </footer>
  </body>
</html>
