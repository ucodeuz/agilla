@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Добрый день, {{ Auth::user()->name }}!</li>
    </ol>
  </div>
</div>
<div class="page-content">
  dashboard
</div>
@endsection