/**
 * Created by Peter.Ge on 15-11-10.
 * @version:2015.12.28
 */
(function(doc,win){
    win['App'] = {
        script : null,
        orient_change : null,
        $: function(selector)
        {
            if (!selector) return null;
            var method = (selector.substr(0,1) == '#') ? doc.getElementById : doc.getElementsByClassName;
            var dom = method.call(doc,selector.substr(1));
            return dom;
        },

        init: function()
        {
            this.script = App.$('#appjs');
        },

        fitScreen: function()
        {
            var docEl = doc.documentElement,
                dfs = (docEl.attributes['data-dfs']) ?  docEl.attributes['data-dfs'].value : 20,
                dw = (docEl.attributes['data-dw']) ? docEl.attributes['data-dw'].value : 320,
                resizeEvt = 'orientationchange' in win ? 'orientationchange' : 'resize',
                recalc = function () {
                    var clientWidth = docEl.clientWidth;
                    if (clientWidth) {
                        docEl.style.fontSize = dfs * (clientWidth / dw) + 'px';
                    }

                    if (typeof(win.App.orient_change) == 'function'){
                        var mql = win.matchMedia("(orientation: portrait)");
                        win.App.orient_change.apply(null,[!mql.matches]);
                    }
                };

            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', function(){
                recalc();
                doc.getElementsByTagName("body")[0].style.height = win.innerHeight + 'px';
            }, false);
        },

        setOrientChange: function(func)
        {
            this.orient_change = func;
        },

        get: function(name)
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
        }
    };

    /**
     * Audio class
     * @param opt
     */
    App.Audio = function (selector,opt)
    {
        var _this = this;
        this.options = {
            src:opt.src,
            icon_play_cls: opt.icon_play_cls || 'music',
            icon_stop_cls: opt.icon_stop_cls || 'music music_close',
            ended: opt.ended || null,
            autoplay: opt.autoplay || false,
            loop: opt.loop || false
        };
        this.icon = App.$(selector)[0];//doc.createElement('a');
        if (!this.icon){
            throw "music icon is not exists";
        }
        this.beep = doc.createElement('audio');
        this.beep.setAttribute('src',this.options['src']);

        if (this.options['loop']){
            this.beep.setAttribute('loop','loop');
        }
        if (_this.options['autoplay']){
            this.beep.setAttribute('autoplay',true);
            this.beep.addEventListener('loadeddata',function(){
                this.play();
            });
            this.icon.setAttribute('class',this.options['icon_play_cls']);
        }else{
            this.icon.setAttribute('class',this.options['icon_stop_cls']);
        }


        //this.icon.setAttribute('href','javascript:void(0)');
        this.icon.addEventListener('touchend',function(){
            if (_this.beep.paused){
                _this.play();
                _this.icon.setAttribute('class',_this.options['icon_play_cls']);
            }else{
                _this.pause();
                _this.icon.setAttribute('class',_this.options['icon_stop_cls']);
            }
        });
        //doc.body.appendChild(this.icon);

        this.beep.addEventListener('ended', function(){
            _this.icon.setAttribute('class',_this.options['icon_stop_cls']);
            if (_this.options['ended'] && typeof(_this.options['ended']) == 'function'){
                _this.options['ended'].call();
            }
        });
        this.beep.load();

    };

    App.Audio.prototype.play = function(){
        this.beep.play();
    };

    App.Audio.prototype.pause = function(){
        this.beep.pause()
    };


    App.init();
    if (App.script.getAttribute('data-adapt') == 1){
        App.fitScreen();
    }
})(document,window);