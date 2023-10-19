<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signin | Mocal's</title>
    <link rel="icon" type="image/x-icon" href="images/fav.png" />
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <!-- Fonts -->
    <link href="./js/fonts.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"
    />

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/pages/register/register.css" />
    @livewireStyles
    @livewireScripts
  </head>

  <body>
    <section class="signin-bg">
      <div class="d-flex align-items-center justify-content-between h-100 flex-wrap">
        <div class="mocal-animation">
          <h1 class="TextWhite">
            <span class="OpacityFifty">Kickstart Your</span><br />
            Time Management Regime With <span class="TextYellow">MoCal</span>
          </h1>
          <h6 class="TextWhite">
            Risk-Free 30-Day Trial <br />
            <span class="OpacityFifty">No Credit Card Details Required</span>
          </h6>
            <dotlottie-player src="https://lottie.host/881e64b8-e799-49f1-a3be-6d247d51fbbd/goJ2dFDvzS.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>

        <div class="signin-card">


          @livewire('multi-step')
        </div>

        <div class="signin-circle-animation">
          <img src="images/register-assets/clock-animation.gif" />
          <h3>We'll help you find the perfect time with your clients. Please enter your details to start with and we'll fit you right in.</h3>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
{{-- <script src="https://cdn.tiny.cloud/1/777soj19kolru4art71pyoei5biguouavgrcgop6xabu7uog/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}

    <script>

    $(document).ready(function() {
        $('#country').dropdown({
            onChange: function(value, text, $selectedItem) {
                // When the dropdown selection changes, update the hidden input
                $('#country-input').val(value);
            }
        });
    });
    //   $("#country, .dropdownmenu").dropdown({
    //         onChange: function (value, text, $selectedItem) {
    //             $('input[name="country"]').val(value);
    //         }
    //     });
      $("#empolsize").dropdown();
      $("#client_list, #social_list").dropdown();

      $("#clientvalue").change(function () {
        if ($(this).val().length === 0) {
          //  alert('yes');
          //$(this).parent('.selectWrap').siblings('.profileSection').addClass('extya');
          $(".profileSection").css("display", "none");
        } else {
          //$(this).parent('.selectWrap').siblings('.profileSection').removeClass('extya');
          //alert('no');
          $(".profileSection").css("display", "block");
        }
      });
    </script>
{{-- <script>
  tinymce.init({
      selector: '#editor',
  });
</script> --}}


@stack('scripts')
  </body>
</html>
