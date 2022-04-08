<ul class="menu">


      <li class="menu-item active">
        <a class="menu-link" href="#">
          <span class="icon fa fa-home"></span>
          <span class="title">Anasayfa</span>
        </a>
      </li>



      <li class="menu-category">Randevular</li>


      <li class="menu-item">
        <a class="menu-link" href="#">
          <span class="icon ti-layout"></span>
          <span class="title">Randevular</span>
          <span class="arrow"></span>
        </a>

        <ul class="menu-submenu">
          <li class="menu-item">
            <a class="menu-link" href="{{route('getAllRandevu')}}">
              <span class="dot"></span>
              <span class="title">Tüm Randevular</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-category">Doktorlar</li>
      <li class="menu-item">
        <a class="menu-link" href="#">
          <span class="icon ti-layout"></span>
          <span class="title"> Doktorlar </span>
          <span class="arrow"></span>
        </a>

        <ul class="menu-submenu">
          <li class="menu-item">
            <a class="menu-link" href="{{route('getCreateDoktor')}}">
              <span class="dot"></span>
              <span class="title">Doktor Ekle</span>
            </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="{{route('getAllDoktor')}}">
              <span class="dot"></span>
              <span class="title">Tüm Doktorlar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-category">Birimler</li>
      <li class="menu-item">
        <a class="menu-link" href="#">
          <span class="icon ti-layout"></span>
          <span class="title">Tüm Birimler</span>
          <span class="arrow"></span>
        </a>

        <ul class="menu-submenu">
          <li class="menu-item">
            <a class="menu-link" href="{{route('getCreateBirim')}}">
              <span class="dot"></span>
              <span class="title">Birim Ekle</span>
            </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="{{route('getAllBirim')}}">
              <span class="dot"></span>
              <span class="title">Tüm Birimler</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>