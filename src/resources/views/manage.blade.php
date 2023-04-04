<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/manage.css') }}" />

</head>
<body>

<div class="manage__title">
    <h2>管理システム</h2>
</div>

<div class="manage__search">
<form class="search-form" action="/search" method="get">
    @csrf

<div class="manage__search--column">
    <div class="manage__search--line1">
        <div class="name">
            <p class="name__weight">お名前</p>


            <input class="name__text" type="text" name="firstname"  >



        </div>
        
        <div class="gender">

  <p class="name__gender">性別</p>
<div class="radio__all">
  <label for="radio-1">
    <input type="radio" name="gender" value="全て"
    id="radio-1">
    <span class="mwform-radio-field-text">全て</span>
  </label>

  <label for="radio-2">
    <input type="radio" name="gender" value="男性" id="radio-2">
    <span>男性</span>
  </label>

  <label for="radio-3">
    <input type="radio" name="gender" value="女性" id="radio-3">
    <span>女性</span>
  </label>
</div>

        </div>
        </div>

    <div class="manage__search--line2">
        <p class="name__weight">登録日</p>
        <input class="date__text1" type="date" name="start_date" id="start_date" >
        <p>~</p>
        <input class="date__text2" type="date" name="end_date" id="end_date" >
    </div>

    <div class="manage__search--line3">
        <p class="name__weight">メールアドレス</p>
        <input class="email__text" type="email" name="email"  >
    </div>
    
    <div class="button1">
    <button class="form__button-submit1" type="submit">検索</button>
    </div>
    <div class="button2">
    <button class="form__button-submit2" type="reset">リセット</button>
    </div>
</div>

<table>
    {{ $contact->links() }}
  <tr>
    <th>ID</th>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>ご意見</th>

  </tr>
  @foreach ($contact as $contact)
  <tr>
    <td >{{ $contact->id }}</td>
    <td >{{ $contact->firstname }}{{ $contact->lastname }}</td>
    <td >{{ $contact->gender }}</td>
    <td >{{ $contact->email }}</td>
    <td >{{ $contact->content }}</td>
  </tr>
  @endforeach
</table>
</form>
</div>





      <div class="delete-form__button">
        <button class="delete-form__button-submit" type="submit">削除</button>
      </div>
    
</body>

