{{--略--}}
<h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>

{{----------ここから追加----------}}
<a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger">
  <i class="fab fa-google mr-1"></i>Googleで登録
</a>
{{----------ここまで追加----------}}

@include('error_card_list')