<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CONTACT</title>
<link rel="stylesheet" href="reset.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" href="images/logo/top-logo.svg" type="image/svg+xml">
<link rel="icon" href="images/logo/top-logo.png">
<link href="style.css" rel="stylesheet" type="text/css">
<script>
  (function(d) {
    var config = {
      kitId: 'uhi4dps',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
  (function(d) {
    var config = {
      kitId: 'uhi4dps',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

</head>

<body>
<!--header-->
<div class="header-contact">
  <div class="wrapper text-center">
    <h1 class="top-home">
        <span class="top-inc"><a href="index.html"><img src="images/logo/top-logo.svg" alt="top,inc"></a></span>
        <span class="top-title">T・O・P,inc</span>
    </h1>
    <div class="top-contact"><a href="contact.html"><p>Contact</p></a></div>
  </div>
</div>
<!--/header-->
<div class="contact-page text-center">
  <h2 class="form-title">Contact</h2>
  <p class="inquiry-txt">お問合わせはこちら</p>
</div>
  
  <div class="form">
    <form action="mailto:info@toppy.co.jp" method="post" enctype="text/plain">
      <ul class="form-list">
        <li class="form-item">
          <label for="yourname"><span class="contact-title">お名前</span><span class="mandatory">必須</span></label>
          <input  id="yourname" type="text" name="yourname" placeholder="会社名">
        </li>
        <li class="form-item">
          <label for="mail"><span class="contact-title">メールアドレス</span><span class="mandatory">必須</span></label>
          <input id="mail" type="email" name="mail" placeholder="例) info@toppy.co.jp">
        </li>
        <li class="form-item">
          <label for="textarea"><span class="contact-title">お問い合わせ内容</span><span class="mandatory">必須</span></label>
          <textarea  name="txtarea" id="textarea" cols="30" rows="10" placeholder="お問い合わせ内容をご記入ください"></textarea>
        </li>
        
        <li class="form-item">
          <div class="button_wrap"><input id="button" name="button" type="submit" value="送信"></div>
        </li>
      </ul>
    </form>
  </div>
 <footer>
    <div class="footer">
        <div>
          <span class="footer-inc"><a href="index.html"><img src="images/logo/top-logo.svg" alt="top,inc"></a></span>
          <span class="footer-title">T・O・P,inc</span>
        </div>
      <small>
        ©︎2020 T・O・P,inc.
      </small>
    </div>
  </footer>
</body>
</html>
