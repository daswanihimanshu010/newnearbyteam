@extends('user.layout.client')
@section('title', 'Change Password ')
@section('content')

<style type="text/css">
#page-content-wrapper{
    background: #f3f1f1;
    min-height: 800px;
}
.outer-wrapper { 
    display: table;
    width: 100%;
    height: 100%;
    background: #f3f1f1;
}
.inner-wrapper {
    display:table-cell;
    vertical-align:middle;
    padding:15px;
}
.login-btn { position:fixed; top:15px; right:15px; }
</style>

<section id="loginform" class="outer-wrapper">

<div class="inner-wrapper">
<div class="container" style="margin-top: 10%;">
  <div class="columns">
    <div class="column is-offset-4">
     @include('common.notify')
      <form role="form" action="{{route('verify')}}" method="post" autocomplete="off">
        {{ csrf_field() }}
        <div class="field">
            <label for="password">Enter Password </label>
            <input type="password" name="password" class="input" id="password" placeholder="Enter Password">
        </div>
        <button type="submit" class="button is-default"> Send Email </button>
      </form>
    </div>
  </div>
</div>
</div>

</section>

@endsection