/**
 * Created by Peter.Ge on 15-11-10.
 */
(function(doc,win){
    win['App'] = {
        $: function(id)
        {
            if (!id) return null;
            var method = (id.substr(0,1) == '#') ? doc.getElementById : doc.getElementsByClassName;
            return method.call(doc,id.substr(1));
        },

        init: function()
        {
            console.log(win.navigator.userAgent);
            this.fitsrc();
        },

        fitsrc: function()
        {
            var html = doc.documentElement,
                dfs = (html.attributes['data-dfs']) ?  html.attributes['data-dfs'].value : 20,
                dw = (html.attributes['data-dw']) ? html.attributes['data-dw'].value : 320,
                resizeEvt = 'orientationchange' in win ? 'orientationchange' : 'resize',
                recalc = function () {
                    var clientWidth = html.clientWidth;
                    if (!clientWidth) return;
                    html.style.fontSize = dfs * (clientWidth / dw) + 'px';
                };
            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        },

        $get: function(name)
        {
            var url = doc.location.href.toString(),
                u = url.split("?"),_get = {};
            if (typeof(u[1]) == "string") {
                u = u[1].split("&");
                for (var i in u) {
                    var j = u[i].split("=");
                    _get[j[0]] = j[1];
                }
            }
            return (name) ? _get[name]:_get;
        },

        audio: function (opt)
        {
            var beep,icon = doc.createElement('a'),
                options = {
                    src:opt.src,
                    icon_play_cls: opt.play_cls,
                    icon_stop_cls: opt.stop_cls,
                    ended: opt.ended || null,
                    autoplay: opt.autoplay || true,
                    loop: opt.loop || false
                };
            beep = doc.createElement('audio');
            beep.setAttribute('src',options.src);
            if (options.loop){
                beep.setAttribute('loop','loop');
            }
            if (options.ended){
                icon.setAttribute('class',options.icon_stop_cls);
                beep.addEventListener('ended', options.ended);
            }
            if (options.icon_play_cls){
                icon.setAttribute('class',options.icon_play_cls);
                icon.setAttribute('href','javascript:void(0)');
                icon.addEventListener('touchend',function(){
                    if (beep.paused){
                        beep.play();
                        icon.setAttribute('class',options.icon_play_cls);
                    }else{
                        beep.pause();
                        icon.setAttribute('class',options.icon_stop_cls);
                    }
                });
                doc.body.appendChild(icon);
            }
            beep.addEventListener('loadeddata',function(){
                if (options.autoplay) this.play();
            });
            beep.load();

        }
    };

    if (App.$('#appjs').getAttribute('data-init') == 1){
        App.init();
    }
})(document,window);