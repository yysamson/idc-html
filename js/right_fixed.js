/**
 * Created by Administrator on 14-6-7.
 */

(function () {
    Function.prototype.bind = function () {
        var _args = arguments,
            _object = arguments[0],
            _function = this;
        return function () {
            // not use slice for chrome 10 beta and Array.apply for android
            var _argc = [].slice.call(_args, 1);
            [].push.apply(_argc, arguments);
            return _function.apply(_object || window, _argc);
        };
    };
    var page = {
        init: function () {
            this.initclick();
            this.init_hide();
        },
        //end init
        initclick:function(){
           $(".qq .bd").on("click",function(){
               window.location.href="tencent://message/?uin=1837721683&Site=yige.org&Menu=yes";
           })
        },
        init_hide:function(){
            $("._close").on("click",function(){
                $(".qq ._box").slideUp(1000);
                $(".qq .show").css("cursor","pointer");
            });
            $(".qq .show img").on("click",function(){
                $(".qq ._box").slideDown(1000);
                $(".qq .show").css("cursor","auto");
            });
        }
    };
    page.init();
}())

