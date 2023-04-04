@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
<div class="center">
    
      
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
<div class="between">
        
        <div class="form__group--name">

            <div class="form__label--item">お名前 <span class="font__red">※</span></div>

          
        
            <div class="name__block1">
            <input class="name__text--1" type="text" name="firstname" value="{{ old('firstname') }}"/>
            <span class="text__example--name">例）山田</span>
            </div>

            <div class="name__block2">
            <input class="name__text--2" type="text" name="lastname" value="{{ old('lastname') }}"/>
            <span class="text__example--name">例）太郎</span>
            </div>
        </div>

            

            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('firstname')
              {{ $message }}
              @enderror

              @error('lastname')
              {{ $message }}
              @enderror
            
            </div>
        </div>


        <div class="form__group">

        <div class="form__group-title">
            <span class="form__label--gender">性別 <span class="font__red">※</span></span>
        </div>

        <div class="radio__all">

  <label for="radio-2">
    <input type="radio" name="gender" value="男性" id="radio-2" checked>
    <span>男性</span>
  </label>

  <label for="radio-3">
    <input type="radio" name="gender" value="女性" id="radio-3">
    <span>女性</span>
  </label>
</div>
        
        
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス <span class="font__red">※</span></span>
          </div>

          <div class="form__group-content">

            <div class="form__input--text">
              <input type="email" name="email" placeholder="" value="{{ old('email') }}"/>
            </div>
            
            <p class="text__example">例）test@example.com</p>  
            
         
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--post">郵便番号 <span class="font__red">※</span></span>
          </div>

          <div class="form__group-content">

            <div class="form__input--post">
              <img src="../css/img/post.jpeg" alt="郵便記号"/>
              <input class="post" type="text" name="post" placeholder="" value="{{ old('post') }}"/>
            </div>

            <p class="text__example--post">例）123-4567</p>  

            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('post')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所 <span class="font__red">※</span></span>
          </div>

          <div class="form__group-content">

            <div class="form__input--text">
              <input type="text" name="address" placeholder="" value="{{ old('address') }}"/>
            </div>

            <p class="text__example">例）東京都渋谷区千駄ヶ谷1-2-3</p>

            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">

            <div class="form__input--text">
              <input type="text" name="build" placeholder="" value="{{ old('build') }}"/>
            </div>

            <p class="text__example">例）千駄ヶ谷マンション101</p>

            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('build')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>



        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見 <span class="font__red">※</span></span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" value="{{ old('content') }}" ></textarea>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('content')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
</div>
      </form>
</div>
    @endsection