<section class="l-system">
          <div class="l-system__inner">
            <h2 class="l-system__ttl">料金体系</h2>
            <div class="l-system__wrapper">
              <div class="l-system__box">
                <h4 class="l-system__box__txt">入会金 39,800円</h4>
              </div>
              <div class="l-system__plus"></div>
              <div class="l-system__box">
                <h4 class="l-system__box__txt">月額費用</h4>
              </div>
            </div>
            <p class="l-system__copy">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
          </div><!-- /.l-system__inner -->
        </section><!-- /.l-system -->
        <section class="l-list">
          <div class="l-list__inner">
            <h2 class="l-list__ttl">料金表</h2>
            <div class="l-list__scroll">
              <div class="l-list__wrapper">
                <div class="l-list__box">
                  <div class="l-list__box__ttl-bg">
                    <h3 class="l-list__box__ttl">基礎プラン</h3>
                  </div>
                  <h4 class="l-list__box__price"><?php $price = get_field('基礎プラン'); echo number_format($price); ?>円~</h4>
                  <p class="l-list__box__price-txt">*月額（税抜価格）</p>
                  <div class="l-list__box__body">
                    <p class="l-list__box__body-txt--1">カリキュラム作成</p>
                    <p class="l-list__box__body-txt">TOEFL学習サポート</p>
                    <p class="l-list__box__body-txt">週一回のビデオMTG</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
                <div class="l-list__box">
                  <div class="l-list__box__ttl-bg">
                    <h3 class="l-list__box__ttl">演習プラン</h3>
                  </div>
                  <h4 class="l-list__box__price"><?php $practice = get_field('演習プラン'); echo number_format($practice); ?>円~</h4>
                  <p class="l-list__box__price-txt">*月額（税抜価格）</p>
                  <div class="l-list__box__body">
                    <p class="l-list__box__body-txt--1">カリキュラム作成</p>
                    <p class="l-list__box__body-txt">TOEFL学習サポート</p>
                    <p class="l-list__box__body-txt">週一回のビデオMTG</p>
                    <p class="l-list__box__body-txt">月二回の模試（解説<br>付き）</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
                <div class="l-list__box--recommend">
                  <div class="l-list__box__ttl-bg--recommend">
                    <h3 class="l-list__box__ttl--recommend">おすすめ<br>志望校対策プラン</h3>
                  </div>
                  <h4 class="l-list__box__price--recommend"><?php $recommend = get_field('志望校対策プラン'); echo number_format($recommend); ?>円~</h4>
                  <p class="l-list__box__price-txt">*月額（税抜価格）</p>
                  <div class="l-list__box__body">
                    <p class="l-list__box__body-txt--1">カリキュラム作成</p>
                    <p class="l-list__box__body-txt--recommend">TOEFL学習サポート</p>
                    <p class="l-list__box__body-txt--recommend">週一回のビデオMTG</p>
                    <p class="l-list__box__body-txt--recommend">月二回の模試（解説<br>付き)</p>
                    <p class="l-list__box__body-txt--recommend">週一の英語面接対策</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
                <div class="l-list__box">
                  <div class="l-list__box__ttl-bg">
                    <h3 class="l-list__box__ttl">フレックスプラン</h3>
                  </div>
                  <h4 class="l-list__box__price"><?php $flex = get_field('フレックスプラン'); echo number_format($flex); ?>円~</h4>
                  <p class="l-list__box__price-txt">*月額（税抜価格）</p>
                  <div class="l-list__box__body">
                    <p class="l-list__box__body-txt--none">＊別途ご相談ください</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
              </div><!-- /.l-list__wrapper -->
            </div><!-- /.l-list__scrool -->
          </div><!-- /.l-list__inner -->
        </section><!-- /.l-list -->
