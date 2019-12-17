<footer class="page-footer" id="footer">
  <div class="container">
    <div class="row">
      
      <form action="/footerform" method="POST">
      {{ csrf_field() }}
      <div class="col l12 s12" style="    padding-bottom: 60px;">
        <img src="assets/img/logo 2.png" class="responsive-img">
        <p class="foot_text_d">Если у Вас есть какие-либо вопросы, пожелания или предложения, напишите нам и мы обязательно свяжемся с вами</p>
        <div class="input-field col s12 l6 m12" style="padding-left: 0px; padding-right: 20px;">
          <input placeholder="Ваше имя" name="name" id="first_name" type="text" class="validate foot_form" required>
        </div>
        <div class="input-field col s12 l6 m12" style="padding-left: 0px; padding-right: 20px;">
          <input placeholder="text" id="email" name="email" type="email" class="validate foot_form" required>
        </div>
        
        <div class="input-field col s12 l6 m12" style="padding-left: 0px; padding-right: 20px; display:none;">
          <input placeholder="E-mail" id="email" name="email1" type="email1" class="validate foot_form" value="Форма подвал">
        </div>
        
        
        
        
        
        
        
<div class="col l12 m12 s12 footer_form1">
<textarea placeholder="Текст сообщения" id="textarea3" name="message3" class="validate nu_kogada_uj footer_form2" required></textarea >
</div> 
    
        
 <div class="col s12 l4 m4" style="padding-left: 0px;">
  
                         {!! app('captcha')->display() !!}
                     
        </div>
        
        <div class="input-field col s12 l4 m4 right" style="padding-left: 0px;">
          <button class="waves-effect waves-light btn foot_bnt"type="submit">ОТПРАВИТЬ</button>
        </div>

      </div>
        
      </form>
      <hr style="width: 97%;border: 1px solid white;">
      <div class="col l12">
        <div class="col l2 s6 m6">
          <ul>
            <li class="zagol">О НАС</li>
            <a href="/rukovodstvo">
              <li class="norm_tex_foo">Руководство</li>
            </a>
            <a href="/experts">
              <li class="norm_tex_foo">Эксперты</li>
            </a>
            <a href="/regions">
              <li class="norm_tex_foo">Регионы</li>
            </a>
            <a href="/photos">
              <li class="norm_tex_foo">Галерея</li>
            </a>
          </ul>
        </div>
        <div class="col l2 s6 m6">
          <ul>
            <li class="zagol">ПРОЕКТЫ</li>
            <a href="http://it-start.rusinnovations.com/">
              <li class="norm_tex_foo">It-Start</li>
            </a>
            <a href="/robostart">
              <li class="norm_tex_foo">robo Start</li>
            </a>
            <!--<a href="/global">-->
            <!--  <li class="norm_tex_foo">Global Science</li>-->
            <!--</a>-->
            <a href="/creative">
              <li class="norm_tex_foo">AIR Creative</li>
            </a>
          </ul>
        </div>
        <div class="col l2 s6 m6">
          <ul>
            <a href="/events">
              <li class="zagol">МЕРОПРИЯТИЯ</li>
            </a>
            <a href="/thenews">
              <li class="norm_tex_foo zagol">Новости</li>
            </a>
          </ul>
        </div>
        <div class="col l3 s6 m6">
          <ul>
            <a href="/docs">
              <li class="zagol">ДОКУМЕНТЫ</li>
            </a>
            <a href="/uchdocs">
              <li class="norm_tex_foo">Учредительные документы</li>
            </a>
            <a href="/otchet">
              <li class="norm_tex_foo">Отчеты</li>
            </a>
          </ul>
        </div>
        <div class="col l2 s6 m6">
          <ul>
            <a href="/contacts">
              <li class="zagol">КОНТАКТЫ</li>
            </a>
          </ul>
        </div>
        <div class="col l1 s6 m6">
          <ul style="text-align: right;">
            <li style="padding-bottom: 25px;"><a href="https://vk.com/aidrussia" style="font-size: 16px;"><i class="fa  fa-vk" aria-hidden="true" style="color:#ffffff;"></i></a></li>
            <li style="padding-bottom: 25px;"><a href="https://www.facebook.com/ProgrammaItStart/" style="font-size: 16px;"><i class="fa  fa-facebook" aria-hidden="true" style="color:#ffffff;"></i></a></li>
            <li><a href="http://instagram.com/airpressa" style="font-size: 16px;"><i class="fa fa-instagram" aria-hidden="true" style="color:#ffffff;"></i></a></li>
            <li><!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=46284999&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/46284999/3_0_0025AFFF_0025AFFF_1_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="46284999" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46284999 = new Ya.Metrika({
                    id:46284999,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46284999" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
