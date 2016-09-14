/**
 * Created by Administrator on 15-1-15.
 */
(function(){
    var df_width = 320,df_dpr = 1,df_fs = 20, win = window, doc = document,html = doc.getElementsByTagName('html')[0];
    /*
    if (win.devicePixelRatio < 3) {
        html.setAttribute('data-dpr',win.devicePixelRatio);
        html.setAttribute('style','font-size:' + (win.screen.width/df_width * win.devicePixelRatio * df_fs)+'px');
    }else{
        console.log(win.screen.width);
        html.setAttribute('data-dpr',2.6);
        html.setAttribute('style','font-size:' + (win.screen.width/df_width * 2.6 * df_fs)+'px');
    }*/
    html.setAttribute('data-dpr',win.devicePixelRatio);
    html.setAttribute('style','font-size:' + (doc.documentElement.clientWidth/df_width * df_fs)+'px');
})();