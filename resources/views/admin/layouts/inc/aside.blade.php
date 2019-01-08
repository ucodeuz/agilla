<aside class="aside">
  <div class="aside-inner">
    <a class="aside-logo" href="/cp">Agilla CP</a>
    <ul class="nav aside-nav">
      <li class="nav-item">
        <a class="nav-link" href="/offers">
          <i class="icon icon-postcard"></i>
          <span class="text">Предложение</span>
          <span class="badge">2</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/messenger">
          <i class="icon icon-mail"></i>
          <span class="text">Сообщения</span>
          <span class="badge">2</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/complaints">
          <i class="icon icon-post-box"></i>
          <span class="text">Жалобы</span>
          <span class="badge">6500</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/reviews">
          <i class="icon icon-clipboard-checklist"></i>
          <span class="text">Отзывы</span>
          <span class="badge">2</span>
        </a>
      </li>
      @can('isAdministrator')
      <li class="nav-item">
        <a class="nav-link" href="/users">
          <i class="icon icon-user"></i>
          <span class="text">Пользователи</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categories">
          <i class="icon icon-folder"></i>
          <span class="text">Категории</span>
        </a>
      </li>
      <li class="nan-item">
        <a class="nav-link" href="/regions">
          <i class="icon icon-map"></i>
          <span class="text">Регионы</span>
        </a>
      </li>
      
      <li class="nan-item">
        <a class="nav-link" href="{{ route('employees.index') }}">
          <i class="icon icon-team"></i>
          <span class="text">Оргструктура</span>
        </a>
      </li>
      
      <li class="nan-item">
        <a class="nav-link" href="/stats">
          <i class="icon icon-chart"></i>
          <span class="text">Статистика</span>
        </a>
      </li>
      @endcan
    </ul>
    
    <a class="aside-user" href="{{ route('profile') }}">
      {{ Auth::user()->name }}
    </a>

  </div>
</aside>