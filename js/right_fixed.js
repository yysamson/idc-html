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
            this.initClick();
            this.initHide();
            this.initAdd();
            this.initBanner();
        },
        //end init
        initClick:function(){
           $(".qq .bd").on("click",function(){
               window.location.href="tencent://message/?uin=1837721683&Site=yige.org&Menu=yes";
           });
            $(".qq").draggable({ appendTo: 'body' });
        },
        initHide:function(){
            $("._close").on("click",function(){
                $(".qq ._box").slideUp(1000);
                $(".qq .show").css("cursor","pointer");
            });
            $(".qq .show img").on("click",function(){
                $(".qq ._box").slideDown(1000);
                $(".qq .show").css("cursor","move");
            });
        },
        initAdd:function(){
            $("#tt").click(function(){
                var url=window.location.href;
                var ctrl=(navigator.userAgent.toLowerCase()).indexOf('mac')!=-1?'Command/Cmd': 'CTRL';
                if(document.all){
                    window.external.addFavorite(url, '三木森网络');
                }
                else if(window.sidebar){
                    window.sidebar.addPanel('三木森网络 ',url, "");
                }
                else{
                    alert('您可以通过快捷键' + ctrl + ' + D 加入到收藏夹');
                }
            });
        },
        initBanner:function(){
            var container= $(".banner .container"),first= $(".banner .content_first"),second=$(".banner .content_second");
            var i=0;
            var banner_time;
            container.eq(1).css("margin-left","-59.375em");
            second.css("top","-215px");
            function banner(){
                container.hide();
                i++;
                if(i%2==0){
                    container.eq(1).show().animate({marginLeft :0}, 2000);
                    second.animate({top :95}, 2000);
                    container.eq(0).css("margin-top","-410px");
                    first.css("right","-378px");
                }else{
                    container.eq(0).show().animate({marginTop :0}, 2000);
                    first.animate({right :142}, 2000);
                    container.eq(1).css("margin-left","-950px");
                    second.css("top","-215px");
                }
            };
            $('.banner').hover(function(){
                clearInterval(banner_time);
            },function(){
                banner_time=setInterval(banner,6000);
            }).trigger("mouseleave");
            $(".prev,.next").on("click",(function(){
                return function(){
                    banner();
                };
            })()
            );
        }
    };
    page.init();
}())

