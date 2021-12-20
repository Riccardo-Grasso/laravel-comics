<footer>
    <div class="footer-icons-container">
     {{--  <ul>
        <li class="footer-icons" v-for="(icon, i) in footerIcons" :key="i">
          <a :href="icon.href">
            <img class="icon-img" :src="icon.img" :alt="icon.alt" />
            <div class="icon-text">{{ icon.text }}</div>
          </a>
        </li>
      </ul> --}}
    </div>

    <div class="footer-list-container">
      <div class="link-container">
        <div class="col-1">
          <div class="col-top">
            <div class="title">DC COMICS</div>
            {{-- <ul>
              <li class="links" v-for="(element, i) in linkTop" :key="i">
                <a :href="element.href">{{ element.link }}</a>
              </li>
            </ul> --}}
          </div>
          <div class="col-bottom">
            <div class="title">SHOP</div>
            {{-- <ul>
              <li class="links" v-for="(element, i) in linkBottom" :key="i">
                <a :href="element.href">{{ element.link }}</a>
              </li>
            </ul> --}}
          </div>
        </div>
        <div class="col-2">
          <div class="title">DC</div>
          {{-- <ul>
            <li class="links" v-for="(element, i) in linkCentral" :key="i">
              <a :href="element.href">{{ element.link }}</a>
            </li>
          </ul> --}}
        </div>
        <div class="col-3">
          <div class="title">SITES</div>
          {{-- <ul>
            <li class="links" v-for="(element, i) in linkRight" :key="i">
              <a :href="element.href">{{ element.link }}</a>
            </li>
          </ul> --}}
        </div>
      </div>
      <div class="image-container">
        <img src= {{asset("img/dc-logo-bg.png")}} alt="DC_Logo" />
      </div>
    </div>

    <div class="social">
      <div class="sign-up-button">
        <a href="#">SIGN-UP NOW!</a>
      </div>
      <div class="social-container">
        <div class="follow-us">FOLLOW US</div>
        <div class="social-list-container">
         {{--  <ul>
            <li class="social-icon" v-for="(social, i) in socialIcons" :key="i">
              <a href="#">
                <img :src="social.src" :alt="social.alt" />
              </a>
            </li>
          </ul> --}}
        </div>
      </div>
    </div>
  </footer>