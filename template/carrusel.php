
  <link rel="stylesheet" href="css/carrusel.css?<?=date('Y-m-d H:i:s')?>">


<body>
  <div class="media-container">
    <div class="media-scroller">

      <!--   Group 1 -->
      <div class="media-group" id="group-1">
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/126-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/707-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/75-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/102-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/15-manufacturer_default.jpg"
            alt="">
        </div>

        <a class="next" href="#group-2" aria-label="next">
          <svg>
            <use href="#next"></use>
          </svg>
        </a>
      </div>

      <!-- Group 2   -->
      <div class="media-group" id="group-2">
        <a class="previous" href="#group-1">
          <svg>
            <use href="#previous"></use>
          </svg>
        </a>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/111-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/625-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/639-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/126-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/310-manufacturer_default.jpg"
            alt="">
        </div>
        <a class="next" href="#group-3" aria-label="next">
          <svg>
            <use href="#next"></use>
          </svg>
        </a>
      </div>

      <!-- Group 3   -->
      <div class="media-group" id="group-3">
        <a class="previous" href="#group-2">
          <svg>
            <use href="#previous"></use>
          </svg>
        </a>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/354-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/100-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/20-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/363-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/73-manufacturer_default.jpg"
            alt="">
        </div>
        <a class="next" href="#group-4" aria-label="next">
          <svg>
            <use href="#next"></use>
          </svg>
        </a>
      </div>

      <!--  Group 4  -->
      <div class="media-group" id="group-4">
        <a class="previous" href="#group-3">
          <svg>
            <use href="#previous"></use>
          </svg>
        </a>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/18-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/663-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/56-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/22-manufacturer_default.jpg"
            alt="">
        </div>
        <div class="media-element">
          <img
            src="https://www.sercoplus.com/img/m/99-manufacturer_default.jpg"
            alt="">
        </div>
      </div>

      <div class="navigation-indicators">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>

    </div>
  </div>


  <svg>
    <symbol id="next" viewBox="0 0 256 512">
      <path fill="white"
        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
    </symbol>

    <symbol id="previous" viewBox="0 0 256 512">
      <path fill="white"
        d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
    </symbol>
  </svg>
</body>

</html>