<?php include 'header.php' ?>
<div class="container">
    <div class="span-6">
        <aside class="span-6">
            <ul class="side-menu-1">
                <li class="header">产品管理</li>
                <li><a>域名管理</a></li>
                <li><a>虚拟主机管理</a></li>
                <li><a>邮箱管理</a></li>
                <li><a>云VPS管理</a></li>
                <li><a>云VPS主机</a></li>
                <li><a>订单管理</a></li>
            </ul>
        </aside>
        <aside class="span-6">
            <ul class="side-menu-1">
                <li class="header">其他管理</li>
                <li><a>用户资料</a></li>
                <li><a>财务管理</a></li>
                <li><a>在线充值</a></li>
                <li><a>安全退出</a></li>
            </ul>
        </aside>
    </div>

    <main class="span-18 last">
        <div class="dingdanchaxun">
            <div class="chaxun-jg span-16 last">
                <div class="span-16 chaxun-jg-1">
                    <span class="sousuo icon icon-sousuo span-14 last">域名查询</span>
                   <span class="span-14 last xiadan-time">
                       <span class="span-3">下单时间：</span>
                       <span class="span-9">
                           <form>
                           <span class="span-4">
                               <input class="span-4" type="date" name="date">

                           </span>
                               <span class="span-1"style="text-align: center">至</span>
                           <span class="span-4 last">
                               <input class="span-4" type="date" name="date">
                           </span>
                           </form>
                       </span>
                   </span>
                   <span class="span-14 last dingdanzhuangtai">
                       <span class="span-3">订单状态：</span>
                       <select class="span-2 last">
                           <option>已支付</option>
                           <option>未支付</option>
                           <option>已支付</option>
                           <option>未支付</option>
                       </select>
                   </span>
                    <span class="dingdan-chaxun span-14"><a class="btn">查询</a></span>
                </div>
            </div>

            <div class="yuming-cp span-16 last">
                <div class="span-16 yuming-cp1 bg-cl-white last">
                    <h2>域名产品</h2>
                    <div class="span-16">
                        <table width="100%" id="mytab" class="mail-peizhi-tr">
                            <thead class="user-yuming">
                            <th width="15%">域名</th>
                            <th width="15%">购买时间</th>
                            <th width="15%">到期时间</th>
                            <th width="12%">操作</th>
                            <tr>
                                <td>gjfxypx.com </td>
                                <td>2014-04-07</td>
                                <td>2014-04-07</td>
                                <td><a class="cl-blue-light">解析</a><a class="cl-blue-light">  续费</a></td>
                            </tr>
                            <tr>

                                <td>gjfxypx.com </td>
                                <td>2014-04-07</td>
                                <td>2014-04-07</td>
                                <td><a class="cl-blue-light">解析</a><a class="cl-blue-light">  续费</a></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="span-16 yuming-cp1 bg-cl-white last">
                    <h2>域名详情</h2>
                    <div class="span-16 last">
                        <table width="100%" cellspacing="0" class="yumingxiangqing-tr" id="mytab">
                            <thead>
                            <tr>
                                <td width="20%" class="cl-blue-light yumingxiangqing-td">域名：</td>
                                <td width="50%" class="yumingxiangqing-td1">www.yysamson.com</td>
                                <td width="20%" class="yumingxiangqing-td1">
                                     <a class="cl-blue-light">域名续费</a>  <a class="cl-blue-light">域名解析</a>
                                </td>
                            </tr>
                            <tr>
                                <td  class="cl-blue-light yumingxiangqing-td">注册联系人信息</td>
                                <td class="yumingxiangqing-td1"></td>
                                <td class="yumingxiangqing-td1"></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table width="100%" id="mytab" border="1" class="yuming-td2">
                                        <thead>
                                        <td width="20%" class="yumingxiangqing-td">注册类型：</td>
                                        <td width="80%" class="yumingxiangqing-td1">www.yysamson.com</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">联系人：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">公司名称：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">所在国家：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">省份：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">城市：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">通信地址：</td>
                                            <td class="yumingxiangqing-td1">余姚市万年桥路49号，三木森网络科技发展有限公司</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">邮编：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">电话号码：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr>
                                            <td class="yumingxiangqing-td">传真：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                        <tr style="border: 0">
                                            <td class="yumingxiangqing-td">电子邮件：</td>
                                            <td class="yumingxiangqing-td1">三木森</td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td  class="cl-blue-light yumingxiangqing-td">管理联系人：</td>
                                <td class="yumingxiangqing-td1">同注册人联系</td>
                                <td class="yumingxiangqing-td1">&nbsp;</td>
                            </tr>
                            <tr>
                                <td  class="cl-blue-light yumingxiangqing-td">技术联系人：</td>
                                <td class="yumingxiangqing-td1">同注册人联系</td>
                                <td class="yumingxiangqing-td1">&nbsp;</td>
                            </tr>
                            <tr>
                                <td  class="cl-blue-light yumingxiangqing-td">付款联系人：</td>
                                <td class="yumingxiangqing-td1">同注册人联系</td>
                                <td class="yumingxiangqing-td1">&nbsp;</td>
                            </tr>
                            <tr>
                                <td  class="cl-blue-light yumingxiangqing-td">注册联系人信息：</td>
                                <td class="yumingxiangqing-td1">同注册人联系</td>
                                <td class="yumingxiangqing-td1">&nbsp;</td>
                            </tr>
                            <tr>
                                <td  class="cl-blue-light yumingxiangqing-td">注册联系人信息：</td>
                                <td class="yumingxiangqing-td1">同注册人联系</td>
                                <td class="yumingxiangqing-td1">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </main>
</div>
<?php include 'footer.php' ?>