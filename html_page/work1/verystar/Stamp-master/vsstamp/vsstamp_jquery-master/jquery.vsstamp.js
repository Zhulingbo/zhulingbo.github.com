(function($) {
  $.vsstamp = {
    stampScreen: {
      init: function(configs, client){
        var stampScreenElmId = configs.stampScreenElmId || "vsstamp-stamp-screen";
        var progressBarOn = configs.progressBarOn || false;
        var postViaAjax = configs.postViaAjax || false;
        var helpMessage = configs.messages.insufficientPoints;
        var postUrl = configs.postUrl || "/stampscreen";
        var success = configs.success || {};
        var error = configs.error || {};
        var points = [];
        var stampScreenElm = document.getElementById(stampScreenElmId);
        var stampTouching = false;
        var pollOpen = false;

        //添加onStamp事件
        var onStamp = configs.onStamp || {};
        //添加onStampHelpMessageShow事件
        var onStampHelpMessageShow = configs.onStampHelpMessageShow || {};

        stampScreenElm.addEventListener('touchstart', function(event) {
          $('#aaa').html(event.touches.length);

          $("#vsstamp-messages").empty();
          if (event.touches.length == 4 && helpMessage) {
            $("#vsstamp-messages").append(helpMessage);
            //调用onStampHelpMessageShow
            onStampHelpMessageShow();
            return false;
          };
          if (event.touches.length >= 5) {
            var data = [];
            var touches = event.touches;
            for (var i = 0; i <= event.touches.length; i++) {
              if (touches[i]) {
                data.push([touches[i].pageX, touches[i].pageY]);
              }
            }

            //调用onStamp
            onStamp();

            send(data, postViaAjax);
            if(progressBarOn){showSpinner()};
          }
        });

        function showSpinner() {
            $('#vsstamp-progress-bar').addClass("vsstamp-progress-bar");
        };

        function send(points, postViaAjax){
          if (postViaAjax){
            client.postAjax(points, postUrl, success, error);
          } else {
            client.post(points, postUrl);
          }
        }
      }
    },

    client: {
      //
      // Coupled to $.vsstamp.Base64
      //
      postAjax: function(data, endpoint, cbk, cbkError) {
        $.ajax({
          'url': endpoint,
          'data': "data=" + $.vsstamp.Base64.encode(JSON.stringify(data)),
          'type': "POST",
          'error': function(response) {
            cbkError(response.responseJSON);
          },
          'success': function(response) {
            cbk(response);
          }
        })
      },

      post: function(data, endpoint) {
        var form = $('<form method="POST"></form>');
        form.attr('action', endpoint);
        var input = $('<input name="data" type="hidden"></input>');
        input.val($.vsstamp.Base64.encode(JSON.stringify(data)));
        form.append(input);
        $('body').append(form);
        form.submit();
      }
    },

    Base64: {
      //
      // Base64 adapted from & courtesy of http://scotch.io
      //
      _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
      encode : function (input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;
        input = this._utf8_encode(input);
        while (i < input.length) {
          chr1 = input.charCodeAt(i++);
          chr2 = input.charCodeAt(i++);
          chr3 = input.charCodeAt(i++);
          enc1 = chr1 >> 2;
          enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
          enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
          enc4 = chr3 & 63;
          if (isNaN(chr2)) {
            enc3 = enc4 = 64;
          } else if (isNaN(chr3)) {
            enc4 = 64;
          }
          output = output +
          this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
          this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
        }
        return output;
      },

      _utf8_encode : function (string) {
        string = string.replace(/\r\n/g,"\n");
        var utftext = "";
        for (var n = 0; n < string.length; n++) {
          var c = string.charCodeAt(n);
          if (c < 128) {
            utftext += String.fromCharCode(c);
          }
          else if((c > 127) && (c < 2048)) {
            utftext += String.fromCharCode((c >> 6) | 192);
            utftext += String.fromCharCode((c & 63) | 128);
          }
          else {
            utftext += String.fromCharCode((c >> 12) | 224);
            utftext += String.fromCharCode(((c >> 6) & 63) | 128);
            utftext += String.fromCharCode((c & 63) | 128);
          }
        }
        return utftext;
      }
    }
  }
})(jQuery);

$.vsstamp.stampScreen.init(stampScreenInitData, $.vsstamp.client);
