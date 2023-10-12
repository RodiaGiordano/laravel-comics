<footer>
    <div class="footer_top">
      <section>
        @foreach ($footer_img as $item)
            <div class="card flex-row align-items-center border-0">
                <img src="{{Vite::asset($item['pic'])}}" alt="" />
                <span class="text-white">{{ $item['pic_text'] }}</span>
            </div>
        @endforeach
      </section>
    </div>

    <div class="footer_middle">
      <section>
        @foreach($footer_link as $item)
            <div class="listLinks">
            <h3>{{ $item['nameList'] }}</h3>

            <ul>
                @foreach($item['links'] as $list)
                    <li>
                    {{$list}}
                    </li>
                @endforeach
            </ul>
            </div>
        @endforeach
      </section>
    </div>

    {{-- <div class="footer_bottom">
      <section>
        <div class="sing_up">SIGN-UP NOW!</div>
        <div class="ft_icons">
          <ul>
            <li class="follow_us">FOLLOW US</li>

            <li>
              <img
                src="../../public/vue-dc-comics-1/img/footer-facebook.png"
                alt=""
              />
            </li>

            <li>
              <img
                src="../../public/vue-dc-comics-1/img/footer-twitter.png"
                alt=""
              />
            </li>
            <li>
              <img
                src="../../public/vue-dc-comics-1/img/footer-youtube.png"
                alt=""
              />
            </li>
            <li>
              <img
                src="../../public/vue-dc-comics-1/img/footer-pinterest.png"
                alt=""
              />
            </li>
            <li>
              <img
                src="../../public/vue-dc-comics-1/img/footer-periscope.png"
                alt=""
              />
            </li>
          </ul>
        </div>
      </section>
    </div> --}}
  </footer>